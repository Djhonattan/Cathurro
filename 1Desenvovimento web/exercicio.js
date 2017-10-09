function opera(){
	var valor1, valor2, soma, sub, mult, div;

	valor1=parseInt(document.getElementById('primeiro').value);
	valor2=parseInt(document.getElementById('segundo').value);

soma = valor1 + valor2;
sub = valor1 - valor2;
mult = valor1 * valor2;
div = valor1 / valor2;

alert(soma);
alert(sub);
alert(mult);
alert(div);

document.getElementById("resultado").innerHTML = "soma " + valor+ " + " +valor2+ " = " +soma"<br/>"+;
document.getElementById("resul").innerHTML = "sub " + valor+ " + " +valor2+ " = " +sub"<br/>"+;
document.getElementById("res").innerHTML = "mult " + valor+ " + " +valor2+ " = " +mult"<br/>"+;
document.getElementById("r").innerHTML = "div " + valor+ " + " +valor2+ " = " +div"<br/>"+;
alert('oi');

}