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
    <div id="conteudo" class="conteudo">
    <div id="principal">
    	<select>
    		<?php for($i=5; $i<=500; $i++){?>
    			<option value="<?php echo $i?>"> R$ <?php echo $i?> </option>
    		<?php }?>
    	</select>
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