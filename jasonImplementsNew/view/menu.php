<div class="container-narrow" >

      <div class="masthead">
        <ul class="nav nav-pills pull-left">
          <li class="active"><a href="index.php">Início</a></li>
          <li><a href="home.php">Mensagens</a></li>
          <li><a href="cadastro.php">Configurar</a></li>          
          <?php

          if ($devmod >= $on)
          {

echo '<li><a href="page.php?page=dev">Console</a></li>';
          }          
          ?>
          </ul><br>
       <!-- <h3 class="muted">O que tem a oferecer ao mundo?</h3> -->
        
        
      </div>