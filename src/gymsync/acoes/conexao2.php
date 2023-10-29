<?php
  function conectar(){ //function parameters, two variables.
		# Substitua abaixo os dados, de acordo com o banco criado
		$user = "u760260484_GymSyncAdmin"; 
		$password = "GymSync022023"; 
		$database = "u760260484_GymSync"; 

		# O hostname deve ser sempre localhost 
		$hostname = "89.117.7.154";

		$link = mysqli_connect($hostname, $user, $password, $database);
		if (!$link) {
			echo "Error: Unable to connect to MySQL." . PHP_EOL;
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			exit;
		}
		$link->set_charset("utf8");  //returns the second argument passed into the function
	 	return $link;
  }

?>
