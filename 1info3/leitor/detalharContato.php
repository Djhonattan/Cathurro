<?php
//inclui o código PHP, executando-o
include("cabeçalho.php");

$cod = $_GET["cod"];

//ESSE ARQUIVO EXIBE OS DADOS DO CONTATO CUJO CÓDIGO É IGUAL A $cod

$dados=file("textoo.csv");

foreach ($dados as $posicao => $linha) {
	//quebra o texto da linha em pedaços, e esses pedaços vão para o array $colunas
	$colunas = explode(",", $linha);
	if($cod== $colunas[0]){
		print('<h2>O contado '.$colunas[0].' tem nome '.$colunas[1].'</h2>');
		
	}
}



include("rodape.php");
?>
