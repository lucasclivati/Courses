<?php
$produto = [
    'nome' => 'Camiseta',
    'valor' => 25.5,
    'desconto' => 0.1 // 10% de desconto
];

$valorComDesconto = $produto['valor'] * (1 - $produto['desconto']);

$msg = "O valor original de {$produto['nome']} é de R$ ". number_format($produto['valor'],2,',','.') .". Na promoção, o valor será de R$ ". number_format($valorComDesconto,2,',','.');

echo $msg;
