<?php
	session_start();

	require_once "class/Conexao.class.php";
	require_once "class/Usuario.class.php";

	if(isset($_GET['logout'])):
		if($_GET['logout'] == 'confirmar'):
			Login::deslogar();
		endif;
	endif; 

	if(isset($_SESSION['logado'])):

?>
<html lang="pt-br">
	<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta charset="utf-8"/>
		<title>Dashboard</title> 
		<meta name="author" content="Paulo C Teixeira">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>

	<nav></nav>

	Configurações da conta <?php echo $_SESSION['administrador']; 

	

	?><br />

<h1>Alterar avatar</h1>




	<a href="dashboard.php?logout=confirmar">Sair</a>




<?php
	else:
		echo "Voce nao tem permissao de acesso. <a href=\"home.php\">Clique aqui para voltar</a>";
	endif;
?>

	</body>
</html>
