 <?php

/*  
 * Require nos scripts necessários  
 */
require_once "installJason.php";/*  
 * Atribui uma instância da classe crud   
 * e passa uma conexão como parâmetro  
 */
$crud  = crud::getInstance(Conexao::getInstance());
/*  
 * Variáveis contendo os valores para serem inseridos no banco de dados  
 */
$idUsado = '10';
$dados = $crud->selecionaId($idUsado, 'tabela');

if ($controleSelect != false) {
        //echo '{"'."dados".'"'.":[";
        foreach ($dados as $reg):
                $id       = $reg->id;
                $varchar1 = $reg->varchar1;
                $varchar2 = $reg->varchar2;
                $template = $varchar1 . "html";
                if (file_exists("../include/$varchar1.html")) { // Essas includes facilitam a criação de futuros CMS com templates.
                        include "../include/$varchar1.html";
                }                        
               
        //retornaSelecaoPorId('10', $varchar1, $$varchar2);
        endforeach;
       
}

?>


   