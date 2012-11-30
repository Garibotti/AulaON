<?php
$nome = $_POST["nome"];
$snome = $_POST['sobrenome'];
$dn = $_POST['dn'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$complend = $_POST['complend'];
$bairro = $_POST['bairro'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$banco = $_POST['banco'];
$agenciaBanco = $_POST['agenciaBanco'];
$contacorrente = $_POST['contacorrente'];
$usuario = $_POST['usuario'];
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
$rg = antiInjection($rg);
$cep = antiInjection($cep);
$endereco = antiInjection($endereco);
$complend = antiInjection($complend);
$bairro = antiInjection($bairro);
$email = antiInjection($email);
$telefone = antiInjection($telefone);
$celular = antiInjection($celular);
$banco = antiInjection($banco);
$agenciaBanco = antiInjection($agenciaBanco);
$contacorrente = antiInjection($contacorrente);
$usuario = antiInjection($usuario);
$senha = antiInjection($senha);

$senha = md5($senha);

include "conecta_mysql.php";

mysql_query("INSERT INTO usuario(Nome,Sobrenome,DN,Sexo,CPF,RG,Pais,
Estado, Cidade,Cep,Endereco,ComplementoEnd,Bairro,Email,Telefone,Celular,
Banco,Agencia,CC,Usuario,Senha) Values('$nome', '$snome', '$dn' , '$sexo', 
'$cpf', '$rg', '$pais', '$estado', '$cidade', '$cep', '$endereco', '$complend',
'$bairro', '$email', '$telefone', '$celular', '$banco', '$agenciaBanco', '$contacorrente', '$usuario', '$senha')");

header("location:index.php");
?>
