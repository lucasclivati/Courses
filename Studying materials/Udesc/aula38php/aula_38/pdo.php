<?php
$dadosPDO = [
    'dns' => 'mysql:host=localhost;dbname=aula_38',
    'usuario' => 'root',
    'senha' => ''
];

$db = new PDO($dadosPDO['dns'], $dadosPDO['usuario'], $dadosPDO['senha']);