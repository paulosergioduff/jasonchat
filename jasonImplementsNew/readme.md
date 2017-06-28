# Jason Kernel 1.0

 Jason Kernel é um núcleo de aplicação para criação de microframeworks, protótipos, redes sociais e APIs. Propõe solucionar os seguintes problemas de mercado :

  - Principais rotinas envolvendo banco de dados (CRUD).
  - Atender exigências de compatibilidade com versões mais recentes do PHP (até a publicação deste documento, o PHP7).
  - Facilidade em menutenção de núcleo das aplicações.
  - Adaptação na maior variedade de projetos possíveis, com tabela de campos mais abstratos.
  - Facilidade em migração tanto de métodos quanto diferentes banco de dados do mercado.
  - Criação de rápidos protótipos
  - Inserção de funções de redes sociais em sites e aplicativos.

# Vantagens e recursos:

  - Inspirado no padrão MVC e REST, facilitando para a comunidade a compreeção do código.
  - Sem excesso de implementação, o que facilita a customização. 
  - Uso de tabela genérica para adaptação de projetos e rápidos testes.
  - Retorno em json de consultas com limitação de token.
  - Proteção contra SQL Injection.
  - Proteção contra ataque XSS.
  - Proteção contra ataque CSRF.
  - Uso de leitura em json em jquery (pasta jquery-json).
  - Código aberto para futuras correções
  - Uso de URL amigáveis pré-configuradas no arquivo .htaccess.zip (arquivo oculto)

### Como utilizar:
O arquivo /config/config.php configura o acesso ao banco de dados. O arquivo /model/jasonBD.sql contém a  tabela para utilização do banco de dados. Após o banco de dados estar configurado, vá em /exemplos/logar.php para ativar o token. Assim outros arquivos de exemplos, e testes de consulta selectPorId.php e selectTabela.php será possível realizar os testes. Para autentificação de sessão, os arquivos autentifica.php; logar.php; logout.php e restrito.php na pasta exemplo, pode ajudar a construir o seu sistema.  Use o arquivo playground.php na pasta raiz para testar scripts, e o arquivo matriz.html na pasta view para criar layouts. Após escolher os recursos para criar o seu sistema, ignore as pastas exemplos, util e jquery-json (apague-as). Nomeie os campos do arquivo abstrato_membros_menu.sql e trabalhe nessa mudança no arquivo /model/crud.class.php (não necessário para criação de protótipos).  

### Códigos de exemplo
```php
<?php 
require_once "../installJason.php";

$crud = crud::getInstance(Conexao::getInstance()); // Use esse código para multistância de DB: $crud = crud::getInstance(Conexao::getInstanceMultiton('seuBanco'));

$crud->suaFuncaoDaQuery($campo1, $campo2, $campo3);
// Seja feliz!
?>
```
### INSERT:
```PHP
$crud->insert($login, $email, $senha, $valor1, $valor2, $tabela, $dbTabela);
```

### UPDATE:
```PHP
$crud->update($login, $email, $senha, $valor1, $valor2, $id, $dbTabela);
```

### DELETE:
```PHP
$crud->delete($id, $dbTabela);
```
### SELECT TOTAL:
```PHP
$dados = $crud->getAlltabela($dbTabela); // para todos da tabela
  if ($controleSelectTotal = true) {
     if ($controleSelectTotal != false) {
     echo '{"'."dados".'"'.":[";
    foreach ($dados as $reg): 
       $id = $reg->id ;
       $varchar1 = $reg->varchar1;
       $$varchar2 = $reg->varchar2;
      retornaSelectTotal($id, $varchar1, $$varchar2);
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
```
### SELECT DE UM ID:
```PHP
$dados = $crud->selecionaId('numero_id', $dbTabela); 
  if ($controleSelect != false) {
  echo '{"'."dados".'"'.":[";
    foreach ($dados as $reg): 
       $id = $reg->id ;
       $varchar1 = $reg->varchar1;
       $$varchar2 = $reg->varchar2;
      retornaSelecaoPorId('numero_id', $varchar1, $$varchar2);
      endforeach; 
        echo ' 
{
        "Id": "0",
        "Categoria": "00000",
        "Titulo": "000000"
      }


      ]}';
  }
```

### SELECT DE UM CAMPO:
```PHP
$campo = 'termoDeBusca'; 
$coluna = 'campoSelecionado';

$dados = $crud->selecionaCampo($dbTabela);
if ($controleSelect != false) {
                foreach ($dados as $reg):
                                
                                $filtro = $reg->$coluna;
                                  if ($filtro == $campo) {
                                    echo $id        = $reg->id . "<br>";
                                echo $varchar1  = $reg->varchar1 . "<br>";
                                echo $varchar2 = $reg->varchar2 . "<br>";
                                  }
                                
                endforeach;
               ;
}
```

### EXEMPLO DE RECURSO DE REDES SOCIAIS (POSTAGEM):
```PHP

$postagem = new JasonPost();

$protocolo = 'https';
$servidorDeOrigem = 'jasonBD';
$servidorDeDestino = 'comment_post';
$tipo = 'multitonPDO';
$autor = 'Paulo Sérgio Duff';
$menssagem = 'Segundo post da minha fanpage';



$natureza = "NOVO DADO 2";
$destinatario = '02';

$postagem->send_Menssage($protocolo, $servidorDeOrigem, $servidorDeDestino , $destinatario, $tipo, $natureza, $autor, $menssagem);

```
### TABELA A SER USADA:
```SQL
CREATE TABLE IF NOT EXISTS `tabela` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `varchar1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar5` varchar(255) CHARACTER SET utf8 NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `data1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data4` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data5` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bit1` int(1) NOT NULL,
  `bit2` int(1) NOT NULL,
  `bit3` int(1) NOT NULL,
  `bit4` int(1) NOT NULL,
  `bit5` int(1) NOT NULL,
  `texto1` longtext CHARACTER SET utf8 NOT NULL,
  `texto2` longtext CHARACTER SET utf8 NOT NULL,
  `texto3` longtext CHARACTER SET utf8 NOT NULL,
  `texto4` longtext CHARACTER SET utf8 NOT NULL,
  `texto5` longtext CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tabela` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;
```

# ATENÇÃO!!

A simplicidade desta aplicação não isenta o desenvolvedor de se preocupar com a segurança dos dados. Sempre filtre os dados de entrada. Trabalhe no arquivo /control/validaEntradas.php
Tome cuidado também com as regras de negócios escolhidas em /control/controleCentral.php.