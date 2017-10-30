<?php
function buscaDiciplinas($codigo){
$diciplinas = array();
//abrir arquivo
$dados = file("dados/diciplinas.csv");
//percorrer com foreach
foreach ($dados as $linha) {
	$colunas = explode(",", $linha);
	if($colunas[0]==$codigo){
		$diciplina['codigo'] = $colunas[0];
		$diciplina['nome']= $colunas[1];
	}
}


return $diciplina;
}


function listaDiciplinas(){
	$diciplinas = array();
	//abrir arquivo
	$dados = file("dados/diciplinas.csv");
	//percorrer com foreach
	foreach ($dados as $posicao=>$linha) {
		if ($posicao!=0){ //diferente de zero
			//SE POSICAO DIFERENTE DE ZERO
			$colunas = explode(",", $linha);
			$diciplina['codigo'] = $colunas[0];
			$diciplina['nome']= $colunas[1];
			
			$diciplinas[] = $diciplina;

	    }
	}

	return $diciplinas;
}
$lista = listaDiciplinas();
print_r($lista);
?>