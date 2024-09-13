<?php
// A função json_decode permite a operação contrária, ou seja partindo de um json,deixando a coleção operável em PHP.
$json = '["Joao","Ana","Carlos","Martin"]';
$nome = json_decode($json);
echo '<pre>';
print_r($nome);


$json = '{ "administrador" : "João Ribeiro",
    "secretaria" : "Carla Santos",
    "diretor_geral" : "Márcio Silva",
    "oficial_contas" : "Fernanda Correia"}';

$dados_empresa = json_decode($json, true);
print_r($dados_empresa);
?>