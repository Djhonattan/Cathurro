<?php

include("cabecalho.php");
include("professores.php");
include("ofertas.php");
include("disciplinas.php");


//recupera o cod enviado via modo get
//pega o valor de 'cod', que vem pelo GET, armazena em siape
$siape= $_GET['cod'];


//chama a funçao, passando
//busca o professor com esse código - retorna array
	$professor =buscaProfessor($siape);	

//exibe o array com dados do prefessor

//print_r($professor);  /*(teste)*/

?>
	<div class="coluna10">.</div>
	<article class="coluna80">
		<section class="foto click">
			<img class="" src="<?=$professor['foto']?>">
		</section>
		<section class="foto2 modal escondido">
			<img class="" src="<?=$professor['foto']?>">
		</section>


		<section class="dados">
			<p>Nome: <?=$professor['nome']?></p>
			<p>Email: <?=$professor['email']?></p>
			<p>Disciplinas: </p> 
<?php
		$ofertas = listaOfertasProf(2017, $siape);
		foreach ($ofertas as $oferta) {
			$disciplina= buscaDisciplina($oferta['cod_disciplina']);
			print('<li>'.$oferta['turma'].' - '.$disciplina['nome'].'</li>');
			# code...
		}

?>
		</section>
	</article>

<?php

include("rodape.php");