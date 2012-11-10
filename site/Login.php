<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" language="javascript">
        function passuser() 
		{
			location = "http://localhost/Login_exec.php";
		}
		
        function alerta() 
		{
            alert("Burro!")
        }
    </script>
</head>
<body>
	<?php 
	include("PadraoComum.php");
	?>
	 <!--conteudo-->
    <div id="conteudo">
    <div id="principal">
	Nome de Usuário ou E-mail:
    <br />
	<form method="POST" action="login.php" >
    <input type="text" name="Login" size="24"/><br />
    <br />
     Senha:
    <br />
    <input type="password" name="Senha" size="24"/><br />
	<input type="submit" value="Entrar"/>
    <br />
    <br /> 
    <br />  
    </form> 
    <?php
	echo $_GET["teste"];
	?>
	    <br />
    <a onclick="alerta()" href="">Esqueci minha senha</a><br />
    </div>
    </div>
    <!--/conteudo-->
    <!--rodape-->
    <?php 
	include("RodapeComum.php");
	?>
    <!--/rodape-->
</body>
