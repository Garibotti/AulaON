<!DOCTYPE html>

<html>

<head>
	<title>Aula ON</title>
    <link rel="shortcut icon" href="Imagens/logoaulaonn.ico">
    <link rel="stylesheet" href="CSS/CSSReset.css" />
    <link rel="stylesheet" href="CSS/PadraoComum.css" />
    <link rel="stylesheet" href="CSS/BotaoPesquisar.css" />
	<script  text='javascript' src="Javascript/jquery-1.8.2.js"> </script>
</head>

<body>
        <div class="fundoTopo">
            <div id="topo" >
                <div class="topoCliente">
                <!--logotipo-->
                    <div id="logo">
                    <a href="index.php"><img border="0" src="Imagens/aulaon.png" alt="Aula On" title="Aula ON" width="350" height="90"></a>
                    </div>
                <!--/logotipo-->
                <!--login-->
                    <div id="login">
                    <p>Seja Bem Vindo ao Aula ON!<br />
							Faça seu <a href="Login.php" title="Login" style="color:#FF6600"><strong>login</strong></a>
							ou <a href="Cadastro.php" title="Cadastre-se" style="color:#FF6600"><strong>cadastre-se</strong></a>
					</p>
                    </div>
                <!--/login-->
                </div>
            </div>
        </div>
        <!--menu-->
    <div id="menu">
		<ul>
			<li class="first selected"><a href="index.php"><font color="black">Home</font></a></li>
			<li><a href="ComoFunciona.php"><font color="black">Como Funciona</font></a>
			<li><a href="AulasDisponiveis.php"><font color="black">Aulas Disponíveis</font></a></li>
			<li><a href="DuvidasFrequentes.php"><font color="black">Duvidas Frequentes</font></a></li>
			<li><a href="Cadastro.php"><font color="black">Cadastre-se</font></a></li>
			<li><a href="Contato.php"><font color="black">Contato</font></a></li>
            <div id="search">
			<form action="" method="">
				<input type="text" value="Buscar no site" class="txtfield" onblur="javascript:if(this.value==''){this.value=this.defaultValue;}" onfocus="javascript:if(this.value==this.defaultValue){this.value='';}" />
				<input type="submit" value="" class="button" />
			</form>
		</div>
		</ul>
	</div>
    <!--/menu-->
    <!--conteudo-->
    <!--/conteudo-->
    <!--rodapé-->
    <!--/rodapé-->
</body>
</html>
