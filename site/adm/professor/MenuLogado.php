<?php 
	include("Seguranca.php");
?>
	<form id="menu" action="index.php" type="post">
		<div class="sidebarmenu">
			<a href="index.php" class="menuitem_red" name="">
				<!-- <span class="accordprefix"></span> -->
				Home
			</a>
			<a href="javascript:void(0)" class="menuitem_red" name="Aulas">
				<!-- <span class="accordprefix"></span> -->
				Aulas
			</a>
			<a href="javascript:void(0)" class="menuitem_red" name="GradeHorarios">
				<!-- <span class="accordprefix"></span> -->
				Grade de Hor�rios
			</a>
			<a href="javascript:void(0)" class="menuitem_red" name="ProximaAula">
				<!-- <span class="accordprefix"></span> -->
				Pr�xima Aula
			</a>
			<a href="javascript:void(0)" class="menuitem_red" name="Agenda">
				<!-- <span class="accordprefix"></span> -->
				Agenda
			</a>
			<a href="javascript:void(0)" class="menuitem_red" name="Editar">
				<!-- <span class="accordprefix"></span> -->
				Editar
			</a>
			<a  href="javascript:void(0)" class="menuitem_red" name="Ajuda">
				<!-- <span class="accordprefix"></span> -->
				Ajuda
			</a>			
		</div>
			<script type="text/javascript"> 
				$(document).ready(function(){
					$('.menuitem_red').click(function(){						
						$('#pagina').val($(this).attr("name"));
						$('#menu').submit();
					});
				});
			</script>
			
		<input type="hidden" value="index" name="pagina" id="pagina">
	</form>		