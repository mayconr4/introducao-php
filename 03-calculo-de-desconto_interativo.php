<?php
// Entradas interativas usando readline() [apenas CLI]
$produto = readline("informe o produto: ");
$precoInicial = readline("preço inicial: ");
$desconto = readline("Desconto em reais: ");

// Processamento
$precoFinal = $precoInicial - $desconto;

// Saída concatenada [O preço final é: valor]
echo "O preço final é: ".$precoFinal;