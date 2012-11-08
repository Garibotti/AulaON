<?php
//pega a variavel via post
$email = $_POST['email'];

function antiInjection($str) 
{
  # Remove palavras suspeitas de injection.
  $str = preg_replace(sql_regcase("/(\n|\r|%0a|%0d|Content-Type:|bcc:|to:|cc:|Autoreply:|from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $str);
  $str = strip_tags($str);  # Remove tags HTML e PHP.
  $str = addslashes($str);  # Adiciona barras invertidas à uma string.
  return $str;
} 
$email = antiInjection($email);

//acesso ao banco de dados
include "conecta_mysql.inc";

//busca no db o usuario com o email 
$result = mysql_query("SELECT * FROM usuario WHERE email='$email'");

//conta quantos tem
$num_rows = mysql_num_rows($result);

if($num_rows == '1')
{
	
	$rowsenha = substr(md5(uniqid('')), -9, 10);
    
	$sen_codificada = hash('whirlpool', $rowsenha);
	$data = date("dd/mm/YYYY h:i:s",strtotime("+1 day"));
	
	//salva no banco nova senha e temp_exp
	$query = mysql_query ("update usuario set senha_temp = '$sen_codificada', data_exp ='$data' where email='$email'");
	
	//enviar um email para variavel email juntamente com a variável senha;
	$mensage ="Você solicitou a recuperação de senhha confira seu dados.";
	$mensage .="E-mail= " . $email;
	$mensage .="Senha:" . $rowsenha;
	mail($email, "Aula ON - Recuperação de Senha", $mensage);

echo"<script>alert(Sua nova senha foi enviada para o e-mail indicado.),window.open('recuperar_senha_enviado.php','_self')</script>";
}
else
{
       echo"<script>alert('E-mail não cadastrado em nosso sistema'),window.open('esqueci_senha.php','_self')</script>";      
}

?>