<?php 
	include("Seguranca.php");
?>
 	<link rel="stylesheet" href="../css/jquery-ui.css" />
    <link rel="stylesheet" href="../css/shadowbox.css" />
     <link rel="stylesheet" href="aluno/css/Comprar.css" />
     
    <script src="../js/datetimepicker.js"></script>
	<script src="../js/shadowbox.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		
		//Shadowbox.init
		//({
			//language: 'pt',
			//player: ['img', 'html', 'swf']

		//});
		
		$('.NFSelectOptions a').click(function(){	
			
			var valorCompra = $('#valorDeCompra').val();
			$('.comprar').attr("href",'aluno/ComprarSeguro.php?valor='+valorCompra);	
			//Shadowbox.clearCache(); 
			//Shadowbox.setup(); 						
		});
		
	});	

	</script>
	
	<script language="javascript">
		var win = null;
		function NovaJanela(pagina,nome,w,h,scroll){
			LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
			TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
			settings = 'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'

			win = window.open(pagina,nome,settings);
		}
	</script>
	
	<!--conteudo-->
    <div class="conteudo">
    <div class="principal">
    	<h2>Compre créditos e veja sua informações referentes a compras</h2>    	
    	<div class="NFSelect" style="z-index: 999;">
    		<img src="imagens/0.png" class="NFSelectLeft">
    			<div class="NFSelectRight">R$ 10</div>
    			<div class="NFSelectTarget" style="display: none; width: 128px;">
    				<ul class="NFSelectOptions" style="width: 95px;">
		    			<?php for($i=10; $i<=200; $i+=10){?>		    				
			    			<li>
			    				<a id="<?php echo $i ?>" class="<?php echo  ($i==10) ? "NFOptionActive":"";?>" href="javascript:;">R$ <?php echo $i ?></a>
			    			</li>
			    		<?php }?>    			
	    			</ul>
    			</div>
    	</div>
<!--      	<a rel="shadowbox;height=600;width=800" href="aluno/ComprarSeguro.php?valor=10" id="comprar" class="comprar"> -->
		<a href="aluno/ComprarSeguro.php?valor=10" id="comprar" class="comprar" onclick="NovaJanela(this.href,'Pagamento','800','600','yes');return false">   		
     		<img class="btn_comprar"  src="aluno/imagens/botao_comprar.fw.png" alt="Comprar">
     	</a>
    </div>
    <br />
    <form action="" method="post">
    	<input type="hidden" name="valorDeCompra" id="valorDeCompra" value="10" />
    </form>
    </div>
    <!--/conteudo-->
