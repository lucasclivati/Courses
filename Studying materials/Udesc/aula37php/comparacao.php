<?php
$produto[] = [
    'nome' => 'Camiseta',
    'valor' => 50,
    'desconto' => 0.1 // 10% de desconto
];

$produto[] = [
    'nome' => 'Calça',
    'valor' => 80.25,
    'desconto' => 0.2 // 20% de desconto
];

$indice = 0;

// Aplicar desconto de 20% para produtos que custam mais do que R$ 50.
if($produto[$indice]['valor'] >= 50) {
    $valorComDesconto = $produto[$indice]['valor'] * (1 - 0.2);
    $msg = "O produto {$produto[$indice]['nome']} terá 20% de desconto. De: R$ {$produto[$indice]['valor']}, por: R$ {$valorComDesconto}";
} else {
    $msg = "O produto {$produto[$indice]['nome']} não atingiu o valor mínimo e não terá desconto. Valor: {$produto[$indice]['valor']}"; 
}

echo $msg;