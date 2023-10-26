<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("acoes/conexao.php");

        $adm  = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];
    }else{
        echo "<script>window.location = 'index.php'</script>";
    }
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
                        <div id="tabelaUsuarios">
                            <span class="title">Lista de usuários</span>

                            <table>
                                <thead>
                                    <tr>
                                        <td>Email</td>
                                        <td>Senha</td>
                                        <td>Nome</td>
                                        <td>ADM</td>
                                        <td>ID</td>
                                        <td>Excluir</td>
                                    </tr>                
                                </thead>
                                <tbody>
                                    <?php
                                        $query = $conexao->prepare("SELECT * FROM usuarios");
                                        $query->execute();
                                
                                        $users = $query->fetchAll(PDO::FETCH_ASSOC);

                                        for($i = 0; $i < sizeof($users); $i++):
                                            $usuarioAtual = $users[$i];
                                    ?>
                                    <tr>
                                        <td><?php echo $usuarioAtual["email"]; ?></td>
                                        <td><?php echo $usuarioAtual["senha"]; ?></td>
                                        <td><?php echo $usuarioAtual["nome"]; ?></td>
                                        <td><?php echo $usuarioAtual["adm"]; ?></td>
                                        <td><?php echo $usuarioAtual["id"]; ?></td>
                                        <td><button>Excluir</button></td>
                                    </tr>
                                    <?php endfor; ?>
                                </tbody>            
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        </main>
        <script src="assets/js/main.js"></script>
    </body>
</html>