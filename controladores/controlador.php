<?php
require_once '/opt/lampp/htdocs/practicas/proyecto/models/bd.php';
require_once '/opt/lampp/htdocs/practicas/proyecto/models/UsuarioDAO.php';


$i = $_POST['id'];
$n = $_POST['name'];
$a = $_POST['age'];
$p = $_POST['password'];

$objeto1 = new UsuarioDAO();
$actualizacion_dato= $objeto1->GuardarUsuario($conn,$n,$a,$p,$i);
if($actualizacion_dato==1){
	echo 'informacion actualizada';
}else{
	echo 'informacion no actualizada';
}

?>