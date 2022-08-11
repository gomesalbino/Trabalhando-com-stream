
<?php

$contexto = stream_context_create([ //Aqui estou criando o protocolo 
    'zip' => [ //O protocolo criado para arquivo zip
        'password' => '1234'

    ]
]);
echo file_get_contents('zip://arquivo.zip#Lista_cursos.txt', false, $contexto); //O false porque o arquivo está na minha maquina, se estivesse em outro lugar ai ia ser true