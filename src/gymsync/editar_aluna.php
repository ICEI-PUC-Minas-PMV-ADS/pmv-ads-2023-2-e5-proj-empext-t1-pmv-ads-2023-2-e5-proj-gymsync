<html>

<head>
    <style>
        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            padding: 8px;
            line-height: 200%;
            display: flex;
            justify-content: flex-start;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
    </style>
    <script type="text/javascript">
        function carregarDados(){
        console.log("teste");
        console.log(document.getElementById("txtid").value);
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        if (this.readyState == 4 && this.status == 200){
                console.log(xmlhttp.responseText);
                const aluna  = JSON.parse(xmlhttp.responseText);
                document.getElementById("nome").value = aluna.nome;
                document.getElementById("cpf").value = aluna.cpf;
                document.getElementById("dn").value = aluna.dn;
                document.getElementById("endereco").value = aluna.endereco;
                document.getElementById("email").value = aluna.email;
                document.getElementById("telefone").value = aluna.telefone;
                document.getElementById("remedios").value = aluna.remedios;
                document.getElementById("comorbidades").value = aluna.comorbidades;
                document.getElementById("detalhes").value = aluna.detalhes;
                document.getElementById("data_pagamento").value = aluna.data_pagamento;
                document.getElementById("vencimento_mensalidade").value = aluna.vencimento;
            }
    }
}
        xmlhttp.open("POST", "./acoes/consultarAluna.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/json");
        xmlhttp.send('{"id":'+document.getElementById("txtid").value+'}');
        
        //const aluna  = JSON.parse(xmlhttp.responseText);
        //document.getElementById("nome").value = aluna.nome;
        }
    </script>
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
    <?php require_once "assets/nav/header.php"; ?>

    <!--========== NAV ==========-->
    <?php require_once "assets/nav/nav.php"; ?>
    <div class="card">
        
            
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
             Matrícula: <input type="text" name="id" id="txtid">
            <button type="button" onclick="carregarDados()" >Buscar Aluna</button>
            <label for="fname">Nome:</label><input type="text" name="fname" id="nome"><br>
            <label for="cpf">CPF:</label> <input type="number" name="cpf" id="cpf"><br>
            <label for="dn">Data de Nascimento:</label><input type="date" name="dn" id="dn"><br>
            <label for="endereco">Endereço: <input type="text" name="endereco" id="endereco"><br>
                <label for="email">e-mail:</label><input type="text" name="email" id="email"><br>
                <label for="telefone">Telefone:</label><input type="number" name="telefone" id="telefone"><br>
                <label for="remedios">Remedios:</label><input type="text" name="remedios" id="remedios"><br>
                <label for="comorbidades">Comorbidades:</label><input type="text" name="comorbidades" id="comorbidades"><br>
                <label for="detalhes">Detalhes:</label><input type="text" name="detalhes" id="detalhes"><br>
                <label for="data_pagamento">Data de Pagamento:</label><input type="date" name="data_pagamento" id="data_pagamento"><br>
                <label for="vencimento_mensalidade">Vencimento da Mensalidade:</label><input type="date" name="vencimento_mensalidade" id="vencimento_mensalidade"><br>
                <input type="submit" value="Salvar Aluna">
        </form>
    </div>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include './acoes/conexao2.php';
        $link = conectar();
        // collect value of input field
        $id = $_POST['id'];
        $data_pagamento = $_POST['data_pagamento'];
        $nome = $_POST['fname'];
        $cpf = $_POST['cpf'];
        $dn = $_POST['dn'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $remedios = $_POST['remedios'];
        $comorbidades = $_POST['comorbidades'];
        $detalhes = $_POST['detalhes'];
        $vencimento_mensalidade = $_POST['vencimento_mensalidade'];

        if (empty($nome)) {
            echo "Name is empty";
        } else {
            //echo $nome;
            //echo $cpf;
            $sql = "UPDATE alunas SET data_pagamento = ?,nome = ?,cpf = ?,dn = ?,endereco = ?,email = ?,telefone = ?,remedios = ?,comorbidades = ?,detalhes = ?,vencimento_mensalidade = ? WHERE ID = ?;";
            $stmt = $link->prepare($sql);
            $stmt->bind_param('ssssssssssss', $data_pagamento, $nome, $cpf, $dn, $endereco, $email, $telefone, $remedios, $comorbidades, $detalhes, $vencimento_mensalidade,$id);
            if ($stmt->execute()) {
                echo "Aluna Atualizada com sucesso";
            } else {
                echo $stmt->error;
                echo "Falha na atualização da aluna";
            }
        }
    } else if (($_SERVER["REQUEST_METHOD"] == "GET")) {
        $row['fname'] = "Teste";
    }
    ?>

</body>

</html>