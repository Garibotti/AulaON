<html>

	<head>
	<title> Aula ON </title>
	<link rel="shortcut icon" href="imagens/logoaulaon.png"/>
    <link rel="stylesheet" href="css/CSSReset.css" />
    <link rel="stylesheet" href="css/PadraoLogado.css" />
    <script language="javascript" type="text/javascript" src="js/jquery-1.8.3.js"></script>
    <script language="javascript" type="text/javascript" src="js/ComponentesForms"></script>     
    </head>

<body>
<div class="fundoTopo">
            <div id="topo" class="topoBranco">
                <div id="topoCliente">
                <!--logotipo-->
                    <div id="logo">
                    <a href="index.php"><img border="0" src="../imagens/aulaon.png" alt="Aula ON" title="Aula ON" width="350" height="90"></a>
                    </div>
                    <div id="logoff">
                    <p>Seja Bem Vindo ao Aula ON!<br />
							Fazer <a href="index.php" title="Logoff" style="color:#FF6600"><strong>logoff</strong></a>
					</p>
                    </div>
                    
		            <!--/logotipo-->
                </div>
            </div>
        </div>



<!--conteudo-->
    <!--menu-->
	<?php 
		$_SESSION["TipoUsuario"] = "Aluno";
		if(isset($_SESSION["TipoUsuario"]))
		{
			$tipoUsuario = $_SESSION["TipoUsuario"];
			include("$tipoUsuario./MenuLogado.php");
		}
		
	?>
    <!--/menu-->
	<!--principal-->
	<?php 
		if(isset($_GET["pagina"])){
			$paginaEnviada = $_GET["pagina"];

			if($paginaEnviada <> "")
			{
				include("$tipoUsuario/$paginaEnviada.php");
			}else
			{
				include("aluno/index.php");
			}
		}else
		{
			include("aluno/index.php");
		}
		

			
	?>
    <!--/principal-->

    <!--/conteudo-->

	<!--rodape-->
    <?php 
		include("Rodape.php");
	?>
    <!--/rodape-->
</body>

</html>