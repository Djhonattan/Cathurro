<?php

include("cabecalho.php");

?>
	<div class="coluna10">.</div>

	<!-- conteudo principal -->
	<article class="coluna80">
	<section class="lista">
	<ul>


<?php
include("ofertas.php");
// a funçao retorna um array contendo as ofertas
$lista = listaOfertas();

foreach ($lista as $oferta)  {
	echo ('<li><a href="detalhaOferta.php?cod='.$oferta['ano'].'">'.$oferta['turma'].'</a> - '.$oferta['cod_disciplina'].''.$oferta['cod_professor'].'</li>');
}
?>
		</ul>
		</section>
	</article>
<?php
include("rodape.php");

?>