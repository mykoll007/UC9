<?php


$balao_magico["Balão_Mágico"] = [
    'texto' => 'Olá sou o balao mágico',
    'cor' => 'azul',
    'tamanho' => 'grande'
];
echo '<pre>';
echo json_encode($balao_magico,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

$carros_de_corrida["Carros_de_Corrida"] = [
    'cor' => 'verde',
    'tamanho' => 'medio'
];
echo '<pre>';
echo json_encode($carros_de_corrida,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

$bonecas["Bonecas"] = [
    'cor' => 'rosa',
    'tamanho' => 'pequeno'
];
echo '<pre>';
echo json_encode($bonecas,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

$carteados["Carteados"] = [
    'cor' => 'amarelo',
    'tamanho' => 'pequeno'
];
echo '<pre>';
echo json_encode($carteados,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

$tabuleiros["Tabuleiros"] = [
    'cor' => 'branco',
    'peças' => '24'
];
echo '<pre>';
echo json_encode($tabuleiros,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>