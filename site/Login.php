<!DOCTYPE html>

<html>
<head>
	<script type="text/javascript" language="javascript">
        function passuser() {
            for (var i = 0; i < document.profalun.ap.length; i++) {
                if (document.profalun.ap[i].checked) {
                    direcionar = document.profalun.ap[i].value;
                }
            }
            if (direcionar == "professor") {
                location = "SProfessor.php";
            }
            else
                location = "SAluno.php";
        }
        function alerta() {
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
    <input type="text" name="Login" size="24"/><br />
    <br />
    <br />
    Senha222:
    <br /> 
    <input type="password" name="Senha" size="24"/><br />
    <br />
    <a onclick="alerta()" href="">Esqueci minha senha</a><br />
    <br />
    <form name="profalun"> 
    <input type="radio" name="ap" value="professor" checked="checked"/> Sou Professor 
    <br />
    <input type="radio" name="ap" value="aluno"/> Sou Aluno
    <br /> 
    <br />  
    </form> 
    <input type="submit" name="Entrar" value="Entrar" onclick="passuser()"/>
    </div>
    </div>
    <!--/conteudo-->
    <!--rodape-->
    <?php 
	include("RodapeComum.php");
	?>
    <!--/rodape-->
</body>