<!DOCTYPE html>
<?php 
	include("PadraoComum.php");
	?>
<html>
<script type="text/javascript" src="js/jquery.bar.js"></script>
<body>	
	 <!--conteudo-->
    <div class="conteudo">
    <div class="principal">    
    <center>
	E-mail:
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
	    <br />
    <a href="Esqueci_Senha.php">Esqueci minha senha</a><br /></center> 
    </div>
    </div>
    <!--/conteudo-->
    <!--rodape-->
    <?php 
	include("RodapeComum.php");
	?>
    <!--/rodape-->
</body>
