<? php
//Abre uma conex�o com o servidor mysql
$_SG['conectaServidor'] = true;
//Inicia a sess�o com um session_start()
$_SG['abreSessao'] = true;
//Vou utilizar o case sensitive
$_SG['caseSensitive'] = true;
//Nao precisa validar a cada carregamento de pagina
$_SG['validaSempre'] = false;

//SERVIDOR
$_SG['servidor'] = 'localhost';
//USUARIO
$_SG['usuario'] = 'root';
//SENHA
$_SG['senha'] = '';
//BANCO
$_SG['banco'] = 'site_aulas';

//Pagina do login
$_SG['paginaLogin'] = 'Login.html'; //pagina que o giu criou

//Tenho q ver como faremos para pesquisar em professor ou aluno
//para poder declarar as tabelas

//A partir daqui come�a o algoritmo de seguran�a

//Verificar conex�o com o banco
if ($_SG['conectaServidor'] == true) 
{

	$_SG['link'] = mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("MySQL: N�o foi poss�vel conectar-se ao servidor [".$_SG['servidor']."].");
	mysql_select_db($_SG['banco'], $_SG['link']) or die("MySQL: N�o foi poss�vel conectar-se ao banco de dados [".$_SG['banco']."].");

}

// Verifica se precisa iniciar a sess�o
if ($_SG['abreSessao'] == true) 
{
	session_start();

}

//Fun��o utilizada para validar o usuario

function validaUsuario($usuario,$senha)
{
	global $_SG;
	
	$cS = ($_SG['caseSensitive']) ? 'BINARY' : '';
	
	//Fun��o para remover aspas e nao dar problema na pesquisa
	$nusuario = addslashes($usuario);
	$nsenha = addslashes($senha);
	
	//Montar a consutal sql para procurar este usu�rio
	$sql = "select id, nome from ".$_SG['tabela']." where
	".$cS." ".$nusuario." = " //aqui fica minha falta de dados no banco para saber o q fa�o
	
	$query = mysql_query($sql);
	$resultado = mysql_fetch_assoc($query);
	
	if(empty($resultado))
	{
		//nennhum usario encontrado
		return false;
	}
	
	else
	{
		//se nao o resultado foi encontrado
		//temos um usuario logando
		
		$_SESSION['usuarioID'] = $resultado['id'];
		$_SESSION['usuarioNome'] = $resultado['nome'];
		
		if ($_SG['validaSempre'] == true)
		{
			$_SESSION['usuarioLogin'] = $usuario;
			$_SESSION['usuarioSenha'] = $senha;
		}
		
		return true;
		}
		}
		?>


	