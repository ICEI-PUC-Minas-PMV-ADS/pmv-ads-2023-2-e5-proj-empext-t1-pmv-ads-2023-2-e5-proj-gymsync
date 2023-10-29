<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>GymSync</title>
</head>
<body>
<!--========== HEADER ==========-->
<?php require_once "assets/nav/header.php";?>

<!--========== NAV ==========-->
<?php require_once "assets/nav/nav.php";?>

<!--========== CONTENTS ==========-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

  <input type="submit" value="Mostrar Aniversariantes">
</form>

<?php
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include './acoes/conexao2.php';
   $link = conectar();
  // collect value of input field

	$sql = "SELECT nome,DATE_FORMAT(dn,'%d-%m-%Y'),dn as dn2,endereco,email,telefone FROM alunas WHERE DAYOFMONTH(dn) = DAYOFMONTH(CURDATE()) AND MONTH(dn) = MONTH(CURDATE());";
	$stmt = $link->prepare($sql);  
	if ($stmt->execute()) {
		$stmt->bind_result($nome,$dn,$dn2,$endereco,$email,$telefone);
        echo 'Aniversariantes do Dia!';
        echo '<table border="1">';
        echo '<tr>';
            echo '<th>Nome</th>';
            echo '<th>Telefone</th>';       
            echo '<th>Data de Nascimento</th>';
            echo '<th>Idade</th>';
            echo '<th>e-mail</th>';
            echo '<th>Endereço</th>';
        echo '</tr>';
        while ($stmt->fetch()){
            $dn_aux = new DateTime($dn2);
            $agora = new DateTime();
            $idade = $agora->diff($dn_aux);
            echo '<tr>';
                echo '<td>'.$nome.'</td>';
                echo '<td>'.$telefone.'</td>';
                echo '<td>'.$dn.'</td>';
                echo '<td>'.$idade->y.'</td>';
                echo '<td>'.$email.'</td>';
                echo '<td>'.$endereco.'</td>';
            echo '</tr>';
        }
        echo '</table>';
	} else{
		echo $stmt->error;
		echo "Falha na inserção do paciente";
	}
    echo '<br><br><br>';
    //Anivesariantes do mês
    $sql = "SELECT nome,DATE_FORMAT(dn,'%d/%m/%Y'),dn as dn2,endereco,email,telefone FROM alunas WHERE  MONTH(dn) = MONTH(CURDATE());";
	$stmt = $link->prepare($sql);  
	if ($stmt->execute()) {
		$stmt->bind_result($nome,$dn,$dn2,$endereco,$email,$telefone);
        echo 'Aniversariantes do Mês!';
        echo '<table border="1">';
        echo '<tr>';
            echo '<th>Nome</th>';
            echo '<th>Telefone</th>';       
            echo '<th>Data de Nascimento</th>';
            echo '<th>Idade</th>';
            echo '<th>e-mail</th>';
            echo '<th>Endereço</th>';
        echo '</tr>';
        while ($stmt->fetch()){
            $dn_aux = new DateTime($dn2);
            $agora = new DateTime();
            $idade = $agora->diff($dn_aux);
			
            echo '<tr>';
                echo '<td>'.$nome.'</td>';
                echo '<td>'.$telefone.'</td>';
                echo '<td>'.$dn.'</td>';
                echo '<td>'.$idade->y.'</td>';
                echo '<td>'.$email.'</td>';
                echo '<td>'.$endereco.'</td>';
            echo '</tr>';
        }
        echo '</table>';
	} else{
		echo $stmt->error;
		echo "Falha na inserção do paciente";
	}
  }

?>

</body>
</html>