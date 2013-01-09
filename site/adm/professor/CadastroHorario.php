<?php 
	include("Seguranca.php");
?>
<html>
<head>
    <script language="javascript" type="text/javascript" src="../js/jquery-1.8.3.js"></script>
    <script src="../js/jqueryui-1.9.2.js"></script>
    <script src="../../js/datetimepicker.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
    <link rel="stylesheet" href="../../css/timepicker.css" />
    <link rel="stylesheet" href="css/CadastroHorario.css" />
    
    <script>
    	$(function() {
        	$( ".datepicker" ).timepicker();
    	});
    </script>
    
    <script type="text/javascript">
		$(document).ready(function(){
        $("input.datepicker").mask("99:99");
	});
</script>
   
</head>

<body>
    
    <label id="titulo"><strong>Adicione aqui sua grade de hor�rios para <?php echo (isset($_GET["dia"])) ? $_GET["dia"]:""?></strong></label><br><br>
    
    <label class="dados"><strong>Nome da grade:</strong></label>
    <input type="text"class="nomegrade" maxlength="9"/><br><br>
    
    <label class="dados"><strong>In�cio:</strong></label>
    <input type="text" name="tab" id="tab" class="datepicker" maxlength="5" />
    
    <label class="dados"><strong>T�rmino:</strong></label> 
    <input type="text" name="tab2" id="tab2" class="datepicker" maxlength="5" />
    
    <input id="incluir" class="botao" type="submit" onClick="afixar()" value="Incluir"/>
    <input id="salvar" class="botao" type="submit" onClick="" value="Salvar"/>
    <input id="limpar" class="botao" type="submit" onClick="limpar()" value="Limpar"/>
    
    <table id="tabela">
    	<tr>
			<th>In�cio</th>
			<th>T�rmino</th>
		</tr>
	</table>

	<script>
		i = 0;
		function afixar() { 
			
			if(i <= 9){
			i++;

			var title = $("#tab").val();
			var title2 = $("#tab2").val();

			if(title == title2 || title > title2){alert('Hor�rio inv�lido.');}
			else{
				$("#tabela").append("<tr>"+"<td class='listahi'>" + title + "</td>" + "<td class='listahf'>" + title2 + "</td>"+"</tr>");
				$("#tab").val("");
				$("#tab2").val("");
				}
		}
	}	
	</script>

	<script>
		function limpar() { 
			$("#tab").val("");
			$("#tab2").val("");
			$(".nomegrade").val("");
		}
	</script>
</body>
</html>

