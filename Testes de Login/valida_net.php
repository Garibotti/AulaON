<? php
//Inclui o arquivo com o sistema de seguran�a
include("seguranca.php");

//Verifica se um formul�rio foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//Salva duas vari�veis com o que foi digitado no formul�rio
	//Detalhe: faz uma verifica��o com isset() pra saber
	//se o campo foi preenchido
	$usuario = (isset($_POST['assunto'])) ? $_POST['assunto'] : '';
	$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
	
	//Utiliza uma fun��o criada no seguranca.php para validar
	//os dados digitados
	if(validaUsuario($usuario,$senha) == true)
	{
		//O usuario e a senha digitados foram validados,
		//manda para a pagina dele (fun��o header).
	}
	
	else
	{
		//O usuario e a senha nao sao validos, portanto
		//manda eles de novo para a tela de login
	}
}
?>

