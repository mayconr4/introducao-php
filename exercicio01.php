<?php
//entrada
$curso = readline("Qual é o seu curso:");
$cargaHoraria = readline("Qual é a carga horária do seu curso: ");


//processamento
$faltasPermitidas = $cargaHoraria / 4;
//"as faltas permitidas são".$faltasPermitidas

//saida concatenada
//echo "no curso de ".$curso." as faltas permitidas serão de  ".$faltasPermitidas." horas";

//saida por partes
echo "curso: ".$curso."\n";
echo "Carga horária: ".$cargaHoraria."h"."\n";
echo "limite de faltas: ".$faltasPermitidas."h";

//\n é usado para ciar quebra de linhas, ou novas linhas dentro de uma saida de texto.