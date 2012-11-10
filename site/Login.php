<!DOCTYPE html>
<html>
<body>
	<?php 
	include("PadraoComum.php");
	?>
	 <!--conteudo-->
    <div id="conteudo">
    <div id="principal">
	Nome de Usuário ou E-mail:
    <br />
	<form method="POST" action="Login_exec.php" >
    <input type="text" name="Login" size="24"/><br />
    <br />
     Senha:
    <br />
    <input type="password" name="Senha" size="24"/><br />
	<input type="submit" value="Entrar"/>
    <br />  
    </form> 
    <?php
	
	if(isset($_GET["teste"]))
	echo $_GET["teste"];
	?>
	    <br />
    <a href="Esqueci_Senha.php">Esqueci minha senha</a><br />
    </div>
    </div>
    <!--/conteudo-->
    <!--rodape-->
    <?php 
	include("RodapeComum.php");
	?>
    <!--/rodape-->
</body>
