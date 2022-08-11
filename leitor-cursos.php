<?php

// $arquivo = fopen('lista_cursos.txt',  'r');

// while(!feof($arquivo)){
// $curso = fgets($arquivo);
// echo $curso;
// }

// fclose($arquivo);


// $arquivo = fopen('lista_cursos.txt',  'r');

// $tamanhoDeArquivo = filesize('lista_cursos.txt');

// $cursos = fread($arquivo, $tamanhoDeArquivo);

// echo $cursos;

// fclose($arquivo);
//----------------

// $cursos = file('lista_cursos.txt');
// var_dump($cursos);
//---------------------

$cursos = file_get_contents('lista_cursos.txt');
echo $cursos;






