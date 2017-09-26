<?php


foreach ($_POST as $contato) {
	$partes=explode(" ",$contato);
	for ($i=0; $i <=5 ; $i++) { 
		
	print($partes[$i]);
	}
}
?>