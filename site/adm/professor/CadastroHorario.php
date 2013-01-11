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
    
    <label id="titulo"><strong>Adicione aqui sua grade de horários para <?php echo (isset($_GET["dia"])) ? $_GET["dia"]:""?></strong></label><br><br>
    
    <label class="dados"><strong>Nome da grade:</strong></label>
    <input type="text" class="nomegrade" maxlength="9" value=""/><br><br>
    
    <label class="dados"><strong>Início:</strong></label>
    <input type="text" name="tab" id="tab" class="datepicker" maxlength="5" />
    
    <label class="dados"><strong>Término:</strong></label> 
    <input type="text" name="tab2" id="tab2" class="datepicker" maxlength="5" />
    
    <input id="incluir" class="botao" type="submit" onClick="afixar()" value="Incluir"/>
    <input id="salvar" class="botao" type="submit" onClick="salvar()" value="Salvar"/>
    <input id="limpar" class="botao" type="submit" onClick="limpar()" value="Limpar"/>
    
    
    <table class="tabela">
    	<tr>
			<th>Início</th>
			<th>Término</th>
		</tr>
	</table>

	<script>
		i = 0;
		function afixar() { 
			
			if(i <= 9){
			i++;

			var title = $("#tab").val();
			var title2 = $("#tab2").val();

			if(title == title2 || title > title2){alert('Horário inválido.');}
			else{
				$(".tabela").append("<tr class='linhas "+i+"'>"+"<td class='listahi'>" + title + "</td>" + "<td class='listahf'>" + title2 + "<a  style='float:right' class='removerCampo' rel='"+i+"' href='#'>" + "<img src='../../imagens/error.png' border='0' />" + "</a>" + "</td>" + "</tr>");

				$("#tab").val("");
				$("#tab2").val("");
				}
		}
	}
		$('#incluir').click(function(){
			$(".removerCampo").unbind("click");
			$(".removerCampo").bind("click", function () {
				var titleRemover = $(this).attr('rel');

				$(".tabela tr."+titleRemover).remove();
			});
		});
		
		$(".removerCampo").click(function(){
			alert('ds');
		});
		

	</script>

	<script>
		function limpar() { 
			$("#tab").val("");
			$("#tab2").val("");
			$(".nomegrade").val("");
		}
	</script>
	
	<script>
		function salvar() { 
			var nomegrade = $(".nomegrade").val();

			$(document).ready( function (){ 

			    $("#salvar").click(function(){
			    
			    var parentElement = $('.nomegrade').val();
			    
			    alert(parentElement);
			    
			    });
			    
			 });

		//	window.parent.Shadowbox.close();
			
		}
	</script>
</body>
</html>

