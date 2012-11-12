<html>

<body>
<?php 
	include("PadraoLogado.php");
	?>
	<!--menu-->
	<?php 
	include("AMenuLogado.php");
	?>
	<!--/menu-->
	<!--conteudo-->
    <div class="conteudo">
    <div id="principal">
    	<h2>Compre créditos e veja sua informações referentes a compras</h2>    	
    	<div class="NFSelect" style="z-index: 999;">
    		<img src="imagens_adm_aluno/0.png" class="NFSelectLeft">
    			<div class="NFSelectRight">R$ 5
    			</div>
    			<div class="NFSelectTarget" style="display: none; width: 128px;">
    				<ul class="NFSelectOptions" style="width: 95px;">
		    			<?php for($i=10; $i<=500; $i++){?>
			    			<li>
			    				<a href="javascript:;">R$ <?php echo $i ?></a>
			    			</li>
			    		<?php }?>	    			
	    			</ul>
    			</div>
    	</div>
     	<img class="none" title="botao_comprar" src="Imagens_Adm_Aluno/botao_comprar.gif" alt="Comprar">
    </div>
    <br />
    
    </div>
    <!--/conteudo-->

	<!--rodape-->
    <?php 
	include("Rodape.php");
	?>
    <!--/rodape-->
</body>

</html>