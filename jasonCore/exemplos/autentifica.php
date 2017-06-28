 <?php
//error_reporting(0);

/*  
 * Require nos scripts necessários  
 */
require_once "installJason.php";/*  
 * Atribui uma instância da classe crud   
 * e passa uma conexão como parâmetro  
 */
$crud = crud::getInstance(Conexao::getInstance());
/*  
 * Variáveis contendo os valores para serem inseridos no banco de dados  
 */
    if (!isset($_SESSION['status'])) { // Verifica se a sessão já foi iniciada. Se a variável não estiver sido setada, inicia  a sessão.
       session_start();
    }
// Funções para reagir a autenficação
function auntentificado() // Função que permite criação de regra de negócio para acesso do microframework com autenficação
{
        echo "<p>acesso permitido";
        $_SESSION['status'] = "sessao_iniciada";
       
       }
function acessoNegado() // Permite criar algoritimo para negar a autenficação.
{
        echo "<p>acesso negado";
}
$recebeLogin = "root";
$recebeSenha = "1234";
// Selecionando dados do banco de dados 
$dados       = $crud->selecionaId('1', 'membros'); // Exibe resultado da tabela membros
if ($controleSelect != false) {
        foreach ($dados as $reg):
                $id       = $reg->id;
                $varchar1 = $reg->login;
                $varchar2 = $reg->senha;
                $varchar3 = $reg->permissao;
                echo $varchar1 . "<br>";
                echo $varchar2 . "<br>";;
                echo $varchar3 . "<br>";;
        endforeach;
        // regra de negócios para autenficação
        if ($recebeLogin == $varchar1 and $recebeSenha == $varchar2) {
                auntentificado();
        } else {
                acessoNegado();
        }
}
?>


   