<?php
require_once('jasonCore.class.php');
Class JasonPost extends Post
{
                /*
                ################################# CUIDADO!!!!! ################################################
                
                EMBORA APARENTE QUE SEJA POSSÍVEL USAR UMA FUNÇÃO SÓ PARA PARA OS ENVIOS DE MENSAGEM, TENHA EM
                MENTE QUE ESSA CLASSE NÃO FOI 'PLANEJADA' SOMENTE PARA BANCO DE DADOS MYSQL, MAS ARQUIVO DE DADOS JSON TAMBÉM (AINDA NÃO IMPLEMENTADO EM 13/06/2017)
                ################################# CUIDADO!!!!! ################################################
                
                */
                public function send_Menssage($protocol, $serverOrigin, $serverDestiny, $target, $type, $nat, $autor, $menssage)
                {
                                if ($type == 'multitonPDO') {
                                                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                                                $sqlMenssage = addslashes($menssage) ;
                                                $crud->insert($autor, $sqlMenssage, $protocol, $target, $nat, 'feed', $serverDestiny);
                                }
                }
                public function update_inbox($protocol, $serverOrigin, $serverDestiny, $type, $autor, $menssage)
                {
                                if ($type == 'multitonPDO') {
                                                $crud  = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                                                $dados = $crud->getAlltabela('feed'); // para todos da tabela
                                                if ($controleSelectTotal = true) {
                                                                if ($controleSelectTotal != false) {
                                                                                echo '{"' . "dados" . '"' . ":[";
                                                                                foreach ($dados as $reg):
                                                                                                $id       = $reg->id;
                                                                                                $varchar1 = $reg->varchar1;
                                                                                                $varchar2 = $reg->varchar2;
                                                                                                retornaSelectTotal($id, $varchar1, $varchar2);
                                                                                endforeach;
                                                                                echo ' 
{
        "Id": "0",
        "Categoria": "00000",
        "Titulo": "000000"
      }


      ]}';
                                                                }
                                                }
                                }
                }
                /*  public function post_feed($protocol, $serverOrigin, $serverDestiny, $target, $type, $nat, $autor, $menssage)
                {
                if ($type == 'multitonPDO') {
                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                $crud->insert($autor, $menssage, $protocol, $target, $nat, 'feed', 'feed');
                }
                }
                public function post_comment($protocol, $serverOrigin, $serverDestiny, $target, $type, $nat, $autor, $menssage)
                {
                if ($type == 'multitonPDO') {
                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                $crud->insert($autor, $menssage, $protocol, $target, $nat, 'comment', 'comment_post');
                }
                }
                public function post_in_page($protocol, $serverOrigin, $serverDestiny, $target, $type, $nat, $autor, $menssage)
                {
                if ($type == 'multitonPDO') {
                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                $crud->insert($autor, $menssage, $protocol, $target, $nat, 'page', 'page');
                }
                }*/
}
?>