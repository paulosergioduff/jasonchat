<?php 
session_start();
require_once "class/Conexao.class.php";
require_once "class/Usuario.class.php";
if (isset($_GET['logout'])):
				if ($_GET['logout'] == 'confirmar'):
								Login::deslogar();
				endif;
endif;
if (isset($_SESSION['logado'])):
?>
<html lang="pt-br">
	<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta charset="utf-8"/>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/socialNetwork.css">
		<title>Dashboard</title> 

			

		<meta name="author" content="Paulo C Teixeira">
		<meta name="description" content="">
		
		<link rel="stylesheet" type="text/css" href="css/socialNetwork.css">
	</head>
	<body onLoad="document.centralForm.mensagem.focus();">

	<nav></nav>

	<?php
	$roleta = date(s); // adciona um número de segundo a imagem e página forçando atualização

				$profilePhoto = $_SESSION['administrador'];
				$arquivo      = "fotos/$profilePhoto" . '.jpg';
				if (file_exists($arquivo)) {
								$avatar = "<img src='fotos/$profilePhoto.jpg?$roleta' width='40px' height='40px' id='fotoDePerfil'>";
				} else {
								$avatar = "<img src='fotos/noPhoto.jpg' width='40px' height='40px' id='fotoDePerfil'>";
				}
				
?><br />

<?php include "navbar.php"; ?><?php include "anuncio.php"; ?>

	
	<?php
				include "class/Upload.class.php";
				if ((isset($_POST["submit"])) && (!empty($_FILES['foto']))) {
								$upload = new Upload($_FILES['foto'], 96, 96, "fotos/");
								echo $upload->salvar();
				}
?>

	<a href="dashboard.php?logout=confirmar"><div class="i2Style">sair</div></a><div id="retornoTecla"></div>

<form name="centralForm">

<div id="caixaEnvioDeMensagem">	


</div>

</form>


<br>


<div id="frameRecebeMensagens">
<iframe src="listaDeContatos.php#fim" height="85%" width="100%" frameborder="0" ></iframe>
</div>

	<div id="recebeMensagem"></div>



<script type="text/javascript">
function modoSemiChat()
{
	document.getElementById('frameRecebeMensagens').innerHTML = '<iframe src="caixaDeMensagens.php#fim" height="100%" width="100%" frameborder="0" scrolling="no">';
	document.getElementById("mensagem").focus();
}
	function pegaMensagem()
	{
		var mensagem = window.document.getElementById('mensagem').value;
		//alert(mensagem);
		document.getElementById('recebeMensagem').innerHTML = "<iframe src='enviaMensagem.php?mensagem="+mensagem+"&update=<?php echo $roleta; ?>#fim'></iframe>";
		document.getElementById('caixaEnvioDeMensagem').innerHTML = '<textarea cols="80"  id="mensagem"></textarea><input type="submit" value="→" id="enviarBotao" onclick="pegaMensagem()">';
		setTimeout("modoSemiChat()",500);

		
		//tempoFuncao();
	}


	
			 function tecla(){
    // window.alert("O código da tecla pressionada foi: " + event.keyCode); //Para teste de retorno
    if (event.keyCode == '13') {
    	pegaMensagem();
    }
  }
  
  document.body.onkeypress = tecla;

  			tecla();
		
</script>

	




<?php
else:
				echo "Voce nao tem permissao de acesso. <a href=\"home.php\">Clique aqui para voltar</a>";
				header("Location: home.php");
endif;
?>

	</body>
</html>
