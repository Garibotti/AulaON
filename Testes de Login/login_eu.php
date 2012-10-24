<? php
//obtém os valores digitados
$username = $_POST["assunto"];
$senha = $_POST["senha"];

//acesso ao banco de dados
include "conecta_mysql.inc";
$resultado = mysql_query("Select * from alunos where username = '$username' or email ='$username'");
$linhas = mysql_num_rows ($resultado);

if($linhas == 0) //testa se foi encontrado um usuario com o username ou email colocado
{

	//giu fazer a pagina de usuario nao encontrado?
	
}

else

{

	if($senha != mysql_result($resultado, 0, "senha")) //confere senha
	{
	
		//giu fazer a pagina de senha incorreta?
		8i
	}
	
	else //usuario e senha corretos
	{
		setcookie("nome_usuario", $username);
		setcookie("senha_usuario", $senha);
		//direcionar para a pagina inicial do aluno ou professor? header("location: adhjahfj.php");
	}
}
mysql_close($conexao);
?>