<?php

include("cabecalho.php");
include("ofertas.php");
include("disciplinas.php");
include("professores.php");
?>

<article class="coluna80">

	<div cla*/ss="coluna10">.</div>
<?php

?>

	<!-- conteudo principal -->
	<article class="coluna80">
	<section class="lista">
	<ul>


<?php
// a funçao retorna um array contendo as diciplinas
$lista = listaOfertas(2017,'1info1');

foreach ($lista as $oferta)  {
	$disciplina = buscaDisciplina($oferta['cod_disciplina']);
	$professor = buscaProfessor($oferta['cod_professor']);
	echo ('<li>'.$disciplina['nome'].' - '.$professor['nome'].'</li>');
}
?>
		</ul>
		</section>

	<section class="lista">
	<ul>


<?php
// a funçao retorna um array contendo as diciplinas
$lista = listaOfertas(2017,'1info2');

foreach ($lista as $oferta)  {
	$disciplina = buscaDisciplina($oferta['cod_disciplina']);
	$professor = buscaProfessor($oferta['cod_professor']);
	echo ('<li>'.$disciplina['nome'].' - '.$professor['nome'].' </li>');
}
?>
		</ul>
		</section>	

	<section class="lista">
	<ul>


<?php
// a funçao retorna um array contendo as diciplinas
$lista = listaOfertas(2017,'1info3');

foreach ($lista as $oferta)  {
	$disciplina = buscaDisciplina($oferta['cod_disciplina']);
	$professor = buscaProfessor($oferta['cod_professor']);
	echo ('<li>'.$disciplina['nome'].' - '.$professor['nome'].' </li>');
}
?>
		</ul>
		</section>					
	</article>
<?php
include("rodape.php");

?>