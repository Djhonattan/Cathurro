<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pública</title>
</head>
<body>
	<h2>Bem-vindo! </h2>
		<?php
				//isset = TEM ALGUMA COISA 
			if (isset($_SESSION['login'])){

				echo('<meta http-equiv="refresh" content="0;url=logout.php">');
		
			}else{
			?>	

		<p>ola admin</p>

		<form action="login.php" method="post">
			<label for="login">Login</label>
			<input type="text" name="login">

			<label for="senha">Senha</label>
			<input type="password" name="senha">
			
			<input type="submit" name="entrar">
		</form>

</body>
</html>

<?php
}
