<?php 
	include("Seguranca.php");
?>
 	<link rel="stylesheet" href="professor/css/Aulas.css" />
 	<link rel="stylesheet" href="professor/css/jquery-ui-cadastroAulas.css" />
 	    
    <script>
    $(function() {
        $( "#tabs" ).tabs();
    });
    </script>
    
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

	<!--conteudo-->
    <div class="conteudo">
    	<div class="principal">
    		<div id="tabs">
    			<ul>
	        		<li><a href="#tabs-1">Educa��o B�sica</a></li>
	        		<li><a href="#tabs-2">Ensino Superior</a></li>
	        		<li><a href="#tabs-3">Outros Cursos</a></li>
    			</ul>
    			<div id="tabs-1">
    				<div class="medio">
					    Ensino M�dio:<br><br>
						<input type="checkbox" name="medio" value="Portugues">Portugu�s<br>
						<input type="checkbox" name="medio" value="Literatura">Literatura<br>
						<input type="checkbox" name="medio" value="Ingles">Ingl�s<br>
						<input type="checkbox" name="medio" value="Espanhol">Espanhol<br>
						<input type="checkbox" name="medio" value="Matematica">Matem�tica<br>
						<input type="checkbox" name="medio" value="Fisica">F�sica<br>
						<input type="checkbox" name="medio" value="Quimica">Qu�mica<br>
						<input type="checkbox" name="medio" value="Biologia">Biologia<br>
						<input type="checkbox" name="medio" value="Historia">Hist�ria<br>
						<input type="checkbox" name="medio" value="Geografia">Geografia
					</div>
	
					<div class="fundamental">
					    Ensino Fundamental:<br><br>
						<input type="checkbox" name="fundamental" value="Portugues">Portugu�s<br>
						<input type="checkbox" name="fundamental" value="Ingles">Ingl�s<br>
						<input type="checkbox" name="fundamental" value="Espanhol">Espanhol<br>
						<input type="checkbox" name="fundamental" value="Matematica">Matem�tica<br>
						<input type="checkbox" name="fundamental" value="Fisica">F�sica<br>
						<input type="checkbox" name="fundamental" value="Quimica">Qu�mica<br>
						<input type="checkbox" name="fundamental" value="Biologia">Biologia<br>
						<input type="checkbox" name="fundamental" value="Historia">Hist�ria<br>
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
		</div>
    </div>   
    <!--/conteudo-->