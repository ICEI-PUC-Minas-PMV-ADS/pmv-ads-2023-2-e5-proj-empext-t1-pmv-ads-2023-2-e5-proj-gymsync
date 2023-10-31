<?php
session_start();

if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    require("acoes/conexao.php");

    $adm  = $_SESSION["usuario"][1];
    $nome = $_SESSION["usuario"][0];
}else{
    echo "<script>window.location = 'index.php'</script>";
}
//including the database connection file
//include_once("acoes/conexao.php");

//fetching data in descending order (lastest entry first)
$query = $conexao->query("SELECT * FROM usuarios ORDER BY id DESC");
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        

        <title>Responsive sidebar submenus</title>
    </head>
    <body>
         <!--========== HEADER ==========-->
         <?php require_once "assets/nav/header.php";?>

        <!--========== NAV ==========-->
        <?php require_once "assets/nav/nav.php";?>

        <!--========== CONTENTS ==========-->
        <main>
            
            <section>
                <div id="content">
                    <?php if($adm): ?>
                        <form action="1addLogin.php" method="post" name="form1">
                            <table width="25%" border="0">
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
                                    <td><input type="text" name="email"></td>
                                </tr>
                                <tr> 
                                    <td>Senha</td>
                                    <td><input type="text" name="senha"></td>
                                </tr>
                                <tr> 
                                    <td>Nome</td>
                                    <td><input type="text" name="nome"></td>
                                </tr>
                                
                                <tr> 
                                    <td></td>
                                    <td><input type="submit" name="Submit" value="Add"></td>
                                </tr>
                            </table>
                        </form>
                                <table class="table table-striped" width='80%' border=0>
                                        <tr bgcolor='#CCCCCC'>
                                            <td>Email</td>
                                            <td>Senha</td>
                                            <td>Nome</td>
                                            <td>ADM</td>
                                        </tr>
                                        <?php 	
                                        while($row = $query->fetch(PDO::FETCH_ASSOC)) { 		
                                            echo "<tr>";
                                            echo "<td>".$row['email']."</td>";
                                            echo "<td>".$row['senha']."</td>";
                                            echo "<td>".$row['nome']."</td>";
                                            echo "<td>".$row['adm']."</td>";		
                                            echo "<td><a href=\"1editLogin.php?id=$row[id]\">Edit</a> | <a href=\"1deleteLogin.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
                                        }
                                        ?>
                                </table>
                    <?php endif; ?>
                </div>
            </section>
        </main>
        <script src="assets/js/main.js"></script>
    </body>
</html>