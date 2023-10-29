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
  Nome: <input type="text" name="fname">
  <input type="submit" value="Mostrar Alunas">
</form>

<?php
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include './acoes/conexao2.php';
   $link = conectar();
  // collect value of input field
  $nome = $_POST['fname'];
  $nome = '%'.$nome.'%';
  if (empty($nome)) {
    echo "Name is empty";
  } else {
    //echo $nome;
	//echo $cpf;
	$sql = "SELECT id,data_pagamento,nome,cpf,dn,endereco,email,telefone,remedios,comorbidades,detalhes,vencimento_mensalidade FROM alunas WHERE nome like ?";
	$stmt = $link->prepare($sql);  
	$stmt->bind_param('s',$nome);  
	if ($stmt->execute()) {
		$stmt->bind_result($id,$data_pagamento,$nome,$cpf,$dn,$endereco,$email,$telefone,$remedios,$comorbidades,$detalhes,$vencimento_mensalidade);
        echo '<table border="1">';
        echo '<tr>';
            echo '<th>Matrícula</th>';
            echo '<th>Nome</th>';
            echo '<th>CPF</th>';
            echo '<th>Telefone</th>';       
            echo '<th>Data de Nascimento</th>';
            echo '<th>e-mail</th>';
            echo '<th>Vencimento da Mensalidade</th>';
            echo '<th>Data de Pagamento</th>';
            echo '<th>Remédios</th>';
            echo '<th>Comorbidades</th>';
            echo '<th>Detalhes</th>';
            echo '<th>Endereço</th>';
        echo '</tr>';
        while ($stmt->fetch()){
            echo '<tr>';
                echo '<td>'.$id.'</td>';
                echo '<td>'.$nome.'</td>';
                echo '<td>'.$cpf.'</td>';
                echo '<td>'.$telefone.'</td>';
                echo '<td>'.$dn.'</td>';
                echo '<td>'.$email.'</td>';
                echo '<td>'.$vencimento_mensalidade.'</td>';
                echo '<td>'.$data_pagamento.'</td>';
                echo '<td>'.$remedios.'</td>';
                echo '<td>'.$comorbidades.'</td>';
                echo '<td>'.$detalhes.'</td>';
                echo '<td>'.$endereco.'</td>';
            echo '</tr>';
        }
        echo '</table>';
	} else{
		echo $stmt->error;
		echo "Falha na inserção do paciente";
	}
  }
}
?>

</body>
</html>