<?php 
function listaAlunosTurma($turma){
	$alunos = array();
	$dados = file("dados/alunos.csv");

foreach ($dados as $posicao => $lista) {
		if ($posicao!= 0) {
			$colunas= explode(",", $lista);
			$aluno= array();
			if($colunas[2] == $turma){ //se o aluno atuel é da $turmas
			$aluno['matricula'] = $colunas[0];
			$aluno['nome']= $colunas[1];
			$aluno['turma']= $colunas[2];
			$aluno['email']= $colunas[3];
			$aluno['foto']= $colunas[4];
			$alunos[] = $aluno;
			}
		}
	}
	return $alunos;
}


function listaAlunos(){
	$alunos = array();
	$dados = file("dados/alunos.csv");

foreach ($dados as $posicao => $lista) {
		if ($posicao!= 0) {
			$colunas= explode(",", $lista);
			$aluno= array();
			$aluno['matricula'] = $colunas[0];
			$aluno['nome']= $colunas[1];
			$aluno['turma']= $colunas[2];
			$aluno['email']= $colunas[3];
			$aluno['foto']= $colunas[4];
			$alunos[] = $aluno;
			}
		}
	return $alunos;
}
/*$lista= listaAlunos();
print_r($lista);*/



function buscarAluno($codigo){

$aluno = array();
//abrir arquivo
$dados = file("dados/alunos.csv");
//percorrer com foreach
foreach ($dados as $linha) {
	$colunas = explode(",", $linha);
	if($colunas[0]==$codigo){
		$aluno['matricula'] = $colunas[0];
		$aluno['nome']= $colunas[1];
		$aluno['turma']= $colunas[2];
		$aluno['email']= $colunas[3];
		$aluno['foto']= $colunas[4];
	}
}


return $aluno;
}