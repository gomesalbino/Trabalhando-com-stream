<?php

// echo file_get_contents('http://httpbin.org/get');


// $contexto = stream_context_create([
//     'http' => [
//         'method' => 'DELETE',//estou definindo que quero o metodo apagar
//         'header' => 'X-From: PHP'//O Cabeçalho que estou enviando

//     ]
//     ]);
// echo file_get_contents('http://httpbin.org/delete', false, $contexto);// impreme arquivo enviado com methodo delete



// $contexto = stream_context_create([
//     'http' => [
//         'method' => 'POST',//estou enviando que quero o metodo POST
//         'header' => 'X-From: PHP',//O Cabeçalho que estou enviando
//         'content' => 'Teste do corpo da requisicao!'//Agora estou mandando o conteudo

//     ]
//     ]);
// echo file_get_contents('http://httpbin.org/post', false, $contexto);// impreme arquivo enviado com methodo delete



$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',//estou enviando que quero o metodo POST
        'header' => "X-From: PHP\r\nContent-Type: text/plain",//Agora estou mandando mais um Cabeçalho com valor text/plain
        'content' => 'Teste do corpo da requisicao!'//Agora estou mandando o conteudo

    ]
    ]);
echo file_get_contents('http://httpbin.org/post', false, $contexto);// impreme arquivo enviado com methodo delete



