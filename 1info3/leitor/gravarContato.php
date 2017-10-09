<?php

//array criado automaticamente contendo as variaveis enviadas por metodo POST
print_r($_POST);

//abrir o arquivo e pegar o ultimo codigo existente
$dados = file("textoo.csv");
foreach($dados as $linha) {
	$colunas = explode(",", $linha);
	$cod_atual = $colunas[0];
}

$codigo = $cod_atual+1;
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$foto = $_POST['foto'];

$texto= $codigo.";".$nome.";".$telefone.";".$email.";".$foto;

print($texto);


//abrir o arquivo textoo.csv  em modo de escrita

$arquivo = fopen("textoo.csv", "a+");
//Eescrevendo no arquivo//a+ abre e posiciona o ponteiro no final do arquivo 
fwrite($arquivo,"\n".$texto);
//fechar o arquivo
fclose($arquivo);

print("acho que escreveu");

?>