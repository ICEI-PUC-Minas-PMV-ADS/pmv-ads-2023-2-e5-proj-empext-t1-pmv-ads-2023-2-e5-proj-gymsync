<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["data"])) {
    // Recupere a data de pesquisa do formulário
    $dataPesquisa = $_POST["data"];

    // Execute a consulta SQL para buscar as atividades com base na data
    require("conexao.php"); // Certifique-se de que sua conexão com o banco de dados esteja incluída aqui

    $query = $conexao->prepare("SELECT * FROM exercicios WHERE dia = :dataPesquisa");
    $query->bindParam(":dataPesquisa", $dataPesquisa);
    $query->execute();
    $atividades = $query->fetchAll(PDO::FETCH_ASSOC);

    // Exiba as atividades encontradas como HTML
    if (count($atividades) > 0) {
        foreach ($atividades as $atividade) {
            echo "<div class='activity'>";
            echo "Nome do Treino: " . $atividade["treino"];
            echo "Dia: " . $atividade["dia"];
            // Adicione aqui mais informações relevantes que você deseja exibir
            echo "</div>";
        }
    } else {
        echo "Nenhuma atividade encontrada para a data informada.";
    }
} else {
    echo "Erro na solicitação de pesquisa.";
}
?>
