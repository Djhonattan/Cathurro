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
// a funçao retorna um array contendo as diciplinas
$lista = listaDiciplina();

foreach ($lista as $oferta)  {
	echo ('<li><a href="detalhaDiciplina.php?cod='.$diciplina['codigo'].'">'.$diciplina['nome'].'</a> </li>');
}
?>
		</ul>
		</section>
	</article>
<?php
include("rodape.php");

?>