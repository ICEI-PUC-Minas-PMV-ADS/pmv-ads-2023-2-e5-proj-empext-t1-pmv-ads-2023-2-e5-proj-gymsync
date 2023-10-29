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

    <title>GymSync</title>
</head>
<body>
    <!--========== HEADER ==========-->
    <?php require_once "assets/nav/header.php";?>

    <!--========== NAV ==========-->
    <?php require_once "assets/nav/nav.php";?>

    <!--========== CONTENTS ==========-->
    <main>
        <section>
            <div class="container">
                <h1>Atividades</h1>
                <form id="searchForm">
                    <input type="text" class="search-input" id="search" placeholder="Digite uma data...">
                    <button class="search-button" type="submit">Pesquisar</button>
                </form>
                <div class="activity-list" id="activityList">
                    <!-- Atividades serão exibidas aqui -->
                </div>
                <button class="add-button" onclick="openAddActivityForm()">Cadastrar Atividade</button>
            </div>

            <!-- Modal de cadastro de atividade (a ser implementado) -->
            <div id="addActivityModal" style="display: none;">
                <!-- Conteúdo do formulário de cadastro de atividade -->
            </div>
        </section>
    </main>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
    <script>
        // Função para pesquisar atividades
        function searchActivities()
        {
            // Recupere a data digitada no campo de pesquisa
            const searchDate = document.getElementById("search").value;

            // Crie uma solicitação AJAX para buscar atividades com base na data
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "buscar_atividades.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function()
            {
                if (xhr.readyState === 4 && xhr.status === 200)
                {
                    // Atualize o conteúdo da div "activityList" com as atividades encontradas
                    const activityList = document.getElementById("activityList");
                    activityList.innerHTML = xhr.responseText;
                }
            };

            // Envie a data de pesquisa para o servidor
            xhr.send("data=" + searchDate);

            // Impedir que o formulário seja enviado
            return false;
        }

        // Função para abrir o modal de cadastro de atividade (a ser implementado)
        function openAddActivityForm()
        {
            // Exiba o modal de cadastro de atividade
            // Exemplo:
            // const addActivityModal = document.getElementById("addActivityModal");
            // addActivityModal.style.display = "block";
        }

        // Lidar com o envio do formulário
        const searchForm = document.getElementById("searchForm");
        searchForm.onsubmit = function(e)
        {
            e.preventDefault();
            searchActivities();
        };
    </script>
</body>
</html>
