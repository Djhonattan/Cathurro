<?php

include("cabecalho.php");

?>
	<div class="coluna10">.</div>

	<!-- conteudo principal -->
	<article class="coluna80">
	<section class="lista">
	<ul>


<?php
include("professores.php");
// a funçao retorna um array contendo os professores 
$lista = listaProfessores();

foreach ($lista as $professor)  {
	echo ('<li><a href="detalhaProfessor.php?cod='.$professor['siape'].'">'.$professor['nome'].'</a> - '.$professor['email'].'</li>');
}
?>
		</ul>
		</section>
	</article>
<?php
include("rodape.php");

?>











<!--
<form>
		<input type="text" name=""  id="primeiro">
		<input type="text" name="" id="segundo">
		<input type="button" id="soma" value="soma"/>
	</form>
	<div id="resultado"></div>
</body>
</html>
-->