<?php
require '/practicas/proyecto/models/bd.php';


$n = $_POST['name'];
$a = $_POST['age'];
$p = $_POST['password'];

$objeto1 = new UsuarioDAO();
$actualizacion_dato= $objeto1->GuardarUsuario($conn,$n,$a,$p);
if($actualizacion_dato==1){
	echo 'informacion actualizada';
}else{
	echo 'informacion no actualizada';
}

?>