<?php 
	include("PadraoLogado.php");
?>
<html>
 <head>
 <link rel="stylesheet" href="CSS/PAulas.css" />
 <link rel="stylesheet" href="CSS/datetimepicker.css" />
 <link rel="stylesheet" href="CSS/jquery-ui.css" />
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <link href="CSS/shadowbox.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="Javascript/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init
		({
			language: 'pt',
			player: ['img', 'html', 'swf']
		});
	</script>
    <style>
    	h1 { padding: .1em; margin: 0; }
    	#products { float:left; width: 100px; margin-right: 2em; }
    	#cart { width: 100px; float: left; margin-top: 1em; }
    	/* style the list to maximize the droppable hitarea */
    	#cart ol { margin: 0; padding: 1em 0 1em 3em; }
    </style>
    <script src="Javascript/jquery-1.8.3.js"></script>
    <script src="Javascript/jqueryui-1.9.2.js"></script>
    <script src="Javascript/datetimepicker.js"></script>
    <script src="Javascript/lightbox.js"></script>
	<link href="CSS/lightbox.css" rel="stylesheet" />
    <script>
    $(function() {
        $( "#datepicker" ).timepicker();
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
	<p>Agende os dias e horários disponíveis:</p><br>
	<select name='semana'>
    <option  name="semana" value="domingo" style="margin-left:30%;"/>Domingo</option>
   	<option  name="semana" value="segunda" style="margin-left:30%;"/>Segunda-feira</option>
   	<option  name="semana" value="terça" style="margin-left:30%;"/>Terça-feira</option>
   	<option  name="semana" value="quarta" style="margin-left:30%;"/>Quarta-feira</option>
   	<option  name="semana" value="quinta" style="margin-left:30%;"/>Quinta-feira</option>
   	<option  name="semana" value="sexta" style="margin-left:30%;"/>Sexta-feira</option>
   	<option  name="semana" value="sabado" style="margin-left:30%;"/>Sábado</option>
    </select>
	</div>
<a rel="shadowbox" href="#upinside">Domingo</a>
<a rel="shadowbox" href="#upinside1">Segunda-feira</a>
<a rel="shadowbox" href="#upinside2">Terça-feira</a>
<a rel="shadowbox" href="#upinside3">Quarta-feira</a>
<a rel="shadowbox" href="#upinside4">Quinta-feira</a>
<a rel="shadowbox" href="#upinside5">Sexta-feira</a>
<a rel="shadowbox" href="#upinside6">Sábado</a>
	<div id="upinside" style="display:none;">
		<div id="up_content" style="padding:10px;background-color:white;">
			<div id="products">
    <h1 class="ui-widget-header">Informe seu horário</h1>
    <div id="catalog">
        <h2>Informe seu horário</h2>
        <div>
            <ul>
            	<li><input type="text" id="datepicker" value=""/></li>
                <li>a</li>
                <li>b</li>
                <li>c</li>
            </ul>
        </div>
    </div>
</div>
<div id="abrir-lightbox">
<div id="cart">
    <h1 class="ui-widget-header">Agenda</h1>
    <div class="ui-widget-content">
        <ol>
            <li class="placeholder">Adicione seus horários aqui</li>
        </ol>
        </div>
    </div>
</div> 
		</div>
	</div>
	<div id="upinside1" style="display:none;">
		<div id="up_content" style="padding:10px;">
			<input type="text" id="datepicker" />
		</div>
	</div>
	<div id="upinside2" style="display:none;">
		<div id="up_content" style="padding:10px;">
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
		</div>
	</div>
	<div id="upinside3" style="display:none;">
		<div id="up_content" style="padding:10px;">
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
		</div>
	</div>
	<div id="upinside4" style="display:none;">
		<div id="up_content" style="padding:10px;">
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
		</div>
	</div>
	<div id="upinside5" style="display:none;">
		<div id="up_content" style="padding:10px;">
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
		</div>
	</div>
	<div id="upinside6" style="display:none;">
		<div id="up_content" style="padding:10px;">
			Conteúdo da div acolá!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
			Conteúdo da div aqui!<br><br>
		</div>
	</div>
	</div>
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