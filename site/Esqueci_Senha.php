<html>
<body>
<?php

include("PadraoComum.php");
?>
    <div class="conteudo">
    <div class="principal">
	<br>
	<br>
	<br>
	<br>
	<center>
	Digite seu email:
    </center>
	<br>
	<form method="POST" action="Esqueci_Senha_exec.php" >
	<input style="margin-left:39%" type="text" name="Email" size="40"/><br>
	<br>
	<br>
	<center>
	<input type="submit" value="Enviar"/>
	<br /> 
	<br>
    </form> 
	
    <?php
	
	if(isset($_GET["teste"]))
	echo "<span  style=\"color:#FF0000;\"> ".$_GET["teste"]." </span> \n";
	?>
	
	</center>
    </div>
    </div>
<?php
include("RodapeComum.php");
?>
</body>
</html>
