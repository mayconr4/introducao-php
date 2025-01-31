<?php 

// Exercicio 2

/* Protótipo de chatbot */

echo "\n**** Chatbot de empresa Biribinha Tecnologia ***\n";
echo "Opções disponiveis:\n\n";
echo "1 -> informações\n";
echo "2 -> reclamações\n";
echo "3 -> elogios\n";
echo "4 -> status\n";

echo "\n"; 

$opcao = readline("Digite uma opção");

// Teste de entrada
//echo "\n".$opcao; 

switch ($opcao){
 case 1:
	echo "\nLegal, o que deseja saber 😶‍🌫️";
	break;
 case 2:
	echo "\nPuxa que pena... O que houve? 🤢";
	break;
 case 3:
	echo "\nBacana ! pode falar 🤴";
	break;
 case 4:
	echo "\nOk, um momento 🧌";
	break;
 default:
	echo "\nNão entendi...  👹 vou chamar um atendente";
	
}

// Condicional encadeada


echo "\n---------------------------\n";	
echo $opcao;
echo "\n---------------------------\n";