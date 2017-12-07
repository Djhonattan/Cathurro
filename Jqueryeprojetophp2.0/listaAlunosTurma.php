<?php

include("cabecalho.php");

?>
	<div class="coluna10">.</div>

	<!-- conteudo principal -->
	<article class="coluna80">
<?php
include("alunos.php");
// a funçao retorna um array contendo os alunos 

?>


	<section class="lista">
	<ul>
<?php
$lista = listaAlunosTurma('1info1');
foreach ($lista as $aluno)  {
	echo ('<li><a href="detalhaAlunos.php?cod='.$aluno['matricula'].'">'.$aluno['nome'].'</a> - '.$aluno['email'].'</li>');
}
?>
	</ul>
	</section>


	<section class="lista">
	<ul>
<?php
$lista = listaAlunosTurma('1info2');
foreach ($lista as $aluno)  {
	echo ('<li><a href="detalhaAlunos.php?cod='.$aluno['matricula'].'">'.$aluno['nome'].'</a> - '.$aluno['email'].'</li>');
}
?>
	</ul>
	</section>

	<section class="lista">
	<ul>
<?php
$lista = listaAlunosTurma('1info3');
foreach ($lista as $aluno)  {
	echo ('<li><a href="detalhaAlunos.php?cod='.$aluno['matricula'].'">'.$aluno['nome'].'</a> - '.$aluno['email'].'</li>');
}
?>
	</ul>
	</section>







	</article>
<?php
include("rodape.php");

?>

