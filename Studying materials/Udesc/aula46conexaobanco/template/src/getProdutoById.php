<?php
require_once 'parametros.php';

try {
    $produto_id = isset($_GET['produto_id']) ? $_GET['produto_id'] : '';

    if (!$produto_id) {
        throw new Exception('Deve ser informado um produto a ser localizado.');
    }

    $pdo = new PDO($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo['senha']);
    $sql = "SELECT 
                nome, 
                resumo, 
                imagem, 
                DATE_FORMAT(data_criacao, '%d/%m/%Y') AS data_criacao,
                produto_id,
                descricao
            FROM produto
            WHERE (produto_id = :produto_id)
            ORDER BY nome
            LIMIT 1";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(':produto_id', $produto_id);
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    $produto = $resultado[0];

    if (!$produto) {
        throw new Exception('O produto informado não existe.');
    }

    $html = '<div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title fs-5">
                        <h4 class="h4" id="produto-nome">' . $produto['nome'] . '</h4>
                        <h6 class="h6" id="produto-resumo">' . $produto['resumo'] . '</h6>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="produto-imagem">
                        <img src="/img/' . $produto['imagem'] . '" alt="" class="rounded w-50 mx-auto d-block">
                    </div>
                    <div id="produto-descricao">' . $produto['descricao'] . '</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>';
} catch (Exception $e) {
    $html = '<div class="modal-content">
        <div class="modal-header">
            <div class="modal-title fs-5">
                <h4 class="h4">Erro no carregamento</h4>
            </div>
        </div>
        <div class="modal-body">
            <div>
                <p>Não foi possivel carregar detalhes do produtos.</p>
                <p>' . $e->getMessage() . '</p>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
    </div>';
}

echo $html;
