<?php
	$cabecalho= file_get_contents("cabeçalho.html");
	print($cabecalho);

print(date("l ,F d,Y , H:i:s"));

//função file é um array e retorna seu conteudo para um ARRAY
$dados=file("textoo.csv");
//percorrer o array e exebir cada um dos elementos
print('<table border=>"1">');
$cont=0;
foreach ($dados as $posicao=>$linha) {
	//partes é um array que recebe o resultado da separção do texto pelo separador ";"
	$partes=explode(",",$linha);
	if($cont==0){
		print('
			<a href="formContato.php">Inserir contato</a>
		<tr>
			<th>'.$partes[0].'</th>
			<th>'.$partes[1].'</th>
			<th>'.$partes[2].'</th>
			<th>'.$partes[3].'</th>
		</tr>');
	}else{
		print('
		<tr>
			<td>'.$partes[0].'</td>
			<td><a href="detalharContato.php?cod='.$partes[0].'">'.$partes[1].'</a></td>
			<td>'.$partes[2].'</td>
			<td>'.$partes[3].'</td>
		</tr>');

	}
print_r($posicao);
//SEPARAR EM PEDAÇOS AS LINHAS COM EXPLODE 
//PARTES E UM ARRAY QUE RECEBE UM RESULTADO DA SEPARAÇAO DO TEXTO PELO SEPARADOR (;)
	$cont++;
}
print("</table>");

	$rodape= file_get_contents("rodape.html");
	print($rodape);
	//funçao file abre um arquivo e retorna seu conteudo para um array
?>