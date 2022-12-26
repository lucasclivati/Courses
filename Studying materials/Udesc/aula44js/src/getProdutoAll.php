<?php
require_once 'parametros.php';
$pdo = new PDO($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo['senha']);
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

    $resultado = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $json = [
        'status' => 'sucesso',
        'msg' => 'Listado todos os produtos com sucesso.',
        'dados' => $resultado
    ];
} catch (Exception $e) {
    $json = [
        'status' => 'erro',
        'msg' => $e->getMessage(),
        'dados' => []
    ];
}

echo json_encode($json);
