<?php
require_once 'MeuFiltro.php';

// $arquivoCursos = fopen('Lista_cursos.txt', 'r');

// stream_filter_register('alura.partes', MeuFiltro::class);

// stream_filter_append($arquivoCursos, 'string.toupper');

// echo fread($arquivoCursos, filesize('Lista_cursos.txt'));


$arquivoCursos = fopen('Lista_cursos.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);

stream_filter_append($arquivoCursos, 'alura.partes');

echo fread($arquivoCursos, filesize('Lista_cursos.txt'));

