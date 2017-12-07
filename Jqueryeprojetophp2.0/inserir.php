<?php  
include('cabecalho.php');

?>
	<!-- colunas para centralizar -->

	<article class="coluna80">

	<form method="post" action="uploadFoto.php" enctype="multipart/form-data">


	<label for="siape">Siape</label>
	<input class="afasta" type="text" name="siape">
<br>
	<label for="nome">Nome</label>
	<input class="afasta" type="text" name="nome">
<br>
	<label for="email">E-mail</label>
	<input class="afasta" type="text" name="email">
<br>
	<section>
		<img class="tamanho" src="imagens/addfoto.png">
	</section>	

	<label class="lado lado2" for="foto"><h1>Foto:</h1></label>
	<input class="lado2" type="file" name="foto">
<br>
		
	<input class="" type="submit" name="entrar">
		
	</form>
	
	</article>

<?php

include("rodape.php");