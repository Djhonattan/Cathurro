<?php

include("disciplinas.php");


function listaTarefasTurma($turma){
	$tarefas = array();
	$dados = file("dados/tarefas.csv");

foreach ($dados as $posicao => $lista) {
		if ($posicao!= 0) {
			$colunas= explode(",", $lista);
			$tarefa= array();
			if($colunas[2] == $turma){ //se o tarefa atuel é da $turmas
			$tarefa['turma'] = $colunas[0];
			$tarefa['data']= $colunas[1];
			$tarefa['disciplina']= $colunas[2];
			$tarefa['titulo']= $colunas[3];
			$tarefa['descricao']= $colunas[4];
			$tarefas[] = $tarefa;
			}
		}
	}
	return $tarefas;
}


function listaTarefas(){
	$tarefas = array();
	$dados = file("dados/tarefas.csv");

foreach ($dados as $posicao => $lista) {
		if ($posicao!= 0) {
			$colunas= explode(",", $lista);
			$tarefa= array();
			$tarefa['turma'] = $colunas[0];
			$tarefa['data']= $colunas[1];
			$tarefa['disciplina']= $colunas[2];
			$tarefa['titulo']= $colunas[3];
			$tarefa['descricao']= $colunas[4];
			$tarefas[] = $tarefa;
			}
		}
		return $tarefas;
	}
   

/*$lista= listaTarefas();
print_r($lista);*/



function buscarTarefa($codigo){

$tarefa = array();
//abrir arquivo
$dados = file("dados/tarefas.csv");
//percorrer com foreach
foreach ($dados as $linha) {
	$colunas = explode(",", $linha);
	if($colunas[0]==$codigo){
		$tarefa['turma'] = $colunas[0];
		$tarefa['data']= $colunas[1];
		$tarefa['disciplina']= $colunas[2];
		$tarefa['titulo']= $colunas[3];
		$tarefa['descricao']= $colunas[4];
	}
}


return $tarefa;
}

