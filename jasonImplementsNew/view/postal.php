<?

$grupo = $_GET['group'];

setcookie('status', 'lido');

$arquivoi = "/var/www/chathost/data/$grupo" . "$dia" . "$mes" . "$ano" . ".json";
$infoi    = $cabecalho . file_get_contents($arquivoi) . '
{
"nome": "jasonmask31x31", 
"fim" : "fim"
}


]}';


$arquivo = "$server/data/$grupo" . "$dia" . "$mes" . "$ano" . ".json";
$info    = $cabecalho . file_get_contents($arquivo) . '
{
"nome": "jasonmask31x31", 
"fim" : "fim"
}


]}';

$lendo = json_decode($info);

foreach ($lendo->usuarios as $campo) {
    
    
    $perfilx = $campo->nome;
    $historico = $campo->historico;
    $campocontagem = $campo->contagem;
    
echo "<div aling='left' id='limit' class='spaceBeforeCP'>";
         $filename = "img/$perfilx" . ".jpg";
    if (file_exists($filename)) {
        // echo "O arquivo $filename existe";
        echo "<img src='img/" . "$perfilx" . ".jpg' width='31' height='31'>$perfilxdev";
        // echo "$fotofinal";
    } else {
        // echo "O arquivo $filename não existe";


// agradecimentos a página: http://phpbrasil.com/phorum/read.php?1,34745
$origem = "$server/img/$perfilx.jpg";
$destino = "img/$perfilx.jpg";
$orig = fopen($origem, "r");
$dest = fopen($destino, "w");
while (!feof($orig)) {
$line = fread ($orig, 1024);
fwrite($dest, $line);
}
fclose($orig);
fclose($dest);
echo "<img src='img/" . "$perfilx" . ".jpg' width='31' height='31'>$perfilxdev";
// agradecimentos a página: http://phpbrasil.com/phorum/read.php?1,34745

       // echo "<img src='$server/img/" . "$perfilx" . ".jpg' width='31' height='31'>";
      //  echo "<img src='$server/img/" . "$perfilx" . ".jpg' width='31' height='31>" . $campo->contagem;
    }
    
    http://localhost/chathost/img/
    
    // $fotofinal = "<img src='img/" . "$perfilx" . ".jpg' width='31' height='31'>";
    
    
    echo base64_decode($campo->mensagem) . "$arquivodev";

if ($devmod >= $on)

        {
            $arquivodev = "<p>Arquivo: $arquivo";
            $arquivoidev = "<p>Arquivoi: $arquivoi";
            $perfilxdev  = "<p>Imagem: $perfilx";
            $severdev  = "<p>$server";

        }

        else
            {
                $arquivodev = "" ;
                $arquivoidev = "";
                $perfilxdev = "";
                $severdev  = "";
            }

    echo "$arquivodev"; 
    echo "$arquivoidev"; 
    echo "$perfilxdev
    ";       
    echo "$serverdev";
 
    echo "</div><p>";
       
}

 // CONTROLE DE ARQUIVO INTERNO E EXTERNO -> VERIFICAR MENSAGENS NOVAS




// echo "<P>$info";
$externo = strlen($info);
$interno = strlen($infoi);

//echo "<p>Bytes externos: " . $externo;
// echo "<p>Bytes internos: " . $interno;
echo "<center><a href='page.php?page=download'>Baixar conversa</a></center>";


      



  
?>

 <form action="post.php" method="GET">
 
    
    Mensagem:
    <textarea name="menssage"></textarea>   <input type="submit" value="Enviar sinal" class="btn btn-large btn-success">