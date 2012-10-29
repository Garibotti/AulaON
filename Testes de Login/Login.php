<? php
//obtém os valores digitados
$username = $_POST["Login"];
$senha = $_POST["Senha"];
$escolha = $_GET["ap"]; //radiobutton

function antiInjection($str) 
{
  # Remove palavras suspeitas de injection.
  $str = preg_replace(sql_regcase("/(\n|\r|%0a|%0d|Content-Type:|bcc:|to:|cc:|Autoreply:|from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $str);
  $str = strip_tags($str);  # Remove tags HTML e PHP.
  $str = addslashes($str);  # Adiciona barras invertidas à uma string.
  return $str;
} 

$username = antiInjection($username);
$senha = antiInjection($senha);

$sen_codificada = hash('whirlpool', $senha); //senha criptografada

//acesso ao banco de dados
include "conecta_mysql.inc";
$resultado = mysql_query("Select * from $escolha where username = '$username' or email ='$username'");
$linhas = mysql_num_rows ($resultado);

if($linhas == 0) //testa se foi encontrado um usuario com o username ou email colocado
{	
	echo "Usario ou senha incorreto!";
	
}

else

{

	if($sen_codificada != mysql_result($resultado, 0, "senha")) //confere senha
	{
		echo "Usuario ou senha incorreto!";
			
	}
	
	else //usuario e senha corretos
	{
		setcookie("nome_usuario", $username);
		setcookie("senha_usuario", $sen_codificada);
		//direcionar para a pagina inicial do aluno ou professor? header("location: exemplo.php");
	}
}
mysql_close($conexao);
?>