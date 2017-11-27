<?php

include("cabecalho.php");
include("professores.php");


//recupera o cod enviado via modo get
//pega o valor de 'cod', que vem pelo GET, armazena em siape
$siape= $_GET['cod'];


//chama a funçao, passando
//busca o professor com esse código - retorna array
	$professor =buscaProfessor($siape);	
//exibe o array com dados do prefessor

//print_r($professor);  /*(teste)*/

?>

<article class="coluna80">
		<section class="foto">
			<img src="<?=$professor['foto']?>">
		</section>

		<section class="dados">
			<p>Nome: <?=$professor['nome']?></p>
			<p>Email: <?=$professor['email']?></p>
			<p>Disciplinas: (em progresso)</p>
			<p>Sala: (em progresso)</p> 
			  <!-- Incluir mais uma coluna com as salas no CSV -->

		</section>
	</article>

<?php

include("rodape.php");