<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<link rel="stylesheet" type="text/css" href="css/geral.css">
	<link rel="stylesheet" type="text/css" href="css/profs.css">
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
	if (!isset($_SESSION['login'])) {
		
	?>
	<form method="post" action="sessoes/login.php">

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
   		<a href="sessoes/logout.php">Sair</a>
	   <a href="inserir.php">Inserir</a>
   	<?php	
   }
   ?>


	<div class='divider'></div>
	<!-- menu -->
	
	<ul class="menu">
		<li><a href=""><section class="centro">Home</section></a></li>
		<li><a href="listaDisciplinas.php"><section class="centro">Disciplinas</section></a></li>

				<li class="parent2"><a href="" ><section class="centro">Tarefas</section></a>
				<ul class="submenu2">
					<li><a href="listaTarefasData.php" ><section class="centro">Tarefas Por Data</section></a></li>
					<li><a href="listaTarefasDisciplinas.php"  ><section class="centro">Tarefas Por Disciplina</section></a></li>
				</ul>
		</li>

		<li class="parent"><a href="" ><section class="centro">Docentes e Discentes</section></a>
				<ul class="submenu">
					<li><a href="listaProfessores.php" ><section class="centro">Docentes</section></a></li>
					<li><a href="listaAlunos.php"  ><section class="centro">Discente</section></a></li>
					<li><a href="listaAlunosTurma.php" ><section class="centro">Discente turmas</section></a></li>
				</ul>
		</li>
	</ul>
	<div class='divider'></div>

	<!-- colunas para centralizar -->