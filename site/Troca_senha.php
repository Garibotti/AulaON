<html>
<head>
</head>
<?php
include("PadraoComum.php");
?>
<body>
    <div id="conteudo">
    <div id="principal">
	<br>
	<br>
	<br>
	<br>
	<center>
	Digite sua nova senha:
    </center>
	<form  method="POST" action="Index.php" type="submit" name="form_senha" id="form_senha">
	<input style="margin-left:42%" type="password" name="senha1" size="30" id="senha1"/>
	<br>
	<br>
	<center>
	Confirme a sua nova senha:
    </center>
	<input style="margin-left:42%" type="password" name="senha2" size="30" id="senha2"/><br>
	<br>
	<center>
	<input type="button" value="Atualizar" onclick="validarSenha();"/>
	<br>
	<br>
	<div id="texto">
	</div>

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

<script>

function validarSenha(){	
	jQuery(document).ready(function($) {
		if( (jQuery("#senha1").val() != jQuery("#senha2").val()) ||(jQuery("#senha1").val() == '' || jQuery("#senha2").val() == '') )
		{
			document.getElementById("texto").innerHTML = 'SENHAS DIFERENTES OU VAZIAS';

			return false;
		}
			
		$("#form_senha").submit();
	});

}
</script>