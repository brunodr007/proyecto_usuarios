<?php

require_once '/opt/lampp/htdocs/practicas/proyecto/models/bd.php';
require_once '/opt/lampp/htdocs/practicas/proyecto/models/UsuarioDAO.php';

$nom=$_GET["nombre"];
$ed=$_GET["edad"];
$cla=$_GET["clave"];
$id=$_GET["id"];


$objeto_de_borrado1 = new UsuarioDAO();
$borrar_dato = $objeto_de_borrado1->BorrarUsuario($conn,$id,$nom,$ed,$cla);
if($borrar_dato==1){
	echo 'informacion borrada';
}else{
	echo 'informacion no borrada';
}

?>