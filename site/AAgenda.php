<html>
 <head>
 <link rel="stylesheet" href="CSS/CalendarioAgenda.css" />
    <script src="Javascript/Calendario.js"></script>
    <script src="Javascript/Calendario2.js"></script>
 <script type="text/javascript">
        $(function () {
            $("#datepicker").datepicker({

            });
        });
    </script>
</head>
<body>
<?php 
	include("PadraoLogado.php");
	?>
	<!--menu-->
	<?php 
	include("AMenuLogado.php");
	?>
	<!--/menu-->
	<!--conteudo-->
    <div id="conteudo">
    <div id="principal">
    <div id="datepicker"></div> 
    </div>   
    </div>
    <!--/conteudo-->
	<!--rodape-->
    <?php 
	include("Rodape.php");
	?>
    <!--/rodape-->
</body>

</html>