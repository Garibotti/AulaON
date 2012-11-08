<!DOCTYPE html>

<html>

<head>
	<title>Aula ON</title>
    <link rel="shortcut icon" href="/Imagens/logoaulaon.png"/>
    <style type="text/css">
	<!--
	body {
			padding:0px;
			margin:0px;
			list-style:none;
		}
   
		#menu ul {
			list-style-type:none;
			padding:0%;
			margin-left: 0px;
			float:left;
			width: 100%;
			background-color:#282828;
			font:80% Tahoma;
			-webkit-border-radius:0px;
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);

		}

		#menu ul li{display:inline;}

		#menu ul li a {
			background-color:#282828;
			color: #333;
			text-decoration: none;
			border-bottom:3px solid #282828;
			padding: 2px 29px;
			float:left;
			-webkit-border-radius:14px;
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
             display: block;
             margin:01%
             
		}

		#menu ul li a:hover {
			background-color:#383838;
			color: #6D6D6D;
			border-bottom:3px solid #FF6600;
		}
		#menu li  ul{
            top:34.2%;
            left:10%;
            display:none;
           
            padding:0px;
            width: 0px;
            position:fixed;
}  
#menu li:hover ul, .menu li.over ul{display:block;}
#menu li ul li{

display:block;
width:0px;

}
        p.fonte{font-family:@Dotum;font-size:large; margin-left:65px;}
        #main {
    }
 
input[type="text"] {
    float: left;
    width: 100px 5px;
    margin-top: 01%;
    margin-left: 08%;
    border: 1px solid #999999; 
 
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    
 
    -moz-box-shadow: inset 0 5px 0 #ccc, inset 0 6px 0 #989898, inset 0 13px 0 #dfdede;
    -webkit-box-shadow: inset 0 5px 0 #ccc, inset 0 6px 0 #989898, inset 0 13px 0 #dfdede;
    
}
 
input[type="submit"].solid {
    float: left;
    cursor: pointer;
    width: 100px;
    padding: 0px 0px;
    margin-top:01%;
    margin-left: 20px;
    background-color: #FF6600;
    font-weight: bold;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: inset 0 0 3px rgba(180, 5, 5, 0.6), inset 0 1px 2px rgba(180, 5, 5, 0.7), 0 0px 0 #cc0000, 0 0px 0 #593a11, 0 0px 0 #ccc;
    -webkit-box-shadow: inset 0 0 3px rgba(180, 5, 5, 0.6), inset 0 1px 2px rgba(180, 5, 5, 0.7), 0 0px 0 #cc0000, 0 0px 0 #593a11, 0 0px 0 #ccc;
    -webkit-transition: background 0.2s ease-out;
}
 
input[type="submit"].solid:hover, input[type="submit"].solid:focus {
    background: #ffd842;
    -moz-box-shadow: inset 0 0 3px rgba(255, 255, 255, 0.9), inset 0 2px 1px rgba(255, 250, 76, 0.8), 0 0px 0 #d8a031, 0 0px 0 #593a11, 0 0px 0 #ccc;
    -webkit-box-shadow: inset 0 0 3px rgba(255, 255, 255, 0.9), inset 0 2px 1px rgba(255, 250, 76, 0.8), 0 0px 0 #d8a031, 0 0px 0 #593a11, 0 0px 0 #ccc;
}
 
input[type="submit"].solid:active {
    background: #f6a000;
    position: relative;
    top: 1px;
    border: 0px;
    -moz-box-shadow: inset 0 0 3px rgba(255, 255, 255, 0.6), inset 0 1px 2px rgba(255, 255, 255, 0.7), 0 0px 0 #b8882a, 0 0px 0 #593a11, 0 0px 0 #ccc;
    -webkit-box-shadow: inset 0 0 3px rgba(255, 255, 255, 0.6), inset 0 1px 2px rgba(255, 255, 255, 0.7), 0 0px 0 #b8882a, 0 0px 0 #593a11, 0 0px 0 #ccc;
}

#conteudo
{
   background: -moz-linear-gradient(top, rgba(255,167,61,0.82) 0%, rgba(255,183,107,0.27) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,167,61,0.82)), color-stop(100%,rgba(255,183,107,0.27))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(255,167,61,0.82) 0%,rgba(255,183,107,0.27) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(255,167,61,0.82) 0%,rgba(255,183,107,0.27) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(255,167,61,0.82) 0%,rgba(255,183,107,0.27) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(255,167,61,0.82) 0%,rgba(255,183,107,0.27) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d1ffa73d', endColorstr='#45ffb76b',GradientType=0 ); /* IE6-9 */
position:static;
}
#principal
{
    border: 1px solid #DEDEDE;
    border-top: 0;
	padding-top: 20px;
	overflow: hidden;
	background-color:White;
	max-height:1000px;
	max-width:1250px;
	align:center;
	margin-left:4%;
	margin-bottom:1%;
	text-align:justify;
	position:relative;
	
}
 #rodape
{

 background: black;
color:#FF6600;
}

#logo
{
	position:relative;
    left:2%;
	bottom:12%;
}
#login
{
	position:relative;
	left:50%;
	bottom:12%;
}
	</style>
    <link rel="stylesheet" href="CSS/CSSReset.css" />
</head>

<body>
        <div class="fundoTopo">
            <div id="topo" class="topoBranco">
                <div id="topoCliente">
                <!--logotipo-->
                    <div id="logo">
                    <a href="index.php"><img border="0" src="/Imagens/aulaon.png" alt="Aula On" title="Aula On" width="350" height="90"></a>
                    
                    <div id="login">
                    <p>Seja Bem Vindo ao Aula On!<br />
							Faça seu <a href="Login.htm" title="Login" style="color:#FF6600"><strong>login</strong></a>
							ou <a href="Cadastro.htm" title="Cadastre-se" style="color:#FF6600"><strong>cadastre-se</strong></a>
					</p>
                    </div>
                    </div>
		            <!--/logotipo-->
                    <!--login-->
                    
                <!--/login-->
                </div>
            </div>
        </div>
        <!--menu-->
    <div id="menu">
		<ul>
			<li><a href="index.php"><font color="#FF6600">Home</font></a></li>
			<li><a href=""><font color="#FF6600">Como Funciona</font></a>
            <ul>
                <li><a href="CFProfessor.htm"><font color="#FF6600">Professor</font></a></li>
                <li><a href="CFAluno.htm"><font color="#FF6600">Aluno</font></a></li>
            </ul></li>
			<li><a href="AulasDisponiveis.htm"><font color="#FF6600">Aulas Disponíveis</font></a></li>
			<li><a href="DuvidasFrequentes.htm"><font color="#FF6600">Duvidas Frequentes</font></a></li>
			<li><a href="Cadastro.htm"><font color="#FF6600">Cadastre-se</font></a></li>
			<li><a href="Contato.htm"><font color="#FF6600">Contato</font></a></li>
            <form>
                <input type="text" id="pesquisar" value="Buscar no site" onfocus="if(this.value=='Buscar no site')this.value='';"/>
                <font color="white"><input type="submit" class="solid" value="Pesquisar"/></font>
            </form>
		</ul>
	</div>
    <!--/menu-->
    <!--conteudo-->
    <div id="conteudo">
    <br />
    <br />
    <br />
    <br />
    <div id="principal">
    <p class="fonte">Primeiro site onde você pode ter aulas ao vivo com seu professor, de qualquer parte do mundo, qualquer disciplina disponível pelos professores cadastrados!</p>
    <br />
    <center><iframe width="400" height="300" src="http://www.youtube.com/embed/eCqFd0-PeJA" frameborder="0"></iframe></center>
    </div>
    <br />
    </div>
    <!--/conteudo-->
    <!--rodapé-->
    <div id="rodape">
            <table border="0" style="position:relative;left:50%;top:95%;">
            <td>
			<h4>Institucional</h4>
			<ul>
								<li><a href="">Como Funciona</a></li>
								<li><a href="">Política de Privacidade</a></li>
								<li><a href="">Dúvidas Frequentes</a></li>
			</ul>
            </td>
            </table>
            <table border="0" style="position:relative;left:10%;top:10%;">
            <td>
            <h5>Fale conosco:</h5>
				
					<a href="mailto:contato@aulaon.com.br">
						contato@aulaon.com.br					</a>
				
				<h4>Formas de Pagamento</h4>
					<ul>
						<img src="/Imagens/imgBoleto.jpg" alt="Boleto" title="Boleto"/>
					</ul>
            </td>
            </table>
		</div>
    <!--/rodapé-->
</body>
</html>