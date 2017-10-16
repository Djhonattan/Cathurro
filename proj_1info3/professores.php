<?php
//siape = matricula
//funcoes para acesso e manipulaçao dos dados de professores

function buscaProfessor($codigo){
$professor = array();
//abrir arquivo
$dados = file("dados/professores.csv");
//percorrer com foreach
foreach ($dados as $linha) {
	$colunas = explode(",", $linha);
	if($colunas[0]==$codigo){
		$professor['siape'] = $colunas[0];
		$professor['nome']= $colunas[1];
		$professor['email']= $colunas[2];
		$professor['foto']= $colunas[3];
	}
}





return $professor;
}

$p1 = buscaProfessor(1578494);
print_r($p1['nome']);
//print_r($p1);

function listaProfessores(){
	$professores = array();
	//abrir arquivo
	$dados = file("dados/professores.csv");
	//percorrer com foreach
	foreach ($dados as $posicao=>$linha) {
		if ($posicao!=0){//SE POSICAO DIFERENTE DE ZERO
			$colunas = explode(",", $linha);
			$professor['siape'] = $colunas[0];
			$professor['nome']= $colunas[1];
			$professor['email']= $colunas[2];
			$professor['foto']= $colunas[3];

			$professores[] = $professor;

	    }
	}

	return $professores;
}
//TESTES


//variavel vira um array(bidimencional (array)dentro de outro)
/* 
$lista = listaProfessores();
print_r($lista);

 
$p1 = buscaProfessor(1578494);
print_r($p1);
*/