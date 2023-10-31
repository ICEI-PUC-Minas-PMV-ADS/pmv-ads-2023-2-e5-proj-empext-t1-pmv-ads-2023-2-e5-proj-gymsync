<?php
// including the database connection file
//include_once("config.php");
session_start();

if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    require("acoes/conexao.php");

    $adm  = $_SESSION["usuario"][1];
    $nome = $_SESSION["usuario"][0];
}else{
    echo "<script>window.location = 'index.php'</script>";
}


if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$nome=$_POST['nome'];
	$adm=$_POST['adm'];	
	
	// checking empty fields
	if(empty($email) || empty($senha) || empty($nome) || empty($adm)) {	
			
		if(empty($email)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($senha)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($nome)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($adm)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {	
		//updating the table
		$sql = "UPDATE usuarios SET email=:email, senha=:senha, nome=:nome , adm=:adm WHERE id=:id";
		$query = $conexao->prepare($sql);
				
		$query->bindparam(':id', $id);
		$query->bindparam(':email', $email);
		$query->bindparam(':senha', $senha);
		$query->bindparam(':nome', $nome);
		$query->bindparam(':adm', $adm);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
				
		//redirectig to the display page. In our case, it is index.php
		header("Location: 1cadastroLogin.php");
	}
}
?>
<?php
//getting id from url

$id = $_GET['id'];	
//selecting data associated with this particular id
$sql = "SELECT * FROM usuarios WHERE id=:id";
$query = $conexao->prepare($sql);
$query->execute(array(':id' => $id));


while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$email = $row['email'];
	$senha = $row['senha'];
	$nome = $row['nome'];
	$adm = $row['adm'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="1cadastroLogin.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="1editLogin.php">
		<table border="0">
			
			<tr>
                   <div class="form_grupo">
                        <span class="legenda">Tipo Acesso:</span>
                            <div class="radio-btn">
                                    <input type="radio" class="form_new_input"  name="adm" value=1 required="required">
                                    <label for="1" class="radio_label form_label"> <span class="radio_new_btn"></span> Administrador</label>
                            </div>
                            <div class="radio-btn">
								<input type="radio" class="form_new_input"  name="adm" value=null required="required">
								<label for="0" class="radio_label form_label"> <span class="radio_new_btn"></span> Usuario</label>
                        	</div>
                    </div>
                </tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>Senha</td>
				<td><input type="text" name="senha" value="<?php echo $senha;?>"></td>
			</tr>
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome" value="<?php echo $nome;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
