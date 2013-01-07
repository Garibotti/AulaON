<html>
	<head>
	<link rel="stylesheet" href="CSS/jquery-ui.css" />
	<script src="Javascript/jquery-1.8.3.js"></script>
    <script src="Javascript/jqueryui-1.9.2.js"></script>
    <script src="Javascript/datetimepicker.js"></script>
    <script>
    	$(function() {
        	$( ".datepicker" ).timepicker();
    	});
    </script>
    <script>
    function afixar(form2) { 
    	var horario = document.form2.input.value; 
    	document.form2.output.value = horario 
    }
    </script>
	</head>
<body>
	<FORM NAME="form2">
		<p>Adicione aqui seus horários para Domingo</p><br>
			<input type="text" name="input" id="datepicker" class="datepicker" />
			<button id="incluir3" onClick="afixar(form2)">Incluir</button>
			<button id="salvar">Salvar</button>
			<input type="text" name="output"/>
	</FORM>
</body>
</html>