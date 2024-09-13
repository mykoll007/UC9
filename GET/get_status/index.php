<?php

//Set o conteúdo da API
header("Content-Type:application/json;charset=utf-8");

$response['status'] = 'API Animais está em execução'; //Animals API is running!
$response['time_response'] = time();

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>