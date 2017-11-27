<?php

//array criado automaticamente contendo as variaveis enviadas por metodo POST
print_r($_POST);
print_r($_FILES);

//mover o arquivo recebido para o destino esperado
$origem= $_FILES['foto']['tmp_nome'];

$destino = "imagens/professores/".$_FILES['foto']['foto'];

move_uploaded_file($origem, $destino);


$siape = $_POST['siape'];
$nome = $_POST['nome'];
$email = $_POST['email'];
//aproveito o caminho e nome criados para mover
$foto = $destino


$texto= $siape.",".$nome.",".$email.",".$foto;

print($texto);


//abrir o arquivo professores.csv  em modo de escrita

$arquivo = fopen("dados/professores.csv", "a+");
//Escrevendo no arquivo//a+ abre e posiciona o ponteiro no final do arquivo 
fwrite($arquivo,"\n".$texto);
//fechar o arquivo
fclose($arquivo);



?>

<h2>Contato inserido</h2>

<meta http-equiv="refresh" content="2;URL=cabecalho.php">