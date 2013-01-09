<?php 
	include("Seguranca.php");
?>
 	<link rel="stylesheet" href="professor/css/Aulas.css" />
 	<link rel="stylesheet" href="../css/jquery-ui.css" />
    <link rel="stylesheet" href="../css/shadowbox.css" />
    
    <script src="../js/datetimepicker.js"></script>
	<script src="../js/shadowbox.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		
		Shadowbox.init
		({
			language: 'pt',
			player: ['img', 'html', 'swf']
		});	
	});

	</script>
    
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
			
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Domingo" id="domingo" class="semana">Domingo</a>
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Segunda-feira" id="segunda" class="semana">Segunda-feira</a>
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Terça-feira" id="terca" class="semana">Terça-feira</a>
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Quarta-feira" id="quarta" class="semana">Quarta-feira</a>
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Quinta-feira" id="quinta" class="semana">Quinta-feira</a>
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Sexta-feira" id="sexta" class="semana">Sexta-feira</a>
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Sábado" id="sabado" class="semana">Sábado</a>
	
		</div>
    </div>   
    <!--/conteudo-->