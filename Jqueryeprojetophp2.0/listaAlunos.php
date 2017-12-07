<?php

include("cabecalho.php");
	
?>

<div class="coluna10">.</div>

	<!-- conteudo principal -->
	<article class="coluna80">
	<section class="lista">
	<ul>
	
<?php
include("alunos.php");

$lista = listaAlunos();
foreach ($lista as $aluno) {
	echo ('<li><a href="detalhaProfessor.php?cod='.$aluno['matricula'].'">'.$aluno['nome'].'</a> - '.$aluno['email'].'</li>');
}
$turma = '1info' .$i;
?>


<section class="lista"> </section>
}
</ul>
		</section>
	</article>
<?php
include("rodape.php");
?>