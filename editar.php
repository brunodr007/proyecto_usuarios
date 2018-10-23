<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/boostrap.css">


  <link rel="stylesheet" href="css/style.css">

  <title>Resume</title>
</head>
<body>

	<?php
		$nom=$_GET["nombre"];
		$ed=$_GET["edad"];
		$cla=$_GET["clave"];
	?>

	<nav class="navbar navbar-light bg-light">
  	<a class="navbar-brand" href="#">Editar</a>
	</nav>

	<div class="container">
	<form>
		<div class="form-group">
    		<label for="exampleInputEmail1">nombre</label>
		    <input type="text" class="form-control" <?php echo ('value="'.$_GET["nombre"].'"') ?> >
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  	</div>

	 	<div class="form-group">
			    <label for="exampleInputPassword1">edad</label>
			    <input type="text" class="form-control" <?php echo ('value="'.$ed.'"')?> placeholder="Edad">
	 	</div>

	 	<div class="form-group">
			    <label for="exampleInputPassword1">clave</label>
			    <input type="password" class="form-control" <?php echo ('value="'.$cla.'"')?> placeholder="clave">
	 	</div>


	  	<div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  	</div>

	  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

</body>
</html>