<?php

require_once '/opt/lampp/htdocs/practicas/proyecto/models/bd.php';
require_once '/opt/lampp/htdocs/practicas/proyecto/models/UsuarioDAO.php';

$i = $_GET['id'];
$n = $_GET['name'];
$a = $_GET['age'];
$p = $_GET['password'];

$objeto_de_borrado1 = new UsuarioDAO();
$borrar_dato = $objeto_de_borrado1->BorrarUsuario($conn,$i,$n,$a,$p);
if($borrar_dato==1){
	echo 'informacion borrada';
}else{
	echo 'informacion no borrada';
}

?>