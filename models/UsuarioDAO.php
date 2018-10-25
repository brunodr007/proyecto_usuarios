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
	public function GuardarUsuario($conn, $name, $age, $password){
		$sql= "UPDATE usuario_proyecto SET nombre,edad,clave";
		//hacer un update a la base de datos con los datos del usuario y retornar un 1 si se hizo el update o un 0 si no se hizo
		return 1;
	}
}

?>