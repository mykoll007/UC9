<?php
/*
Este é um exemplo muito simples do que pode ser uma API com vários endpoints,
mas sem qualquer mecanismo de autenticação e sem controlo de erros.
Vamos apenas seguir os seguintes princípios:
1. Qualquer cliente pode aceder aos endpoins através da URL;
2. Cada endpoint deve responder no formato JSON;
 
http://localhost/04/api/get_status
http://localhost/04/api/get_all_animals
http://localhost/04/api/get_animals
http://localhost/04/api/get_animals/?max=5
 
 
o protocolo HTTP usado nos pedidos e respostas das APIs e REST permite usar um conjunto de métodos que definem de que forma os pedidos são enviados aos endpoints
 
os dois métodos mais comuns são GET e o POST
 
chamadas ao endpoint com o método GET
http://localhost/05/api/metodo_get
http://localhost/05/api/metodo_get/?valor1=10&valor2=20
 
com o método GET, os parametros são enviados na query string
*/