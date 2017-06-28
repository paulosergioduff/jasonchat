<?php 

include "core.php";
include "bootstrap.html";
include "navbar.html";

?>

<body>


<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Live JSON</a><img src="img/jasonmask31x31.png">
          <div class="nav-collapse collapse">
            <ul class="nav">
             
            </ul></div><!--/.nav-collapse -->
        </div>
      </div>
    </div><br>
    <hr>

</hr>

 
 
        
      </div>
      <center>
    <form method="post" enctype="multipart/form-data" action="recebeUpload.php">
       Selecione uma imagem do computador: <input name="arquivo" type="file" value="Escolher imagem" />
	   <br />
       <input type="submit" value="Enviar foto" class="btn btn-large btn-primary" />
    </form>
</body>
</html>