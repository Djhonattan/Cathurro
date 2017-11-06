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
	<h2>Pagina do <?=$_SESSION['nome']?></h2>
	<p>Nesta pagina vocẽ ira administrar as configurações do sistema...</p>
</body>
</html>
<?php  
}else{
	echo("Acesso Restrito");
}
?>