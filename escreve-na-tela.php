<?php

// echo "Olá Mundo";

// print "Olá Mundo!";


// $tela = fopen('php://stdout', 'w');//escreve a saida

// fwrite($tela, 'Olá Mundo!');//Impreme na tela



// $tela = fopen('php://stderr', 'w'); //Para escrever na saida de erro

// fwrite($tela, 'Olá Mundo!');//Impreme na tela


// fwrite(STDOUT, 'Olá Mundo!'); //escreve na tela saida normal


// fwrite(STDERR, 'Olá Mundo!'); //escreve na tela saida normal


$cursos = fopen('zip://arquivo.zip#Lista_cursos.txt', 'r');//Pegar arquivo na pasta zip e manda para algum lugar, nesse caso mandamos para tela

stream_copy_to_stream($cursos, STDOUT); //Mandamos para tela, mas vc pode mandar para qualquer lugar

