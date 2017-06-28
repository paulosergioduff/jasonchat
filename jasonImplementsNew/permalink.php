<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/socialNetwork.css">
  <title></title>
  <meta charset="utf-8">
  <style type="text/css">
    #container{
      position: absolute;
      top: 7.5%;
    }
  </style>

  </script>
</head>
<body>
<div id="container">
<!--<a href="#fim" style="color: black">ir para fim</a>-->
<?php error_reporting(0);  header ('Content-type: text/html; charset=UTF-8');

require_once('installJason.php');
include "padrao.php";
include "navbar.php";

$filtroPostagem = $_GET['tipo'];
$filtroConteudo = $_GET['id'];

$tipoDePostagem = addslashes($filtroPostagem);
$idDeConteudo = addslashes($filtroConteudo);

  //session_start();

  //require_once "class/Conexao.class.php";
  

$crud = crud::getInstance(Conexao::getInstanceMultiton("$bancoPadrao"));

$dia = date(d);
$mes = date(m);
$ano = date(Y);

$concatena = $ano . "-" . $mes;// . "-" . $dia;

//echo $concatena;

$campo = $idDeConteudo; 
$coluna = 'id';

function UrlAtual(){
 $dominio= $_SERVER['HTTP_HOST'];
 $url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
 return $url;
 }

$roleta = date(s); // adciona um número de segundo a imagem forçando atualização


$dados = $crud->selecionaCampo("$tipoDePostagem");
if ($controleSelect != false) {
                foreach ($dados as $reg):
                                
                              $camposBuscado = $reg->$coluna;
                            	$mensagemUsuario = $reg->varchar3;
                            	$varchar2 = $reg->varchar2;
                              $idPost = $reg->id;
                            	$arquivo = "fotos/$varchar2".'.jpg';
                              $data = $reg->data1;
                            
                            $resultado = substr_count($camposBuscado, $campo);
			if ($resultado > 0) {
                          $usuarioAtual = $_SESSION['administrador'];
				                  if ($varchar2 == $usuarioAtual) {
                            echo "<div id='caixaDeMensagem' class='mensagemPadrao' onClick=".'"'."dadosDoProprioPost('$varchar2$data', '$data', '$varchar2', '$idPost')".'"'.">";
                          }
                            else{
                              echo "<div id='outroUsuario' class='mensagemPadrao' onClick=".'"'."recebeReact('$varchar2$data', '$data','$varchar2', '$idPost')".'"'.">"; 

                            }


				if (file_exists($arquivo)) {
           	echo "<img src='fotos/$varchar2.jpg?$roleta' width='40px' height='40px' id='fotoDePerfil'>";
           }
           		else{
           			echo "<img src='fotos/noPhoto.png?$roleta' width='40px' height='40px' id='fotoDePerfil'>";
           		}
				
				echo '  <i>" '.$mensagemUsuario.' "</i>'."<i id='autor' style='font-size: 12px;'> - Enviado por $varchar2</i>";
				echo "</div><div id='react$varchar2$data' ></div><br>";
				
			}
				                                  
                            
                endforeach;
               ;
              // echo "<div id='outroUsuario'><a  name='fim'></a><i>Fim das mensagens</i></div>"   ; 
                $novaUrl= UrlAtual();
               echo '<br><input ="text" value="'.$novaUrl.'" style="position:absolute; left:5%; width:50%;" class="textarea"><br><button class="copiar">Copiar Texto</button>';


}

include "include/recebeMensagem.php";
?>
</div>

</div>
<script>if (self != top) { top.location.replace(window.location.href) }</script>

<script type="text/javascript">
  var copyTextareaBtn = document.querySelector('.copiar');

copyTextareaBtn.addEventListener('click', function(event) {
  var copyTextarea = document.querySelector('.textarea');
  copyTextarea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'sim!' : 'não!';
    alert('Texto copiado para área de transferência. Resultado:' + msg);
  } catch (err) {
    alert('Opa, Não conseguimos copiar o texto, é possivel que o seu navegador não tenha suporte, tente usar Crtl+C.');
  }
});
</script>
	
