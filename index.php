<?php

require 'models/UsuarioDAO.php';
require 'models/bd.php';

$usuario1 = new UsuarioDAO();

$usuarios=$usuario1->getUsuarios($conn);


mysqli_close($conn);



?>


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

	<nav class="navbar navbar-light bg-light">
  	<a class="navbar-brand" href="#">Navbar</a>
	</nav>



	<table class="table">
	  <thead>

	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">nombre</th>
	      <th scope="col">edad</th>
	      <th scope="col">clave</th>
	      <th scope="col">editar</th>
	      <th scope="col">eliminar</th>
	      <th scope="col">agreagar</th>
	    </tr>
	  </thead>
	  <tbody>
	    
	    <?php
	    	for($i=0;$i<count($usuarios);$i++){

	    			echo 
				    '<tr>
				      <th scope="row">'.$usuarios[$i][0].'</th>
				      <td>'.$usuarios[$i][1].'</td>
				      <td>30</td>
				      <td>3</td>
				      <td><button type="button" class="btn btn-primary"><a href="editar.php?nombre='.$usuarios[$i][1].'&edad='.$usuarios[$i][2].'&clave='.$usuarios[$i][3].'&id='.$usuarios[$i][0].'">editar</a></button></td>
				      <td><button type="button" class="btn btn-secondary"><a href="controladores/control_delete.php?nombre='.$usuarios[$i][1].'&edad='.$usuarios[$i][2].'&clave='.$usuarios[$i][3].'&id='.$usuarios[$i][0].'">eliminar</a></button></td>
				      <td><button type="button" class="btn btn-success"><a href="agregar.php">agregar</a></button></td>
				    </tr>';

		}
		?>
	    
	  	</tbody>
	</table>
	

</body>
</html>