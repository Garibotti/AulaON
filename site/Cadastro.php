<!DOCTYPE html>
<?php 
	include("PadraoComum.php");
?>
<html>
<head>
    <link rel="stylesheet" href="CSS/Cadastro.css" />
	<link rel="stylesheet" href="CSS/style.css" />
    <script type="text/javascript" src="Javascript/cidades-estados-v0.2.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="JavaScript/jquery.validate.js"></script>

	<script type="text/javascript">
        function formatar(mascara, documento) {
            var i = documento.value.length;
            var saida = mascara.substring(0, 1);
            var texto = mascara.substring(i)

            if (texto.substring(0, 1) != saida) {
                documento.value += texto.substring(0, 1);
            }
        }

    </script>
    <script type="text/javascript">
    window.onload = function() {
        new dgCidadesEstados(
            document.getElementById('estado'),
            document.getElementById('cidade'),
            true
        );
    }
</script>

<script>
    $(function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
    </script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script> 
	
<style type="text/css">
label.error { position: absolute;}
</style>
  
<script>
  $(document).ready(function(){
    $("#cadastro").validate();
  });
</script>

</head>
<body>
	 <!--conteudo-->
    <div class="conteudo">
	<div class="principal">
	<div class="contact_form">
	<div class="form_subtitle">Crie seu novo cadastro</div>
	<form method="POST" id="cadastro" action="" >
    
	<div class="form_row">
    <label class="contact"><strong>Nome:</strong></label>
    <input type="text" name="nome" id="nome" class="contact_input required"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Sobrenome:</strong></label>
    <input class="contact_input" type="text" name="sobrenome" id="sobrenome" size="24" onkeyup="validarSNome();"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Data de nascimento:</strong></label>
    <input class="contact_input" type="text" name="dn" id="dn" maxlength="10" onkeypress="formatar('##-##-####', this)" onkeyup="validarDN();"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Sexo:</strong></label>
    <select name='sexo'>
    <option class="contact_input"  name="sexo" id="sexo" value="Masculino" style="margin-left:30%;"/>Masculino</option>
   	<option class="contact_input"  name="sexo" value="Feminino" style="margin-left:30%;"/>Feminino</option>
    </select>
    </div>
    
    <div class="form_row">  
    <label class="contact"><strong>CPF:</strong></label>
    <input class="contact_input" type="text" name="cpf" maxlength="11" onkeypress="formatar('###########', this)"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>RG:</strong></label>
    <input class="contact_input" type="text" name="rg" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>País:</strong></label>
    <select name='pais'>
    <option class="contact_input"  name="pais" value="Brasil" style="margin-left:30%;"/>Brasil</option>
    </select>
    </div>
    
    <div class="form_row">
    <fieldset>
	<label class="contact"><strong>UF:</strong></label>
	<select id="estado" name="estado"></select>
	</fieldset>
    </div>
    
    <div class="form_row">
    <fieldset>
    <label class="contact"><strong>Cidade:</strong></label>
	<select id="cidade" name="cidade"></select>
	</fieldset>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>CEP:</strong></label>
	<input class="contact_input" type="text" name="cep" maxlength="9" onkeypress="formatar('#####-###', this)"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Endereço:</strong></label>
	<input class="contact_input" type="text" name="endereco" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Complemento:</strong></label>
	<input  class="contact_input"type="text" name="complend" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Bairro:</strong></label>
	<input class="contact_input" type="text" name="bairro" size="24"/>
    </div>
    

    
    <div class="form_row">
    <label class="contact"><strong>Fone (DDD):</strong></label>
	<input class="contact_input" type="text" name="telefone" maxlength="11" onkeypress="formatar('##-########', this)"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Cel (DDD):</strong></label>
	<input class="contact_input" type="text" name="celular" maxlength="12" onkeypress="formatar('##-#########', this)"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Banco:</strong></label>
	<input class="contact_input" type="text" name="banco" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Agência:</strong></label>
	<input class="contact_input" type="text" name="agenciaBanco" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Conta Corrente:</strong></label>
	<input class="contact_input" type="text" name="contacorrente" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Nome de usuário:</strong></label>
   	<input class="contact_input" type="text" name="usuario" size="24"/>
   	</div>
    
    <div class="form_row">
    <label class="contact"><strong>Senha:</strong></label>
    <input class="contact_input" type="password" name="senha" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Confirmar senha:</strong></label>
 	<input class="contact_input" type="password" name="confirmarsenha" size="24"/>
    </div>
	
	<div class="form_row">
    <div class="terms">
    <input type="checkbox" name="terms" />
              Eu concordo com os <a href="TermosCondicoes.php">Termos &amp; Condições</a>                        
    </div>
    </div> 
	
	<div class="form_row">
	<input class="register" type="submit" value="Enviar"/>
	</div>
	
	</form> 
	</div>
	</div>
	</div>
    <!--/conteudo-->
    <!--rodape-->
    <?php 
	include("RodapeComum.php");
	?>
    <!--/rodape-->
</body>
</html>
