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
    
    <p>Adicione aqui seus horários para Domingo</p><br>
    <input type="text" name="tab" id="tab" class="datepicker" /> 
    <button id="incluir" onClick="afixar()">Incluir</button>
    <button id="incluir" onClick="">Incluir</button>  
    <ul id="tabela"></ul>

	<script>
		function afixar() { 
		var title = $("#tab").val();
		$("#tabela").append("<li>" + title + "</li>");
		}
	</script>

</body>
</html>

