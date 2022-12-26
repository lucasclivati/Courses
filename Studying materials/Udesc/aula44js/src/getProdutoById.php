<?php
require_once 'parametros.php';

try {
    $produto_id = isset($_GET['produto_id']) ? $_GET['produto_id'] : '';

    if(!$produto_id) {
        throw new Exception('Deve ser informado um produto a ser localizado (produto_id).');
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

    if(!$resultado) {
        throw new Exception('O produto informado não existe.');
    }

    $json = [
        'status' => 'sucesso',
        'msg' => 'Listado todos os produtos com sucesso.',
        'dados' => $resultado[0]
    ];
} catch (Exception $e) {
    $json = [
        'status' => 'erro',
        'msg' => $e->getMessage(),
        'dados' => []
    ];
}

echo json_encode($json);
