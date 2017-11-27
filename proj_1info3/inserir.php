<?php
	session_start();
?>	
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<link rel="stylesheet" type="text/css" href="css/geral.css">
	<link rel="stylesheet" type="text/css" href="css/profs.css">
	<link rel="stylesheet" type="text/css" href="css/login">
	<title>Todos professores</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<img src="imagens/logo.png" id="logo"/>
		<h1 id="nome_site">Agenda de tarefas</h1>
	</header>
	
	<?php
	if (isset($_SESSION['login'])) {
		
	?>
	<form method="post" action="login.php">

	<label for="login">Login</label>
	<input type="text" name="login">

	<label for="senha">Senha</label>
	<input type="password" name="senha">
			
	<input type="submit" name="entrar">
		
	</form>
	<?php
   }else{
   	?>
   		<p>ola, <?=$_SESSION['nome']?></p>
   		<a href="logout.php">Sair</a>
   	<?php	
   }
   ?>

	<div class='divider'></div>
	<!-- menu -->
	
	<nav class="menu">
		<a href=""><section class="item menu">Próximas tarefas</section></a>
		<a href=""><section class="item menu">Todas Tarefas</section></a>
		<a href=""><section class="item menu">Tarefas por disciplina</section></a>
		<a href=""><section class="item menu">Tarefas por data</section></a>
		<a href="listaProfessores.php"><section class="item menu ativo">Professores</section></a>
		<a href="listaAlunos.php"><section class="item menu">Colegas</section></a>
	</nav>
	<div class='divider'></div>

	<!-- colunas para centralizar -->
	<form method="post" action="uploadFoto.php" enctype="multipart/form-data">


	<label for="siape">Siape</label>
	<input type="text" name="siape">

	<label for="nome">Nome</label>
	<input type="text" name="nome">

	<label for="email">E-mail</label>
	<input type="text" name="email">

	<label for="foto">Foto</label>
	<input type="file" name="foto">
			
	<input type="submit" name="entrar">
		
	</form>