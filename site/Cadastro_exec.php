<?php
$nome = $_POST["nome"];
$snome = $_POST['sobrenome'];
$dn = $_POST['dn'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$senha = $_POST['senha'];


function antiInjection($str) 
{
  //Remove palavras suspeitas de injection.
  $str = preg_replace("/(\n|\r|%0a|%0d|Content-Type:|bcc:|to:|cc:|Autoreply:|from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$str);
  $str = strip_tags($str);  //Remove tags HTML e PHP.
  $str = addslashes($str);  //Adiciona barras invertidas à uma string.
  return $str;
  
}

$nome = antiInjection($nome);
$snome = antiInjection($snome);
$dn = antiInjection($dn);
$cpf = antiInjection($cpf);
$email = antiInjection($email);
$telefone = antiInjection($telefone);
$senha = antiInjection($senha);

$senha = md5($senha);

include "conecta_mysql.php";

mysql_query("INSERT INTO usuario(Nome,Sobrenome,DN,Sexo,CPF,Email,Telefone,Celular,Senha) Values('$nome', '$snome', '$dn' , '$sexo', 
'$cpf', '$email', '$telefone', '$celular', '$senha')");

header("location:index.php");
?>
