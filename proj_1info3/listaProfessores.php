<?php

include("cabecalho.php");

include("professores.php");

$lista = listaProfessores();

foreach ($lista as $professor) {
	echo ('<div class="professor">');
	echo('<img src="'.$professor['foto'].'">');
	echo('<a href="detalhaProfessor.php?cpd='.$professor['siape'].'">'.$professor['nome'].'</a>');
	echo ('</div>');
}

/*chame o cabecalho e o php*/
include("rodape.php");


