<?php
//login.php
	//inicia sessão
	session_start();

//capturando os dados enviados por POST
	$login = $_POST['login'];
	$senha = $_POST['senha'];

//admin - admin

		if($login=='admin' and $senha=='admin'){
			//logou como administrador e acertou na senha
			echo("Olá adiministrador");
			$_SESSION['nome'] = "Administrador";
			$_SESSION['login'] = 'admin';
			//redireciona para a pagina inicial
			echo('<meta http-equiv="refresh" content="3;url=../listaProfessores.php">');
		}else{
			echo("dados inválidos");
			//redireciona para a pagina inicial
			echo('<meta http-equiv="refresh" content="3;url=../listaProfessores.php">');
		}