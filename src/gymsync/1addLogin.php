<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
session_start();

if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    require("acoes/conexao.php");

    $adm  = $_SESSION["usuario"][1];
    $nome = $_SESSION["usuario"][0];
}else{
    echo "<script>window.location = 'index.php'</script>";
}


if(isset($_POST['Submit'])) {	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	$adm = $_POST['adm'];
		
	// checking empty fields
	if(empty($email) || empty($senha) || empty($nome) || empty($adm)) {
				
		if(empty($email)) {
			echo "<font color='red'>O campo Email está vazio.</font><br/>";
		}
		
		if(empty($senha)) {
			echo "<font color='red'>O campo Senha está vazio.</font><br/>";
		}
		
		if(empty($nome)) {
			echo "<font color='red'>O campo Nome está vazio.</font><br/>";
		}

		if(empty($adm)) {
			echo "<font color='red'>O campo Tipo de Acesso está vazio.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database		
		$sql = "INSERT INTO usuarios(email, senha, nome , adm) VALUES(:email, :senha, :nome, :adm)";
		$query = $conexao->prepare($sql);
				
		$query->bindparam(':email', $email);
		$query->bindparam(':senha', $senha);
		$query->bindparam(':nome', $nome);
		$query->bindparam(':adm', $adm);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='1cadastroLogin.php'>View Result</a>";
	}
}
?>
</body>
</html>
