<html>
<head>
    <script language="javascript" type="text/javascript" src="../js/jquery-1.8.3.js"></script>
    <script src="../js/jqueryui-1.9.2.js"></script>
    <script src="../../js/datetimepicker.js"></script>
    <link rel="stylesheet" href="../../css/jquery-ui.css" />
    
    <script>
    	$(function() {
        	$( ".datepicker" ).timepicker();
    	});
    </script>
   
</head>

<body>
    
    <p>Adicione aqui sua grade de horários para Domingo</p><br>
    Nome da Grade:<input type="text" name="" id="" class="" /><br><br>
    Início:<input type="text" name="tab" id="tab" class="datepicker" /> 
    Término:<input type="text" name="tab2" id="tab2" class="datepicker" />
    <button id="incluir" onClick="afixar()">Incluir</button>
    <button id="salvar" onClick="">Salvar</button>  
    <ul id="tabela"></ul>

	<script>
		function afixar() { 
			var title = $("#tab").val();
			var title2 = $("#tab2").val();
			if(title < title2 || title != title2){
				
				
				$("#tabela").append("<li class='listahi'>" + title + "</li>" + "<li class='listahf'>" + title2 + "</li>");
				$("#tab").val("");
				$("#tab2").val("");
			}
			else{alert('Horário de início maior que horário de término');}
		}
	</script>

</body>
</html>

