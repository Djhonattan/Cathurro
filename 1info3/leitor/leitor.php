<?php

//varialvel recebera o conteudo de um arquivo e será uma STRING 
//file_get_contents nao e tao util porque precisa trabalhar muito a String mas e bom para o reaproveitamento do codigo

$contato=file_get_contents("textoo.csv");

echo($contato);



?>
