<?php

// $teclado = fopen('php://stdin','r');
// $novoCurso  = fgets($teclado);
// file_put_contents('escrever-cursos.txt', "\n$novoCurso", FILE_APPEND);


// $teclado = fopen('php://stdin','r');
// $novoCurso  = trim($teclado);
// file_put_contents('escrever-cursos.txt', "\n$novoCurso", FILE_APPEND);


$novoCurso  = trim(fgets(STDIN));
file_put_contents('escrever-cursos.txt', "\n$novoCurso", FILE_APPEND);
