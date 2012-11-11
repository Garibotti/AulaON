<!DOCTYPE html>

<html>
<head>
	<script src="Javascript/VerificaCPF.js" type="text/javascript"></script>
    <link rel="stylesheet" href="CSS/Calendario.css" />
    <script src="Javascript/Calendario.js"></script>
    <script src="Javascript/Calendario2.js"></script>
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
</head>
<body>
	<?php 
	include("PadraoComum.php");
	?>
	 <!--conteudo-->
    <div id="conteudo">
	<div id="principal">
	<div id="cadastro">
    Nome:
    <br />
    <input type="text" name="nome" size="24"/><br /><br />
    <br />
    Sobrenome:
    <br />
    <input type="text" name="sobrenome" size="24"/><br /><br />
    <br />
    Data de Nascimento:
    <br />
    <input type="text" id="datepicker" maxlength="10" onkeypress="formatar('##/##/####', this)"/><br /><br />
    <br />
    <input type="radio" name="sexo" value="masculino" checked="checked"/>Masculino <br />
    <br />
    <input type="radio" name="sexo" value="feminino"/>Feminino<br />
    <br /> 
    <br />  
    CPF:
    <br />
    <form name="frmcpf" method="post" action="default.php" onsubmit="VerificaCPF();">
    <input type="text" name="cpf" maxlength="11" onkeypress="formatar('###########', this)"/></form><br /><br />
    <br />
    RG:
    <br />
    <input type="text" name="rg" size="24"/><br /><br />
    <br />
    País:
    <br />
    <input type="text" name="pais" size="24"/><br /><br />
    <br />
    UF:
    <br />
	<input type="text" name="uf" size="24"/><br /><br />
    <br />
    CEP:
    <br />
	<input type="text" name="cep" maxlength="9" onkeypress="formatar('#####-###', this)"/><br /><br />
    <br />
    Cidade:
    <br />
	<input type="text" name="cidade" size="24"/><br /><br />
    <br />
    Endereço:
    <br />
	<input type="text" name="endereço" size="24"/><br /><br />
    <br />
    Complemento:
    <br />
	<input type="text" name="complementoEndereço" size="24"/><br /><br />
    <br />
    Bairro:
    <br />
	<input type="text" name="bairro" size="24"/><br /><br />
    <br />
    E-mail:
    <br />
	<input type="text" name="email" size="24"/><br /><br />
    <br />
    Telefone:
    <br />
	<input type="text" name="telefone" maxlength="12" onkeypress="formatar('##-####-####', this)"/><br /><br />
    <br />
    Celular:
    <br />
	<input type="text" name="celular" maxlength="12" onkeypress="formatar('##-####-####', this)"/><br /><br />
    <br />
    Banco:
    <br />
	<input type="text" name="banco" size="24"/><br /><br />
    <br />
    Agência:
    <br />
	<input type="text" name="agenciaBanco" size="24"/><br /><br />
    <br />
    Conta Corrente:
    <br />
	<input type="text" name="contacorrente" size="24"/><br /><br />
    <br />
     Nome de Usuário:
    <br />
	<input type="text" name="usuario" size="24"/><br /><br />
    <br />
     Senha:
    <br /> 
	<input type="password" name="senha" size="24"/><br /><br />
    <br />
     Confirmar Senha:
    <br /> 
	<input type="password" name="confirmarsenha" size="24"/><br /><br />
    <br />
	<input type="submit" name="enviar" value="Enviar" onclick="VerificaCPF()"/>
	<input type="reset" value="Limpar"/>
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