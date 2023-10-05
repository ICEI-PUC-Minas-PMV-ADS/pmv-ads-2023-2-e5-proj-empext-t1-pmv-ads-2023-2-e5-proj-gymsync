<?php  
        $server = "89.117.7.154";
        $usuario = "u760260484_GymSyncAdmin";
        $senha = "GymSync022023";
        $banco = "u760260484_GymSync";

        try{
            $conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $erro){
            //echo "Ocorreu um erro de conexao: {$erro->getMessage()}";
            $conexao = null;
        }
    ?>