<?php
function buscaDisciplina($codigo){
$diciplinas = array();
//abrir arquivo
$dados = file("dados/disciplinas.csv");
//percorrer com foreach
foreach ($dados as $linha) {
	$colunas = explode(",", $linha);
	if($colunas[0]==$codigo){
		$disciplina['codigo'] = $colunas[0];
		$disciplina['nome']= $colunas[1];
	}
}


return $disciplina;
}


function listaDisciplinas(){
	$disciplinas = array();
	//abrir arquivo
	$dados = file("dados/disciplinas.csv");
	//percorrer com foreach
	foreach ($dados as $posicao=>$linha) {
		if ($posicao!=0){ //diferente de zero
			//SE POSICAO DIFERENTE DE ZERO
			$colunas = explode(",", $linha);
			$disciplina['codigo'] = $colunas[0];
			$disciplina['nome']= $colunas[1];
			
			$disciplinas[] = $disciplina;

	    }
	}

	return $disciplinas;
}
