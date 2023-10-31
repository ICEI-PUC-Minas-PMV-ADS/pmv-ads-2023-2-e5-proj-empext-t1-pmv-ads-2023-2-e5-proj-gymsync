<?php
//including the database connection file
//include("config.php");

session_start();

if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    require("acoes/conexao.php");

    $adm  = $_SESSION["usuario"][1];
    $nome = $_SESSION["usuario"][0];
}else{
    echo "<script>window.location = '1cadastroLogin.php'</script>";
}

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$sql = "DELETE FROM usuarios WHERE id=:id";
$query = $conexao->prepare($sql);
$query->execute(array(':id' => $id));

//redirecting to the display page (index.php in our case)
header("Location:1cadastroLogin.php");
?>
