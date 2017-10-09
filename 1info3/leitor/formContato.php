<?php
include('cabeçalho.html');
?>
<form method="post" action="gravarContato.php">
	<label for="nome">Nome</label>
	<input type="text" name="nome">
	<br>

	<label for="telefone">Telefone</label>
	<input type="text" name="telefone">
	<br>

	<label for="email">E-mail</label>
	<input type="email" name="email">
	<br>

	<label for="foto">Foto</label>
	<input type="text" name="foto">
	<br>
	<input type="submit" name="inserir">
	
</form>
<?php
	$rodape =file_get_contents("rodape.php");
	print($rodape);
	?>