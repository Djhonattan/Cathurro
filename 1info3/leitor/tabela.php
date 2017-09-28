<iframe width="480" height="275" src="https://www.youtube.com/embed/ViKWM8JImgY" frameborder="0" allowfullscreen></iframe>

<?php

include("../cabeçalho.php");


//abre um arquivo e traz o conteudo em forma de um texto
//$cab = file_get_contents("../cabeçalho.php");
//print($cab);
//$nomes= array("Rafael","Djhonattan","Ricardo","Marcelo","Marcelo","Marcelo","Marcelo","Marcelo","Marcelo","Marcelo","Marcelo");

//abre o arquivo e traz o conteudo para um array
$nomes = file('textoo.csv');




print("<table border='1'>");

for ($i=0; $i < 6; $i++) { 
	$colunas = explode(";", $nomes[$i]);
	if($i==0){
		print("<tr class=\"".$cor."\">");
		print("<th>".$colunas[0]."</th>");
		print("<th>".$colunas[1]."</th>");
		print("<th>".$colunas[2]."</th>");
		print("<th>".$colunas[3]."</th>");
		print("</th></tr>");
	}else{


	// % operador de resto da divisao inteira
		if($i % 2 == 0){  //é par
			$cor = 'cinza';
		}else{ //senao é impar
			$cor = 'branco';
		}
		print("<tr class=\"".$cor."\">");
		print("<td>".$colunas[0]."</td>");
		print("<td>".$colunas[1]."</td>");
		print("<td>".$colunas[2]."</td>");
		print("<td>".$colunas[3]."</td>");
		print("</th></tr>");
	}
}

print("</table>");

?>

<script type="text/javascript">
	
</script>
