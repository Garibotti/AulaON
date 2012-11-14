<!DOCTYPE html>

<html>

<head>
	<title>Aula ON</title>
    <link rel="shortcut icon" href="Imagens/logoaulaon.png"/>
    <link rel="stylesheet" href="CSS/CSSReset.css" />
    <link rel="stylesheet" href="CSS/PadraoComum.css" />
    <link rel="stylesheet" href="CSS/BotaoPesquisar.css" />
	<script text='javascript' src="Javascript/jquery-1.8.2.js"> </script>
</head>

<body>
        <div class="fundoTopo">
            <div id="topo" class="topoBranco">
                <div id="topoCliente">
                <!--logotipo-->
                    <div id="logo">
                    <a href="index.php"><img border="0" src="Imagens/aulaon.png" alt="Aula On" title="Aula On" width="350" height="90"></a>
                    </div>
                <!--/logotipo-->
                <!--login-->
                    <div id="login">
                    <p>Seja Bem Vindo ao Aula On!<br />
							Fa�a seu <a href="Login.php" title="Login" style="color:#FF6600"><strong>login</strong></a>
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
			<li><a href="index.php"><font color="#FF6600">Home</font></a></li>
			<li><a href=""><font color="#FF6600">Como Funciona</font></a>
			<li><a href="AulasDisponiveis.php"><font color="#FF6600">Aulas Dispon�veis</font></a></li>
			<li><a href="DuvidasFrequentes.php"><font color="#FF6600">Duvidas Frequentes</font></a></li>
			<li><a href="Cadastro.php"><font color="#FF6600">Cadastre-se</font></a></li>
			<li><a href="Contato.php"><font color="#FF6600">Contato</font></a></li>
            <form>
                <input type="text" class="pesquisar" value="Buscar no site" onfocus="if(this.value=='Buscar no site')this.value='';"/>
                <font color="white"><input type="submit" class="solid" value="Pesquisar"/></font>
            </form>
		</ul>
	</div>
    <!--/menu-->
    <!--conteudo-->
    <!--/conteudo-->
    <!--rodap�-->
    <!--/rodap�-->
</body>
</html>
