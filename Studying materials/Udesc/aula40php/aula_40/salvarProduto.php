<?php

$upload = $_FILES['imagem'];

$tipo = 'image/jpeg';
$tamanhoMaximo = 5242880; // 5MB
$arquivoDefinitivo = 'upload' . $upload['name'];

$tipoValido = $upload['type'] == $tipo ? true : false;
$tamanhoValido = $upload['size'] <= $tamanhoMaximo ? true : false;

if ($tipoValido && $tamanhoValido)  {
    if (move_uploaded_file($upload['tmp_name'], $arquivoDefinitivo)){
        $dadosPdo = [
            'dns' => 'mysql:host=localhost; dbname=aula_40',
            'usuario' => 'root',
            'senha' => ''
        ];

        $pdo = new PDO($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo['senha']);

         $retorno = [
        'status' => 'sucesso',
        'mensagem' => 'Arquivo salvo com sucesso.',
    ];   
    } else {
        $retorno = [
            'status' => 'erro',
            'mensagem' => 'Não foi possível salvar o arquivo.',
        ];   
    }

} else {
    $retorno = [
        'status' => 'erro',
        'mensagem' => 'O arquivo não é válido'
    ];
}

var_dump($upload);

$retorno = [
    'status' => 'erro',
    'mensagem' => 'nada foi configurado no arquivo',
];

echo json_encode($retorno);