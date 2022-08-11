
<?php

$arquivoCursos = new splFileObject('Lista_cursos.txt', 'r');

while (!$arquivoCursos->eof()){

    $linha = $arquivoCursos->fgetcsv(';');

    echo $linha[0] . PHP_EOL;

}

$date = new DateTime();

$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y');
