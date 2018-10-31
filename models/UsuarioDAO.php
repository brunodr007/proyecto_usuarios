<?php


class UsuarioDAO{

	public function getUsuarios($conn){
		$sql= "SELECT * FROM usuario_proyecto";
		$resultado=[];
		if ($result=mysqli_query($conn,$sql))
  		{
  			while ($row=mysqli_fetch_row($result))
		    {
		    	//printf ("%s (%s)\n",$row[0],$row[1]);
		    	array_push($resultado, $row);
		    }
  		  	return $resultado;
		}
	}
	public function GuardarUsuario($conn, $n, $a, $p, $i){
		$sql="UPDATE usuario_proyecto SET nombre='$n',edad='$a',clave='$p' WHERE id='$i'";
		
		if ($result=mysqli_query($conn,$sql))
  		{
  		  	return 1;
		}
		//hacer un update a la base de datos con los datos del usuario y retornar un 1 si se hizo el update o un 0 si no se hizo
	}

	public function BorrarUsuario($conn, $n, $a, $p, $i){
		$sql="ALTER TABLE usuario_proyecto DROP nombre='$n',edad='$a',clave='$p' WHERE id='$i'";
		if($result=mysqli_query($conn,$sql)){
			return 1;
		}
	}
}

?>