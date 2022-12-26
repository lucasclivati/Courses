<?php
require_once 'parametros.php';

try {
    $pdo = new PDO($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo['senha']);
    $sql = "SELECT 
                nome, 
                resumo, 
                imagem, 
                DATE_FORMAT(data_criacao, '%d/%m/%Y') AS data_criacao,
                produto_id
            FROM produto
            ORDER BY nome";

    $produtoList = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $html = '';
    foreach ($produtoList as $produto) {
        $html .= '<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 produto-list-item"
                    data-id="' . $produto['produto_id'] . '">
                    <img src="/img/' . $produto['imagem'] . '" alt="img" width="120" height="120" class="flex-shrink-0">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div class="align-self-center">
                            <h4 class="mb-0 h4">' . $produto['nome'] . '</h4>
                            <p class="mb-0 opacity-75">' . $produto['resumo'] . '</p>
                        </div>
                        <small class="opacity-50 text-nowrap">' . $produto['data_criacao'] . '</small>
                    </div>
                </a>';
        
    }
} catch (Exception $e) {
    $html = '<p>Não foi possivel carregar todos os produtos.</p>';
}

echo $html;
