<?php

function centralInsere($protocol, $serverOrigin, $serverDestiny, $type, $autor, $menssage)
	{
		 $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
         $crud->insert($autor, $menssage, $protocol, $type, '*****', 'menssagem', $serverDestiny);
         echo '<script> alert("Testado!")</script>';
	}

function verificaCondicaoExistente($persquisarPor, $noCampo, $naTabela)
		{
			include "padrao.php";
			$acao = $_GET['acao'];
                
//$coluna   = "$noCampo";
$servidor = "$sevidorPadrao";
$usuario  = "$usuarioPadrao";
$senhaDB  = "$senhaPadrao";
$dbname   = "$bancoPadrao";
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senhaDB, $dbname) or die(mysqli_error($conn));
;
//$buscarEm       = "$naTabela";
//$perquisar      = $persquisarPor;
$result_codigos    = "SELECT * FROM $naTabela WHERE $noCampo LIKE '$persquisarPor' LIMIT 5 ";
$resultado_codigos = mysqli_query($conn, $result_codigos);
while ($rows_codigos = mysqli_fetch_array($resultado_codigos)) {
    
                $itensEncontrados++;
}
if ($itensEncontrados > 0) {
                # code...
                //echo "Já existe alguém cadastrado com esse login";
                exit("Este contato já foi adcionado a lista de $acao");
                
} else {
              
}
//echo "<script>alert('funcionando');</script>";
		}


function verificaBloqueio($persquisarPor, $noCampo, $naTabela, $resultado, $usuarioAtual, $varchar2, $idPost, $data, $roleta, $mensagemUsuario, $arquivo)
		{
			include "padrao.php";
			$acao = $_GET['acao'];
                
//$coluna   = "$noCampo";
$servidor = "$sevidorPadrao";
$usuario  = "$usuarioPadrao";
$senhaDB  = "$senhaPadrao";
$dbname   = "$bancoPadrao";
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senhaDB, $dbname) or die(mysqli_error($conn));
;
//$buscarEm       = "$naTabela";
//$perquisar      = $persquisarPor;
$result_codigos    = "SELECT * FROM $naTabela WHERE $noCampo LIKE '$persquisarPor' LIMIT 5 ";
$resultado_codigos = mysqli_query($conn, $result_codigos);
while ($rows_codigos = mysqli_fetch_array($resultado_codigos)) {
    
                $itensEncontrados++;
}
if ($itensEncontrados > 0) {
              // echo 'bloqueado<br>';
                
} else {
	//echo 'não bloqueado<br>';
	exibeMensagem($resultado, $usuarioAtual, $varchar2, $idPost, $data, $roleta, $mensagemUsuario, $arquivo);
              
}
//echo "<script>alert('funcionando');</script>";
		}

function exibeMensagem($resultado, $usuarioAtual, $varchar2, $idPost, $data, $roleta, $mensagemUsuario, $arquivo)
	{

		    if ($resultado > 0) {
        
        if ($varchar2 == $usuarioAtual) {
        	// inicia DIV
          echo "<div id='caixaDeMensagem' class='mensagemPadrao' onClick=" . '"' . "dadosDoProprioPost('$usuarioAtual$data', '$data', '$varchar2', '$idPost')" . '"' . ">";
        } else {
          echo "<div id='outroUsuario' class='mensagemPadrao' onClick=" . '"' . "recebeReact('$varchar2$data', '$data','$varchar2', '$idPost')" . '"' . ">";
        }
        
        	// inicia foto
        if (file_exists($arquivo)) {
          echo "<img src='fotos/$varchar2.jpg?$roleta' width='40px' height='40px' id='fotoDePerfil'>";
        } else {
          echo "<img src='fotos/noPhoto.png?$roleta' width='40px' height='40px' id='fotoDePerfil'>";
        }
        
        echo '  <i>" ' . $mensagemUsuario . ' "</i>' . "<i id='autor' style='font-size: 12px;'> - Enviado por $varchar2</i>";
        echo "</div><div id='react$varchar2$data' ></div><br>";
        
      }
	}

	