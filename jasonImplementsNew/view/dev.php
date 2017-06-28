<p>
<div style="margin:15px 0 0 0;padding:0;" class="spaceBeforeCP">Olá mundo</div>
<p>

<?php 
// PARA ENCRIPTAR
$palavra = "palavra, valor ou texto a ser encriptado.";
echo crypt($palavra);
 
// RESULTADO: $1$bR5.IY4.$krFUZ01yg2uOVZ3SYt4Tx/
 
// NO MÉTODO CRYPT EXISTE A POSSIBILIDADE DE TORNAR POSSIVEL OU NÃO O
// O RETORNO PARA O CÓDIGO ORIGINAL. ESSA POSSIBILIDADE SE FIXA NO
// FATO DE QUE PODEMOS CONFIGURAR UM “ARGUMENTO” PARA SER A CHAVE DA
// ENCRIPTAÇÃO, NÃO COLOCANDO O MESMO TEREMOS UMA CHAVE ALEATÓRIA O
// QUE LEVA A TERMOS UMA ENCRIPTAÇÃO SEM POSSIBILIDADE DE RETORNO.$ipAddress = gethostbyname($_SERVER['SERVER_NAME']);
echo "Usando crypt(): $ipAddress";

echo "<p>";
$ip = getenv("REMOTE_ADDR");
$ip2 = $_SERVER["REMOTE_ADDR"];
echo "<p>Mostrando IP 1" .$ip;
echo "<p>Mostrando IP 2" .$ip2;
echo "<p>hostname: $hostname<br>";
echo "<p>hostnameX: $hostnamex<br>";

echo gethostname(); // may output e.g,: sandie
echo "<p>";
// Or, an option that also works before PHP 5.3
echo php_uname('n'); // may output e.g,: sandie
echo "<p>";

$palavras = array("b" =>"Tutorial", "d"=>"Dicas", "a"=>"PHP", "c"=>"Tutorial de PHP");

print_r( $palavras ); // Array antes da funação ( [b] => Tutorial [d] => Dicas [a] => PHP [c][/c] => Tutorial de PHP )

asort( $palavras ); // Ordenando um array pela chave

print_r( $palavras ); // Array depois da função ( [d] => Dicas [a] => PHP [b] => Tutorial [c][/c] => Tutorial de PHP )
 


echo "<p>";
$filenamesize = "data/" . $protocolo;
echo $filenamesize . ': ' . filesize($filenamesize) . ' bytes';
echo "<p>";

/// criaçao de arquivo

?>
<hr>
<div style ="display:none">


<?php echo	$hostnameid; ?>

 <!-- 
 
 
  <script>
jQuery().ready(function(){
    setInterval("getResult()",7000);
});
function getResult(){   
    jQuery.post("alarme.php",function( data ) {
        jQuery("#msgs").html(data);
    });
}
</script>
<div id="msgs"> 
</div>
 
 -->
  </div>

 