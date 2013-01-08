<?php
//obtщm os valores digitados
$username = $_POST["Login"];
$senha = $_POST["Senha"];

function antiInjection($str) 
{
  //Remove palavras suspeitas de injection.
  $str = preg_replace("/(\n|\r|%0a|%0d|Content-Type:|bcc:|to:|cc:|Autoreply:|from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$str);
  $str = strip_tags($str);  //Remove tags HTML e PHP.
  $str = addslashes($str);  //Adiciona barras invertidas р uma string.
  return $str;
  
} 

$username = antiInjection($username);
$senha = antiInjection($senha);

$sen_codificada = md5($senha); //senha criptografada

//acesso ao banco de dados
include "conecta_mysql.php";
$resultado = mysql_query("Select * from usuario where Email ='$username'");
$linhas = mysql_num_rows ($resultado);

if($linhas == 0) //testa se foi encontrado um usuario com o username ou email colocado
{	
	//se nуo foi encontrado
	header("location:Login.php?teste=Usuсrio ou seha incorreto!");

}

else
{

	if($sen_codificada == mysql_result($resultado, 0, "senha_temp")) //confere senha
	{
		$data = date("d/m/y H:i:s");
		
		if($data >= mysql_result($resultado, 0, "data_exp"))
		{
			
			header("location:Troca_senha.php");
			
		}
		else
		
		{
			$rowsenha = substr(md5(uniqid('')), -9, 10);
			
			$email = mysql_result($resultado, 0, "Email");
			$sen_codificada = hash('whirlpool', $rowsenha);
			//salva no banco nova senha e temp_exp
			$query = mysql_query ("update usuario set senha_temp = '$sen_codificada', Data_exp =(STR_TO_DATE('$data','%d/%m/%Y %H:%i:%s')) where email='$email'");
	
			//enviar um email para variavel email juntamente com a variсvel senha;
			$mensage ="Sua senha temporaria expirou, confira seu novos dados.";
			$mensage .="E-mail= " . $email;
			$mensage .="Senha:" . $rowsenha;
			mail($email, "Aula ON - Recuperaчуo de Senha", $mensage);

			header("location:Login.php?teste=Sua senha expirou, foi enviado um email com uma nova senha!");
		}		
	}
	
	else
	
	if($sen_codificada != mysql_result($resultado, 0, "Senha")) //confere senha
	{
		//se nуo foi encontrado
		header("location:Login.php?teste=Usuсrio ou seha incorreto!");	
	}
	
	else //usuario e senha corretos
	{
		
		$usuario_id					= mysql_result($resultado, 0, "id");	
		$nome						= mysql_result($resultado, 0, "Nome");
		$resultado					= mysql_query("SELECT count(*) as Total FROM  aluno WHERE usuario_id ='$usuario_id'");	
		
		session_start("usuario");
		$_SESSION["TipoUsuario"] 	= (mysql_result($resultado, 0, "Total")>0) ? "Aluno" : "Professor";
		$_SESSION["nome_usuario"]	= $nome;
	
		
		header("location: adm/Index.php");
		
	}
}
?>