<?php 
	include("../PadraoLogado.php");
?>
<html>
 <head>
 <link rel="stylesheet" href="css/PAulas.css" />
 <link rel="stylesheet" href="CSS/datetimepicker.css" />
 <link rel="stylesheet" href="../css/jquery-ui.css" />
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <link href="CSS/shadowbox.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../js/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init
		({
			language: 'pt',
			player: ['img', 'html', 'swf']
		});
		window.onload = function() {

		    // open a welcome message as soon as the window loads
		    Shadowbox.open({
		        content:    'domingo.php',
		        height:     100,
		        width:      150
		    });

		};
	</script>
    <style>
    	h1 { padding: .1em; margin: 0; }
    	#products { float:left; width: 100px; margin-right: 2em; }
    	#cart { width: 100px; float: left; margin-top: 1em; }
    	/* style the list to maximize the droppable hitarea */
    	#cart ol { margin: 0; padding: 1em 0 1em 3em; }
    </style>
    <script src="../js/jquery-1.8.3.js"></script>
    <script src="../js/jqueryui-1.9.2.js"></script>
    <script src="../js/datetimepicker.js"></script>
    <script>
   
    	$(function() {
        	$( "div #datepicker" ).timepicker();
    	});

    </script>
    <script>
    $(function() {
        $( "#catalog" ).accordion();
        $( "#catalog li" ).draggable({
            appendTo: "body",
            helper: "clone"
        });
        $( "#cart ol" ).droppable({
            activeClass: "ui-state-default",
            hoverClass: "ui-state-hover",
            accept: ":not(.ui-sortable-helper)",
            drop: function( event, ui ) {
                $( this ).find( ".placeholder" ).remove();
                $( "<li></li>" ).text( ui.draggable.text() ).appendTo( this );
            }
        }).sortable({
            items: "li:not(.placeholder)",
            sort: function() {
                // gets added unintentionally by droppable interacting with sortable
                // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
                $( this ).removeClass( "ui-state-default" );
            }
        });
    });
    </script>
    <script>
    $(function() {
        $( "#tabs" ).tabs();
    });
    </script>
    <script src="jquery.js"></script>
	<script>
	$(document).ready(function(){
		i=0;
		  $("#btn").click(function(){
			  if(i<9){
		    $("#tabs-2 ").append("<input>");i++;}
		  });
		});
	</script>
	<script>
	$(document).ready(function(){
		j=0;
		  $("#btn1").click(function(){
			  if(j<9){
		    $("#tabs-3 ").append("<input>");j++;}
		  });
		});
	</script>
	<script>
	$(document).ready(function(){
		l=0;
		  $("#btn2").click(function(){
			  if(l<9){
		    $("#up_content").append("<input>");l++;}
		  });
		});
	</script>
	
</head>
<body>

	<!--menu-->
	<?php 
	include("PMenuLogado.php");
	?>
	<!--/menu-->
	<!--conteudo-->
    <div class="conteudo">
    <div class="principal">
    <div id="tabs">
    <ul>
        <li><a href="#tabs-1">Educação Básica</a></li>
        <li><a href="#tabs-2">Ensino Superior</a></li>
        <li><a href="#tabs-3">Outros Cursos</a></li>
    </ul>
    <div id="tabs-1">
    <div class="medio">
    Ensino Médio:<br><br>
	<input type="checkbox" name="medio" value="Portugues">Português<br>
	<input type="checkbox" name="medio" value="Literatura">Literatura<br>
	<input type="checkbox" name="medio" value="Ingles">Inglês<br>
	<input type="checkbox" name="medio" value="Espanhol">Espanhol<br>
	<input type="checkbox" name="medio" value="Matematica">Matemática<br>
	<input type="checkbox" name="medio" value="Fisica">Física<br>
	<input type="checkbox" name="medio" value="Quimica">Química<br>
	<input type="checkbox" name="medio" value="Biologia">Biologia<br>
	<input type="checkbox" name="medio" value="Historia">História<br>
	<input type="checkbox" name="medio" value="Geografia">Geografia
	</div>
	<div class="fundamental">
    Ensino Fundamental:<br><br>
	<input type="checkbox" name="fundamental" value="Portugues">Português<br>
	<input type="checkbox" name="fundamental" value="Ingles">Inglês<br>
	<input type="checkbox" name="fundamental" value="Espanhol">Espanhol<br>
	<input type="checkbox" name="fundamental" value="Matematica">Matemática<br>
	<input type="checkbox" name="fundamental" value="Fisica">Física<br>
	<input type="checkbox" name="fundamental" value="Quimica">Química<br>
	<input type="checkbox" name="fundamental" value="Biologia">Biologia<br>
	<input type="checkbox" name="fundamental" value="Historia">História<br>
	<input type="checkbox" name="fundamental" value="Geografia">Geografia
	<button id="incluir">Confirmar</button>
	</div>
	</div>
    <div id="tabs-2">
    <label for="Cadeira">Digite a disciplina: </label><input id="Cadeira" type="text">
	<button id="btn">Nova disciplina</button>
	<button id="incluir1">Confirmar</button>
    </div>
    <div id="tabs-3">
    <label for="Aula">Digite a aula: </label><input id="Aula" type="text">
	<button id="btn1">Nova aula</button>
	<button id="incluir2">Confirmar</button>
    </div>
	</div>
	<div id="datasemana">
	<br>
	<p>Agende os dias e horários disponíveis para a próxima semana:</p><br>
	</div>
	<a rel="shadowbox" href="domingo.php" id="domingo" class="semana">Domingo</a>
	<a rel="shadowbox" href="#upinside1" class="semana">Segunda-feira</a>
	<a rel="shadowbox" href="#upinside2" class="semana">Terça-feira</a>
	<a rel="shadowbox" href="#upinside3" class="semana">Quarta-feira</a>
	<a rel="shadowbox" href="#upinside4" class="semana">Quinta-feira</a>
	<a rel="shadowbox" href="#upinside5" class="semana">Sexta-feira</a>
	<a rel="shadowbox" href="#upinside6" class="semana">Sábado</a>
	<script>
	$("#domingo").click(function(){
	$("#domingo").css('background-color', "#339966");
	});
</script>
	<div id="upinside" style="display:none;">
		<div id="up_content" style="padding:10px;">
		<p>Adicione aqui seus horários para Domingo</p><br>
			<input type="text" id="datepicker" />
			<button id="btn2">Incluir mais horários</button>
			<button id="incluir3">Confirmar</button>
		</div>
	</div>
	</div>
	<div id="upinside1" style="display:none;">
		<div id="up_content" style="padding:10px;">
			<p>Adicione aqui seus horários para Segunda-feira</p><br>
			<input type="text" id="datepicker" />
		</div>
	</div>
	<div id="upinside2" style="display:none;">
		<div id="up_content" style="padding:10px;">
			<p>Adicione aqui seus horários para Terça-feira</p><br>
			<input type="text" id="datepicker" />
		</div>
	</div>
	<div id="upinside3" style="display:none;">
		<div id="up_content" style="padding:10px;">
			<p>Adicione aqui seus horários para Quarta-feira</p><br>
			<input type="text" id="datepicker" />
		</div>
	</div>
	<div id="upinside4" style="display:none;">
		<div id="up_content" style="padding:10px;">
			<p>Adicione aqui seus horários para Quinta-feira</p><br>
			<input type="text" id="datepicker" />
		</div>
	</div>
	<div id="upinside5" style="display:none;">
		<div id="up_content" style="padding:10px;">
			<p>Adicione aqui seus horários para Sexta-feira</p><br>
			<input type="text" id="datepicker" />
		</div>
	</div>
	<div id="upinside6" style="display:none;">
		<div id="up_content" style="padding:10px;">
			<p>Adicione aqui seus horários para Sábado</p><br>
			<input type="text" id="datepicker" />
		</div>
	</div>
	</div>
    </div>   
    </div>
    <!--/conteudo-->
	<!--rodape-->
    <?php 
	include("../Rodape.php");
	?>
    <!--/rodape-->
</body>

</html>