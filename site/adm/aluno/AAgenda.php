<?php 
	include("../PadraoLogado.php");
	?>
<html>
 <head>
 <link rel="stylesheet" href="css/CalendarioAgenda.css" />
    <script type="text/javascript" src="js/Calendario.js"></script>
    <script type="text/javascript" src="js/Calendario2.js"></script>
 <script type="text/javascript">
        $(function () {
            $("#datepicker").datepicker({

            });
        });
    </script>
</head>
<body>
	<!--menu-->
	<?php 
	include("AMenuLogado.php");
	?>
	<!--/menu-->
	<!--conteudo-->
    <div class="conteudo">
    <div class="principal">
    <div id="datepicker"></div> 
    </div>   
    </div>
    <!--/conteudo-->
	<!--rodape-->
    <?php 
	include(".../Rodape.php");
	?>
    <!--/rodape-->
</body>

</html>