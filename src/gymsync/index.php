<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        echo "<script>window.location.href = 'dashboard.php'</script>";
    }
?>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GymSync</title>
        <link rel="stylesheet" href="assets/css/styleLogin.css" />
        <script type="text/javascript" src="script/jquery.js"></script>
        <script type="text/javascript" src="script/acesso.js"></script>
        <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <!-- <div id="formulario" class="container"> -->
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form id="formularioLogin" class="sign-in-form">
                        <h2 class="title">GymSync</h2>
                        <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" id="email" />
                        </div>
                        <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="senha" id="senha" />
                        </div>
                        <button class="btn solid" id="btnEntrar">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>