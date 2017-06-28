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
		<link rel="stylesheet" type="text/css" href="css/socialNetwork.css">
	</head>
	<body>

	<nav></nav>
	<?php include "navbar.php"; ?><?php include "anuncio.php"; ?>

	Configurações da conta <?php echo $_SESSION['administrador']; 

	

	?><br />

	<div id="caixaFormulario" style="position: absolute; width: 33%; height: auto; left: 25%;">
<center>

<h1>Alterar avatar</h1>

<?php include "cadastraFoto.php"; ?>


<h3>Atenção! Ao escolher a foto, selecionando o arquivo e clicando em enviar, espere até a página recarregar sozinha!</h3>
	<a href="dashboard.php?logout=confirmar" class="btn btn-danger" style="color: white;">Sair</a> <div class="btn btn-primary"><a href="dashboard.php" style="color: white;">Página principal</a></div>

</center>
</div>

<?php
	else:
		echo "Voce nao tem permissao de acesso. <a href=\"home.php\">Clique aqui para voltar</a>";
	endif;
?>

	</body>
</html>
