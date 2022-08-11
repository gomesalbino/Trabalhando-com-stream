<?php

$diretorioAtual = dir('.');//com ponto vc pega o diretório atual
echo $diretorioAtual->path . PHP_EOL;//Para exibir o diretorio atual

while ($arquivo = $diretorioAtual->read()){//Ler enquanto existe arquivo
    echo $arquivo . PHP_EOL; // emprime arquivo
}