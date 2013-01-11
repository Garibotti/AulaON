<?php 
	include("Seguranca.php");
?>
 	<link rel="stylesheet" href="professor/css/Aulas.css" />
 	<link rel="stylesheet" href="professor/css/jquery-ui-cadastroAulas.css" />
    <link rel="stylesheet" href="../css/shadowbox.css" />
    <link rel="stylesheet" href="professor/css/grades.css" />
    
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
	
	<script>
	$(function() {
	    $( ".dsemana" ).draggable({ revert: "invalid" });
	 
	    $( "#gradesalva" ).droppable({
	      activeClass: "ui-state-hover",
	      hoverClass: "ui-state-active",
	    //  drop: function( event, ui ) {
	    //    $( this )
	    //      .addClass( ".gradesalva" )
	    //      .find( "p" )
	    //        .html( "Grade de horários salva!" );
     // }

	     
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
			
			<div id="dom" class="dsemana">
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Domingo" id="domingo" class="semana">Domingo</a><br>
			<p></p>
			</div>
			
			<div id="seg" class="dsemana">
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Segunda-feira" id="segunda" class="semana">Segunda-feira</a><br>
			<p></p>
			</div>
			
			<div id="ter" class="dsemana">
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Terça-feira" id="terca" class="semana">Terça-feira</a><br>
			</div>
			
			<div id="qua" class="dsemana">
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Quarta-feira" id="quarta" class="semana">Quarta-feira</a><br>
			</div>
			
			<div id="qui" class="dsemana">
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Quinta-feira" id="quinta" class="semana">Quinta-feira</a><br>
			</div>
			
			<div id="sex" class="dsemana">
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Sexta-feira" id="sexta" class="semana">Sexta-feira</a><br>
			</div>
			
			<div id="sab" class="dsemana">
			<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=Sábado" id="sabado" class="semana">Sábado</a><br>
			</div>
			
			<div id="gradesalva" class="gradesalva">
  			<p id="gradesalva">Adicione aqui a grades que deseja salvar</p>
			</div>
			
			<div id="lixeira" class="lixeira">
  			<a  class='lixo' title='Lixeira'><img src='../imagens/lixeira.png'/></a>
			</div>

		</div>
    </div>   
    <!--/conteudo-->