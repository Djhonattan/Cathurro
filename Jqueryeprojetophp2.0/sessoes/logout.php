<?php
	//inicia sessão
	session_start();
	//destroi a sessão
	session_destroy();

	echo('<meta http-equiv="refresh" content="0;url=../listaProfessores.php">');
?>