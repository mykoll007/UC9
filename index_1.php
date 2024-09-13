<?php
//Existem duas funções fundamentais no php para tratar JSON.
//Uma para criar dados no formato JSON.
//Outra para transofrmar dados de formato JSON em PHP(arrays)

//transforma arrays em JSON

$dados = [
    'João',
    'Ana',
    'Carlos',
    'Joaquim',
    'Cristina'
];
echo '<pre>';
//json_encode transforma um array em uma string JSON.

echo json_encode($dados);
echo '<hr>';
echo json_encode($dados, JSON_PRETTY_PRINT);
echo '<hr>';
echo json_encode($dados, JSON_UNESCAPED_UNICODE);

echo '<hr>';
echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
echo '<hr>';
//associação por js

$dadoss = [
    'administrador' => 'João Ribeiro',
    'secretaria' => 'Carla Santos',
    'diretor_geral' => 'Márcio Silva',
    'oficial_contas' => 'Fernanda Correia'
];

echo json_encode($dadoss, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);


?>

<script>
    let dadoss = JSON.parse('<?=json_encode($dadoss, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?> ');

    console.log(dadoss);
</script>
