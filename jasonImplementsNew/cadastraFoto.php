<?php 

//require_once('installJason.php');



?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Home</title>
</head>
<body>
<center>
<form method='post' enctype='multipart/form-data'><br>
		<input type='file' name='foto' class="btn btn-info"><p><p><p>	<input type='submit' name='submit' class="btn btn-success">
	</form>
	<?php			
		include "class/Upload.class.php";
					
			if ((isset($_POST["submit"])) && (! empty($_FILES['foto']))){
				$upload = new Upload($_FILES['foto'], 96, 96, "fotos/");
					echo $upload->salvar();
			}
		?>

		</center>

</body>
</html>