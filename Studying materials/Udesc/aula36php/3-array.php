<?php
// https://www.php.net/manual/pt_BR/language.types.array.php

// Array Indexado
$pessoaIndexado = [
    'João',
    'Silva',
    30,
    1.7,
    'masculino',
    false
];

/* Maneira Alternativa: $pessoaIndexado = array('João','Silva',30,1.7,'masculino',false); */

$msg = "<p>{$pessoaIndexado[0]} {$pessoaIndexado[1]} tem {$pessoaIndexado[2]} anos de idade. Tem {$pessoaIndexado[3]} m de altura</p>";
echo $msg;

// Array Associativo
$pessoaAssociativo = [
    'nome' => 'João',
    'sobrenome' => 'Silva',
    'idade' => 30,
    'altura' => 1.7,
    'sexo' => 'masculino',
    'doador' => false
];

/* Maneira Alternativa: $pessoaAssociativo = array('nome'=>'João','sobrenome'=>'Silva','idade'=>30,'altura'=>1.7,sexo=>'masculino','doador'=>false); */

$msg = "<p>{$pessoaAssociativo['nome']} {$pessoaAssociativo['sobrenome']} tem {$pessoaAssociativo['idade']} anos de idade. Tem {$pessoaAssociativo['altura']} m de altura</p>";
echo $msg;