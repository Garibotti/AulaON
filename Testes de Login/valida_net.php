<? php
//Inclui o arquivo com o sistema de segurança
include("seguranca.php");

//Verifica se um formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//Salva duas variáveis com o que foi digitado no formulário
	//Detalhe: faz uma verificação com isset() pra saber
	//se o campo foi preenchido
	$usuario = (isset($_POST['assunto'])) ? $_POST['assunto'] : '';
	$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
	
	//Utiliza uma função criada no seguranca.php para validar
	//os dados digitados
	if(validaUsuario($usuario,$senha) == true)
	{
		//O usuario e a senha digitados foram validados,
		//manda para a pagina dele (função header).
	}
	
	else
	{
		//O usuario e a senha nao sao validos, portanto
		//manda eles de novo para a tela de login
	}
}
?>

