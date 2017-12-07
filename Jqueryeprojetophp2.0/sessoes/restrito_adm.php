<?php
session_start();

if($_SESSION['login']=='admin'){//se passou pelo login
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Pagina de acesso Restrito></h2>
	<a href="logout.php">Sair</a>

	<a href="publica.php">Voltar</a>

	<a href="cadastro.php">Cadastro</a>
	<!-- Devera abrir a pagina Cadastro que devera se restrita ao ADM -->
	<p>Nesta pagina vocẽ ira administrar as configurações do sistema...</p>
</body>
</html>
<?php  
}else{
	echo("Acesso Negado");
	echo('<meta http-equiv="refresh" content="3;url=publica.php">');
}
?>