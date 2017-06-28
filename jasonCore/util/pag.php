
<body bgcolor="yellow">
<?php 

$pagina = $_GET['pagina'];

if (file_exists("include/$pagina.php")) {
    include "include/$pagina.php";
} else {
    echo "A página que você procura não existe";
}

?>