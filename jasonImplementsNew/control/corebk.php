<?php error_reporting(0);
// Colocar isso acima "E_ALL ^ E_WARNING" e ativar esta linha Lini_set(“display_errors”, 1 );
date_default_timezone_set("America/Sao_Paulo");

$server    = "http://paulosergioduff.atspace.cc/cpu.php";
$ip = getenv("REMOTE_ADDR");
$alu       = "h54875847afhdf";
$aspas     = '"';
$memory    = "ffff";
$user      = $_GET['user'];
$menssagev  = htmlspecialchars($_GET['menssage']);
$dia       = date("d");
$mes       = date("m");
$ano       = date("y");
$hora      = date("H");
$minuto    = date("i");
$segundo   = date("s");
$protocolo = $dia . $mes . $ano . ".json";
$user      = $_GET['user'];
$cabecalho = '{"usuarios":[';
$menssagex = base64_encode($menssagev);
$hostnamex = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$hostnamey = gethostbyaddr($_SERVER['REMOTE_ADDR']) . $ip;
$hostname = sha1($hostnamex);
 $contador = strlen("http://paulosergioduff.atspace.cc/$protocolo");
$menssage = "
{
$aspas" . "nome" . "$aspas : $aspas$hostname$aspas,
$aspas" . "mensagem" . "$aspas: $aspas$menssagex$aspas
},
";

$menssagenew = "
{
$aspas" . "nome" . "$aspas : $aspas$hostname$aspas,
$aspas" . "mensagem" . "$aspas: $aspas$menssagex$aspas
},
";
?>