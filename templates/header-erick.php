<?php
    include_once('config/url.php');
    include_once('config/connection.php');
    include_once('config/process.php');

    //limpa a mensagem
    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $BASE_URL ?>img/favicon.ico" type="image/x-icon">
    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <title>Início</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to right,#B30FC3 25%, #660974 100%);">
            <a class="nav-brand" href="<?=$BASE_URL?>erick.php">
                <img src="<?=$BASE_URL?>img/logo.svg" alt="Handspike Media">
            </a>
            <div>
                <div class="navbar-nav">
                    <a href="<?=$BASE_URL?>erick.php" id= "home-link" class="nav-link active"><i class="fas fa-house"></i>     Início</a>
                    <a href="<?=$BASE_URL?>create-erick.php" id= "home-link" class="nav-link active"><i class="fas fa-plus"></i>   Adicionar Material</a>
                    <a href="<?=$BASE_URL?>confirm-erick.php" id= "home-link" class="nav-link active"><i class="fas fa-rotate-left"></i>   Resetar Relatório</a>
                    <a href="<?=$BASE_URL?>erick.php" id= "home-link" class="nav-link active"><i class="fas fa-user"></i>   Erick</a>
                    <a href="<?=$BASE_URL?>?logout" id= "home-link" class="nav-link active"><i class="fas fa-right-from-bracket"></i>   Sair</a>
                </div>
            </div>
        </nav>
    </header>
<style>
#home-link{
            text-align: center;
            transition: 1s ease-in-out;
        }
        @keyframes animateBorder {
            from {border-top: 0px solid white;}
            42%{border-top: 1px solid white;}
            to {border-top: 0px solid white;}
        }
        #home-link:hover{
            animation: animateBorder 2s infinite;
            padding-left: 35px;
            padding-right: 35px;
        }
        .navbar-nav{
            padding-left: 160px;
            text-align: center;
        }
        @media (max-width: 1000px){
            .navbar-nav{
                padding-left: 0;
            }
            #search{
            width: 240px;
            border-style: none;
            border-radius: 20px;
            padding-left: 20px;
            padding-right: 5px;
            font-weight: bold;
        }
        #home-link{
            text-align: center;
            transition: 1s ease-in-out;
        }
        #home-link:hover{
            animation: animateBorder 2s infinite;
        }
        }
</style>