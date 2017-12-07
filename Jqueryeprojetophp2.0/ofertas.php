<?php
function buscaOfertas($codigo){
$ofertas = array();
//abrir arquivo
$dados = file("dados/ofertas.csv");
//percorrer com foreach
foreach ($dados as $linha) {
	$colunas = explode(",", $linha);
	if($colunas[0]==$codigo){
		$oferta['ano'] = $colunas[0];
		$oferta['turma']= $colunas[1];
		$oferta['cod_disciplina']= $colunas[2];
		$oferta['cod_professor']= $colunas[3];
	}
}


return $oferta;
}


function listaOfertas($ano, $turma){
	$ofertas = array();
	//abrir arquivo
	$dados = file("dados/ofertas.csv");
	//percorrer com foreach
	foreach ($dados as $posicao=>$linha) {
			$colunas = explode(",", $linha);
			if( $colunas[0]==$ano and  $colunas[1]==$turma){
				$oferta['ano'] = $colunas[0];
				$oferta['turma']= $colunas[1];
				$oferta['cod_disciplina']= $colunas[2];
				$oferta['cod_professor']= $colunas[3];

				$ofertas[] = $oferta;
			}
	    
	}

	return $ofertas;
}
function listaOfertasProf($ano, $siape){
	$ofertas = array();
	//abrir arquivo
	$dados = file("dados/ofertas.csv");
	//percorrer com foreach
	foreach ($dados as $posicao=>$linha) {
			$colunas = explode(",", $linha);
			if( $colunas[0]==$ano and  $colunas[3]==$siape){
				$oferta['ano'] = $colunas[0];
				$oferta['turma']= $colunas[1];
				$oferta['cod_disciplina']= $colunas[2];
				$oferta['cod_professor']= $colunas[3];

				$ofertas[] = $oferta;
			}
	    
	}

	return $ofertas;
}




?>