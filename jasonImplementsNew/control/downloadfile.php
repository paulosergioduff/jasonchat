<?php
include "core.php";

	/*
	 * Dica: Sempre mantenha os arquivos de download em uma mesma pasta, separada dos arquivos do site.
	 * Neste script usaremos a pasta download para esta função.
	 */
    //    $string = $dia$mes$ano . ".json";
	$arquivo = '.json'; // Nome do Arquivo
	$local = 'data/'; // Pasta que contém os arquivos para download
	$local_arquivio = $local.$dia.$mes.$ano.$arquivo; // Concatena o diretório com o nome do arquivo
	
	/*
	 * Por segurança, o script verifica se o usuário esta tentato sair da pasta especificada para 
	 * os arquivos de download (stripos($arquivo, './') !== false || stripos($arquivo, '../') !== false),
	 * isso irá bloquear a tentativa de forçar download de arquivos não permitidos.
	 * Na mesma função verificamos se o arquivo existe (!file_exists($arquivo)).
	 */
    if(stripos($arquivo, './') !== false || stripos($arquivo, '../') !== false || !file_exists($local_arquivio))
    {
    	echo 'O comando não pode ser executado.';
    }
    else
    {
	    header('Cache-control: private');
	    header('Content-Type: application/octet-stream');
	    header('Content-Length: '.filesize($local_arquivio));
	    header('Content-Disposition: filename='.$arquivo);
	    header("Content-Disposition: attachment; filename=".basename($local_arquivio));
	    
	    // Envia o arquivo Download
		readfile($local_arquivio);
    }
    
    // créditos : http://www.mauricioprogramador.com.br/posts/como-forcar-download-com-seguranca-no-php
?>