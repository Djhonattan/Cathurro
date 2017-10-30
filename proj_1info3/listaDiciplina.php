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
// a funçao retorna um array contendo os ofertas
$lista = listaDiciplina();

foreach ($lista as $oferta)  {
	echo ('<li><a href="detalhaOferta.php?cod='.$oferta['codigo'].'">'.$oferta['nome'].'</a> </li>');
}
?>
		</ul>
		</section>
	</article>
<?php
include("rodape.php");

?>