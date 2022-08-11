<?php


// $meusCursos = file_get_contents('Lista_cursos.txt');//pegar os cursos Lista_cursos.txt

// $outrosCursos = file_get_contents('escrever_cursos.txt');//pegar os cursos escrever_cursos.txt



$meusCursos = file('Lista_cursos.txt');//Usa file porque quero pegar os indices em cada posição do array

$outrosCursos = file('escrever-cursos.txt');//Usa file porque quero pegar os indices em cada posição do array

$arquivoCsv = fopen('cursos.csv', 'w');//Abre ou cria se não estiver um arquivo cursos.csv


foreach($meusCursos as $curso){//Faz iteração nos cursos do arquivo
    $linha = [trim($curso), 'Sim'];//Obtendo o array

    fputcsv($arquivoCsv, $linha, ';');//Formata os arquivos para pode abrir em exel separador ';'

    fwrite($arquivoCsv, implode(',', $linha));//escreve o arquivo
}

foreach($outrosCursos as $curso){//Faz iteração nos cursos do arquivo
    $linha = [trim($curso), 'Não'];//Obtendo o array

    fputcsv($arquivoCsv, $linha, ';');//Formata os arquivos para pode abrir em exel separador ';'


    fwrite($arquivoCsv, implode(',', $linha));//escreve o arquivo
}

fclose($arquivoCsv);//fecha o arquivo
