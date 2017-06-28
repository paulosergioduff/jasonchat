<?php
			$roleta = date("s"); // adciona um número de segundo a imagem e página forçando atualização
			
						$profilePhoto = $_SESSION['administrador'];
						$arquivo      = "fotos/$profilePhoto" . '.jpg';
						if (file_exists($arquivo)) {
										$avatar = "<img src='fotos/$profilePhoto.jpg?$roleta' width='40px' height='40px' id='fotoDePerfil'>";
						} else {
										$avatar = "<img src='fotos/noPhoto.png?$roleta' width='40px' height='40px' id='fotoDePerfil'>";
						}
						if (empty($_SESSION['administrador'])) {
							echo "<div id='caixaDeLogado' style='color:black; font-size:18px; text-decoration: none;'>$avatar <i> deslogado" . " <a href='dashboard.php'>Início</a></div><br>";
						}
							else{
								echo "<div id='caixaDeLogado' style='color:black; font-size:18px; text-decoration: none;'>$avatar <i>" . $_SESSION['administrador'] . " Logado" . " <a href='dashboard.php'>Início</a> - <a href='contatos.php' >Meus contatos</a> - <a href='alterarDados.php' >Alterar foto</a> - <a href='dashboard.php?logout=confirmar' >sair</a></i></div>";
							}
			?>