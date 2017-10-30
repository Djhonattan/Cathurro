<?php

include("cabecalho.php");
include("alunos.php");


//recupera o cod enviado via modo get
//pega o valor de 'cod', que vem pelo GET, armazena em siape
$matricula= $_GET['cod'];


//chama a funçao, passando
//busca o aluno com esse código - retorna array
	$aluno =buscaAluno($siape);	
//exibe o array com dados do prefessor

//print_r($aluno);  /*(teste)*/

?>

<article class="coluna80">
		<section class="foto">
			<img src="<?=$aluno['foto']?>">
		</section>

		<section class="dados">
			<p>Nome: <?=$aluno['nome']?></p>
			<p>Email: <?=$aluno['email']?></p>
			<p>Disciplinas: (em progresso)</p>
			<p>Sala: (em progresso)</p>   <!-- Incluir mais uma coluna com as salas no CSV -->

		</section>
	</article>