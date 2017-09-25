<?php
	$cabecalho= file_get_contents("cabeçalho.html");
	print($cabecalho);



echo("<prev>");
$dados=file_get_contents("textoo.csv");
print_r($dados);
echo("</prev>");


	$rodape= file_get_contents("rodape.html");
	print($rodape);
	//funçao file abre um arquivo e retorna seu conteudo para um array
?>