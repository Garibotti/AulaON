<?php 
	include("PadraoLogado.php");
	?>
<html>

<body>

	<!--menu-->
	<?php 
	include("AMenuLogado.php");
	?>
	<!--/menu-->
	<!--conteudo-->
    <div class="conteudo">
    <div class="principal">
    	<h2>Compre cr�ditos e veja sua informa��es referentes a compras</h2>    	
    	<div class="NFSelect" style="z-index: 999;">
    		<img src="imagens_adm_aluno/0.png" class="NFSelectLeft">
    			<div class="NFSelectRight">R$ 10</div>
    			<div class="NFSelectTarget" style="display: none; width: 128px;">
    				<ul class="NFSelectOptions" style="width: 95px;">
		    			<?php for($i=10; $i<=500; $i+=10){?>		    				
			    			<li>
			    				<a id="<?php echo $i ?>" class="<?php echo  ($i==10) ? "NFOptionActive":"";?>" href="javascript:;">R$ <?php echo $i ?></a>
			    			</li>
			    		<?php }?>    			
	    			</ul>
    			</div>
    	</div>
     	<img class="none" title="botao_comprar" src="Imagens_Adm_Aluno/botao_comprar.gif" alt="Comprar">
    </div>
    <br />
    <form action="" method="post">
    	<input type="hidden" name="valorDeCompra" id="valorDeCompra" value="10" />
    </form>
    </div>
    <!--/conteudo-->

	<!--rodape-->
    <?php 
	include("Rodape.php");
	?>
    <!--/rodape-->
</body>

</html>