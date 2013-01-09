<?php 
	include("Seguranca.php");
?>
<html>
<head>
    <script language="javascript" type="text/javascript" src="../js/jquery-1.8.3.js"></script>
    <script src="../js/jqueryui-1.9.2.js"></script>
    <script src="../../js/datetimepicker.js"></script>
    <link rel="stylesheet" href="../../css/timepicker.css" />
    <link rel="stylesheet" href="css/CadastroHorario.css" />
    
    <script>
    	$(function() {
        	$( ".datepicker" ).timepicker();
    	});
    </script>
   
</head>

<body>
    
    <label id="titulo"><strong>Adicione aqui sua grade de horários para </strong></label><br><br>
    
    <label class="dados"><strong>Nome da grade:</strong></label>
    <input type="text" name="" id="nomegrade" maxlength="15"/><br><br>
    
    <label class="dados"><strong>Início:</strong></label>
    <input type="text" name="tab" id="tab" class="datepicker" />
    
    <label class="dados"><strong>Término:</strong></label> 
    <input type="text" name="tab2" id="tab2" class="datepicker" />
    
    
    <input id="incluir" class="botao" type="submit" onClick="afixar()" value="Incluir"/>
    <input id="salvar" class="botao" type="submit" onClick="" value="Salvar"/>
    
    <ul id="tabela"></ul>

	<script>
		function afixar() { 
			var title = $("#tab").val();
			var title2 = $("#tab2").val();

			if(title == title2 || title > title2){alert('Horário inválido.');}
			else{
				$("#tabela").append("<li class='listahi'>" + title + "</li>" + "<li class='listahf'>" + title2 + "</li>");
				$("#tab").val("");
				$("#tab2").val("");
				}
		}
	</script>

</body>
</html>

