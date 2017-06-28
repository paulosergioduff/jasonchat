<?php header ('Content-type: text/html; charset=UTF-8');
	session_start();
	require_once "class/Conexao.class.php";
	require_once "class/Usuario.class.php";
	if (isset($_GET['logout'])):
					if ($_GET['logout'] == 'confirmar'):
									Login::deslogar();
					endif;
	endif;
	if (isset($_SESSION['logado'])):
		$roletaAds = date("s");
	?>
<html lang="pt-br">
	<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta charset="utf-8"/>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/socialNetwork.css">
		<title>Dashboard</title>
		<style type="text/css">
			
			}
			#anuncioDireita2{
				/*
					width: 350px; height: 330px; position: fixed;  right: 0%; top: 10%; z-index: 9999;
					
				*/

				width: 350px;
				height: 330px;
				position: fixed;
				right: 0%;
				top: 10%;
				z-index: 9999;
			}
		</style>
		<meta name="author" content="Paulo C Teixeira">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/socialNetwork.css">
		<script type="text/javascript">
			window.sessionStorage.setItem('usuarioAtual', '<?php echo $_SESSION["administrador"]; ?>');
			var usuarioEmSessao = window.sessionStorage.getItem('usuarioAtual');
			//alert(usuarioEmSessao);
		</script>
	</head>
	<body onLoad="document.centralForm.mensagem.focus();">
	
		
		<nav></nav>
		<?php include "navbar.php"; ?><?php include "anuncio.php"; ?>
			<br />
		<?php
			include "class/Upload.class.php";
			if ((isset($_POST["submit"])) && (!empty($_FILES['foto']))) {
							$upload = new Upload($_FILES['foto'], 96, 96, "fotos/");
							echo $upload->salvar();
			}
			?>
		
		<div id="retornoTecla"></div>
		<form name="centralForm">
			<div id="caixaEnvioDeMensagem">	
<textarea cols="80"  id="mensagem"></textarea><label id="enviarBotao" onclick="pegaMensagem()">→</label>

</div>
		</form>
		<br>
		<div id="frameRecebeMensagens">
			<iframe src="caixaDeMensagens.php" height="70%" width="100%" frameborder="0" ></iframe>
		</div>
		<div id="recebeMensagem"></div>
		<script type="text/javascript">
			function modoSemiChat()
			{
				document.getElementById('frameRecebeMensagens').innerHTML = '<iframe src="caixaDeMensagens.php#fim" height="70%" width="100%" frameborder="0" scrolling="no">';
				document.getElementById("mensagem").focus();
			}
				function pegaMensagem()
				{
					var mensagem = window.document.getElementById('mensagem').value;
					//alert(mensagem);
					document.getElementById('recebeMensagem').innerHTML = "<iframe src='enviaMensagem.php?mensagem="+mensagem+"&update=<?php echo $roleta; ?>#fim'></iframe>";
					document.getElementById('caixaEnvioDeMensagem').innerHTML = '<textarea cols="80"  id="mensagem"></textarea><label id="enviarBotao" onclick="pegaMensagem()">→</label>';
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