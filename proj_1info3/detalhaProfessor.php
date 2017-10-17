<?php

include("cabecalho.php");
include("professores.php");


//recupera o cod enviado via modo get
$siape= $_GET['cod'];


//chama a funçao, passando
$professor =buscaProfessor($siape);	
//exibe o array com dados do prefessor
//print_r($professor);
?>
	<div>
		<img src="<?=$professor['foto']?>">
		<h2><?=$professor['nome']?></h2>
			<p><?=$professor['email']?></p>
	</div>


<?php
include("rodape.php");