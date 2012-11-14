<!DOCTYPE html>

<html>
<head>
	<script src="Javascript/VerificaCPF.js" type="text/javascript"></script>
    <link rel="stylesheet" href="CSS/Calendario.css" />
    <script src="Javascript/Calendario.js"></script>
    <script src="Javascript/Calendario2.js"></script>
    <link rel="stylesheet" href="CSS/Cadastro.css" />
    <script type="text/javascript" src="Javascript/cidades-estados-v0.2.js"></script>
    <script type="text/javascript" >
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
        $(function () {
            $("#datepicker").datepicker({
                changeMonth: true,
                changeYear: true,

            });
        });
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
</head>
<body>
	<?php 
	include("PadraoComum.php");
	?>
	 <!--conteudo-->
    <div id="conteudo">
	<div id="principal">
	<div class="contact_form">
	<div class="form_subtitle">Crie seu novo cadastro</div>
	<form method="POST" action="Cadastro_exec.php" >
	
	<div class="form_row">
    <label class="contact"><strong>Nome:</strong></label>
    <input type="text" class="contact_input" name="nome" id="nome" onkeyup="validarNome();"/>
	</div>
	<div  class="contact_input" id="testa_nome" >
	</div>
	
    
    <div class="form_row">
    <label class="contact"><strong>Sobrenome:</strong></label>
    <input class="contact_input" type="text" name="sobrenome" id="sobrenome" size="24" onkeyup="validarSNome();"/>
    </div>
	<div  class="contact_input" id="testa_snome" >
	</div>
    
    <div class="form_row">
    <label class="contact"><strong>Data de nascimento:</strong></label>
    <input class="contact_input" type="text" name="dn" id="dn" maxlength="10" onkeypress="formatar('##-##-####', this)" onkeyup="validarDN();"/>
    </div>
	
    
    <div class="form_row">
    <label class="contact"><strong>Sexo:</strong></label>
    <select name='sexo'>
    <option class="contact_input"  name="sexo" value="001" style="margin-left:30%;"/>Masculino</option>
   	<option class="contact_input"  name="sexo" value="002" style="margin-left:30%;"/>Feminino</option>
    </select>
    </div>
    
    <div class="form_row">  
    <label class="contact"><strong>CPF:</strong></label>
    <input class="contact_input" type="text" name="cpf" id="cpf" maxlength="11" onkeypress="return SomenteNumero(cpf);" onkeyup="ValidarCPF(cpf);" /></form>
    </div>
	<div  class="contact_input" id="testa_cpf" >
	</div>
    
    <div class="form_row">
    <label class="contact"><strong>RG:</strong></label>
    <input class="contact_input" type="text" name="rg" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>País:</strong></label>
    <select name='sexo'>
    <option class="contact_input"  name="pais" value="001" style="margin-left:30%;"/>Brasil</option>
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
	<input class="contact_input" type="text" name="endereço" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Complemento:</strong></label>
	<input  class="contact_input"type="text" name="complementoEndereço" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Bairro:</strong></label>
	<input class="contact_input" type="text" name="bairro" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>E-mail:</strong></label>
	<input  class="contact_input"type="text" name="email" size="24"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Fone (DDD):</strong></label>
	<input class="contact_input" type="text" name="telefone" maxlength="12" onkeypress="formatar('##-####-####', this)"/>
    </div>
    
    <div class="form_row">
    <label class="contact"><strong>Cel (DDD):</strong></label>
	<input class="contact_input" type="text" name="celular" maxlength="12" onkeypress="formatar('##-####-####', this)"/>
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
              Eu concordo com os <a href="#">Termos &amp; Condições</a>                        
    </div>
    </div> 
	
	<div class="form_row">
	<input class="register" type="submit" value="Enviar" onclick="VerificaCPF()"/>
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
 <script>
	function validarNome(){	
	jQuery(document).ready(function($) {
		if( jQuery("#nome").val() == '' )
		{
			document.getElementById("testa_nome").innerHTML = '<img src="Imagens/error.png">Inválido. ';
			return false;
		}
		
		else
		{
			document.getElementById("testa_nome").innerHTML = '';
			return false;
		}
	});

}

function validarSNome(){	
	jQuery(document).ready(function($) {
		if( jQuery("#sobrenome").val() == '' )
		{
			document.getElementById("testa_snome").innerHTML = '<img src="Imagens/error.png">Inválido. ';
			return false;
		}
		
		else
		{
			document.getElementById("testa_snome").innerHTML = '';
			return false;
		}
	});

}

function validarDN(){	
	jQuery(document).ready(function($) {
		var dn = jQuery("#dn").val();
		var quebra_dn = dn.split("-");
		
		if(quebra_dn[0] > 31 || quebra_dn[1] > 12 || quebra_dn[2].lenght != 4)
		{
			document.getElementById("testa_dn").innerHTML = '<img src="Imagens/error.png">Inválido. ';
			return false;
		}
		
		else
		{
			document.getElementById("testa_dn").innerHTML = dn;
			return false;
		}
		
	});

}

function SomenteNumero(e){
 var tecla=(window.event)?event.keyCode:e.which;
 if((tecla>47 && tecla<58)) return tecla;
 else{
 if (tecla==8 || tecla==0) return tecla;
 else  return false;
 }
}

function ValidarCPF(Objcpf){
        var cpf = Objcpf.value;
        exp = /\.|\-/g
        cpf = cpf.toString().replace( exp, "" );
        var digitoDigitado = eval(cpf.charAt(9)+cpf.charAt(10));
        var soma1=0, soma2=0;
        var vlr =11;
        for(i=0;i<9;i++){
                soma1+=eval(cpf.charAt(i)*(vlr-1));
                soma2+=eval(cpf.charAt(i)*vlr);
                vlr--;
        }      
        soma1 = (((soma1*10)%11)==10 ? 0:((soma1*10)%11));
        soma2=(((soma2+(2*soma1))*10)%11);      
        var digitoGerado=(soma1*10)+soma2;
        if(digitoGerado!=digitoDigitado)       
        {	
			document.getElementById("testa_cpf").innerHTML = '<img src="Imagens/error.png">Inválido. ';
			return false;
		}
		
		else
		{
			document.getElementById("testa_cpf").innerHTML = ' ';
			return false;
		}
}
</script>