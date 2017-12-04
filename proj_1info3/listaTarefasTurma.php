<?php

include("cabecalho.php");

?>
	<div class="coluna10">.</div>

	<!-- conteudo principal -->
	<article class="coluna80">
<?php
include("tarefas.php");
// a funçao retorna um array contendo os alunos 

?>


	<section class="lista">
	<ul>
<?php
$lista = listaTarefasTurma('1info1');
foreach ($lista as $tarefa)  {
	$disciplina = buscaDisciplina($tarefa['disciplina']);
	echo ('<li>'.$tarefa['turma'].' - '.$tarefa['titulo'].' - '.$tarefa['data'].' - '.$tarefa['descricao'].' - '.$disciplina['nome'].'</li>');
}
?>
	</ul>
	</section>


	<section class="lista">
	<ul>
<?php
$lista = listaTarefasTurma('1info2');
foreach ($lista as $tarefa)  {
	$disciplina = buscaDisciplina($tarefa['disciplina']);
	echo ('<li>'.$tarefa['turma'].' - '.$tarefa['titulo'].' - '.$tarefa['data'].' - '.$tarefa['descricao'].' - '.$disciplina['nome'].'</li>');
?>
	</ul>
	</section>

	<section class="lista">
	<ul>
<?php
$lista = listaTarefasTurma('1info3');
foreach ($lista as $tarefa)  {
	$disciplina = buscaDisciplina($tarefa['disciplina']);
	echo ('<li>'.$tarefa['turma'].' - '.$tarefa['titulo'].' - '.$tarefa['data'].' - '.$tarefa['descricao'].' - '.$disciplina['nome'].'</li>');
}
?>
	</ul>
	</section>







	</article>
<?php
include("rodape.php");

?>