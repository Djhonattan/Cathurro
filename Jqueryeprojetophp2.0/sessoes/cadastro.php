<?php
session_start();

if( isset($_SESSION['login']) and $_SESSION['login'] == 'admin'){



//funçao isset serve para verificar se existe alguma coisa na variavel


?>

<hml>
<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
</head>
<body>
<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore minus deserunt eligendi atque magnam ducimus obcaecati suscipit debitis animi ipsam. Velit, laudantium, reiciendis! Dolorem explicabo sint dolorum dignissimos, cum incidunt.</h2>
</body>
</html>


<?php
}else{
	echo("Acesso Negado");
}






