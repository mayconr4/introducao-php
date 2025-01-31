<?php
// LOOP WHILE (ENQUANTO) 
	
// Exemplo 1: contagem de 1 até 10

$i = 1; // variavel de controle da iteração/repetição

//while ($i <= 10) {
//	echo $i."\n"; 
	//$i = $i + 1;
//	$i++ ; //operador de incremento ++
//}

//echo "\n\n";

//Exemplo 2: obter/exibir nome e idade de  pessoas

while ($i <=3) {
	
	//entradas
	$nome =  readline("\nqual o seu nome: "); 
	$idade = readline("\nqual a sua idade: ");
	
	//saidas
	echo "\n";
	echo "oi ".$nome." e você tem ".$idade." anos";
	
	$i++;
}