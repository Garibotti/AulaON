<html>
<body>
<?php

include("PadraoComum.php");
?>
    <div id="conteudo">
    <div id="principal">
	<br>
	<br>
	<br>
	<br>
	<center>
	Digite sua nova senha:
    </center>
	<form method="POST" action="Esqueci_Senha_exec.php" >
	<input style="margin-left:41%" type="text" name="Senha1" size="30"/><br>
	<br>
	<br>
	<center>
	Confirme a sua nova senha:
    </center>
	<input style="margin-left:41%" type="text" name="Senha2" size="30"/><br>
	<br>
	<br>
	<center>
	<input type="submit" value="Atualizar"/>
	<br /> 
	<br>
    </form> 	
	</center>
    </div>
    </div>
<?php
include("RodapeComum.php");
?>
</body>
</html>