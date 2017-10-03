<?php
//inclui o código PHP, executando-o
include("cabeçalho.php");

$dados=file("textoo.csv");

foreach ($dados as $linha) {
		//partes é um array que recebe o resultado da separação do texto pelo separador ";"
		$partes = explode(";", $linha);
		if($cont==0){
			print('<tr>
				     <th>'.$partes[1].'</th>
				     <th>'.$partes[3].'</th>
				   </tr>');
		}else{
			if($cont%2==0){
				$cor = 'cinza';
			}else{
				$cor = 'branco';
			}
			print('<tr class="'.$cor.'">
				     <td><a href="contato.php?cod='.$partes[0].'">'.$partes[1].'</a></td>
				     <td>'.$partes[3].'</td>
				   </tr>');
		}
		$cont++;
}
	print('<tr><td colspan="2">'.($cont-1).' contato(s) listado(s)</td></tr>');
	print('</table>');

//abrir o arquivo agenda.csv
//percorrer
//testar se a linha é a equivalente ao código GET
//exibir todos os dados do contato

include("rodape.php");
?>
<h1><?=$cont ?></h1>