<?php 
/* Condicionais: se, então, senão, fim-se */


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

// Condicional encadeada
if($opcao == 1){
	$acao = "\nLegal, o que deseja saber 😶‍🌫️";
}elseif($opcao == 2){
	$acao = "\nPuxa que pena... O que houve? 🤢";
}elseif($opcao == 3){
	$acao = "\nBacana ! pode falar 🤴";
}elseif($opcao == 4){
	$acao = "\nOk, um momento 🧌";
} else {
	$acao = "\nNão entendi...  👹 vou chamar um atendente";
}	

echo "\n---------------------------\n";	
echo $acao;
echo "\n---------------------------\n";