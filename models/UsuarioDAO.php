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
}

?>