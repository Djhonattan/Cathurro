<html>
<head>
	<title> TESTE PHP</title>
</head>
<body>
<?php
		$hora = date("H");
		if($hora<12){
			$msg= "Bom dia";
		}elseif ($hora<18) {
			$msg="Boa tarde";
		}else{
			$msg="Boa noite";
		}
		print("<h1>".$msg.",sao".$hora."horas</h1>");
?>
<table border="1">
<?php
for ($i=0; $i < 300; $i++) { 
 print("<tr>
 	    <td>linha ".$i."</td>
 	    <td> adasd</td>
 	    <td> adasd</td>
 	    </tr>");
}
?>
</body>
</html>