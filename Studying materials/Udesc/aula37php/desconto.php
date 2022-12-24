<?php
$produto[] = [
    'nome' => 'Camiseta',
    'valor' => 25.5,
];

$produto[] = [
    'nome' => 'Calça',
    'valor' => 80.25,
];

$pagamento = $_GET['pagamento'];
$indice = $_GET['indice'];

//15% de desconto para pagamentos no débito
if($pagamento == 'd') {
    $desconto = 0.15;
} else {
    $desconto = 0;
}

$valorComDesconto = $produto[$indice]['valor'] * (1 - $desconto);

$msg = "O produto {$produto[$indice]['nome']} de R$ {$produto[$indice]['valor']}, com desconto ficará por R$ {$valorComDesconto}";

echo $msg;