<?php
    include_once('connection.php');
    include_once('url.php');
    date_default_timezone_set('America/Sao_Paulo');
    $dataAtual = date('d-m-Y H:i');

    if(!empty($_POST)){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $website = $_POST['website'];
        $como_conheceu = $_POST['como_conheceu'];
        $query = "INSERT INTO `contatos` (data_horario, nome, email, telefone, website, como_conheceu) VALUES(:data_horario, :nome, :email, :telefone, :website, :como_conheceu);";
        $stmt = $conn -> prepare($query);
        $stmt->bindParam(':data_horario',$dataAtual);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':telefone',$telefone);
        $stmt->bindParam(':website',$website);
        $stmt->bindParam(':como_conheceu',$como_conheceu);
        $stmt->execute();

        header('Location: https://handspikemedia.com/obrigado');
    }
    $query = "SELECT * FROM `contatos` ORDER BY id DESC";
    $stmt = $conn -> prepare($query);
    $stmt->execute();
    $contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);
