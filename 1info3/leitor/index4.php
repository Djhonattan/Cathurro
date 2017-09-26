<?php
 include('cabeçalho.php');
 ?>
<form method="post"  action="gravarContato.php" >
<label for="nome" >nome</label>
<input type="text" name="nome"/>

<label for="endereco" >Endereco</label>
<input type="text" name="endereco"/>

<label for="email" >Email</label>
<input type="text" name="email"/>

<label for="telefone" >Telefone</label>
<input type="text" name="telefone"/>

<input type="submit" name="gravar"	value="Gravar">

 </form>


<?php
 include('rodape.php');
?>