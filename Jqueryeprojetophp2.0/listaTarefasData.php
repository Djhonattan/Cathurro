<?php

include("cabecalho.php");

?>
	<div class="coluna10">.</div>

	<!-- conteudo principal -->
	<article class="coluna80">
	<section class="lista2">
	<ul>


<?php
include("tarefas.php");
// a funçao retorna um array contendo os tarefaes 
$lista = listaTarefas();

foreach ($lista as $tarefa)  {
	$disciplina = buscaDisciplina($tarefa['disciplina']);
	echo ('<li>'.$tarefa['data'].' - '.$tarefa['turma'].' - '.$tarefa['titulo'].' - '.$tarefa['descricao'].' - '.$disciplina['nome'].'</li>');
}
?>
		</ul>
		</section>
	</article>
<?php
include("rodape.php");

?>

