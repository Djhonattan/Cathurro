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


function listaOfertas(){
	$ofertas = array();
	//abrir arquivo
	$dados = file("dados/ofertas.csv");
	//percorrer com foreach
	foreach ($dados as $posicao=>$linha) {
		if ($posicao!=0){ //diferente de zero
			//SE POSICAO DIFERENTE DE ZERO
			$colunas = explode(",", $linha);
			$oferta['ano'] = $colunas[0];
			$oferta['turma']= $colunas[1];
			$oferta['cod_disciplina']= $colunas[2];
			$oferta['cod_professor']= $colunas[3];

			$ofertas[] = $oferta;

	    }
	}

	return $ofertas;
}
$lista = listaOfertas();
print_r($lista);
?>