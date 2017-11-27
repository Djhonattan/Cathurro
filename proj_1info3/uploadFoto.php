<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


//print_r($_FILES);

$origem = $_FILES['foto']['tmp_name'];

/*$partes=explode('.',$_POST['foto']['name'] );

$partes=explode('',$_POST['nome'] );
*/

$partesNome = explode(' ', $_POST['nome']);
$sobreNome = end($partesNome);
$primeiroNome = $partesNome[0];

$nomeArquivo = date('dmYHis').$primeiroNome.".".$sobreNome;
$extensao = explode('/', $_FILES['foto']['type']);

$destino = 'imagens/professores/'.$nomeArquivo.'.'.$extensao[1];

move_uploaded_file($origem, $destino);


//$nome= $partes[0],".",$partes(sizeof($partes-1);


///////////////////////////////// Gravar daddos no CSV ///////////////////////////////////////

$siape = $_POST['siape'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$foto = $destino;


$linha ="\n".$siape.",".$nome.",".$email.",".$foto;



$arquivo = fopen("dados/professores.csv", "a+");
 
fwrite($arquivo,"\n".$linha);

fclose($arquivo);



?>

<h2>Contato inserido</h2>
<meta http-equiv="refresh" content="2;URL=listaProfessores.php">