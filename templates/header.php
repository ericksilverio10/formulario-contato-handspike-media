<?php
    include_once('config/url.php');
    include_once('config/connection.php');
    include_once('config/process.php');
    include_once('https://handspikemedia.com/contato/config/process_contatos.php');

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
            <a class="nav-brand" href="<?=$BASE_URL?>home.php">
                <img src="<?=$BASE_URL?>img/logo.svg" alt="Handspike Media">
            </a>
            <div>
                <div class="navbar-nav">
                    <a href="<?=$BASE_URL?>home.php" id= "home-link" class="nav-link active"><i class="fas fa-house"></i>     Início</a>
                    <a href="<?=$BASE_URL?>relatorio_erick.php" id= "home-link" class="nav-link active"><i class="fas fa-eye"></i>   Erick</a>
                    <a href="<?=$BASE_URL?>relatorio_fellype.php" id= "home-link" class="nav-link active"><i class="fas fa-eye"></i>   Fellype</a>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-users-line"></i> Clientes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=Carrossel">Carrossel</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=CriançaTodoDia"">Criança Todo Dia</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=Design&Decoracao"">Design & Decoração</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=DiversaoNautica"">Diversão Náutica</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=GasLindaChama"">Gás Linda Chama</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=HandspikeMedia"">Handspike Media</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=EsplanadaHotel"">Hotel Esplanada</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=JFCred"">JF Cred</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=Lares"">Lares Materiais de Construção</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=MaisCelulares"">Mais Celulares</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=OticasCarol"">Óticas Carol</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=Sermed"">Sermed</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=SportTotal"">Sport Total</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=Top Team"">Top Team</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=Vale Da Serra"">Vale da Serra</a>
                            <a class="dropdown-item" href="<?=$BASE_URL?>cliente.php?cliente=ZRImoveis"">ZR Imóveis</a>
                        </div>
                    </li>
                    <form action="<?=$BASE_URL?>/search.php" id="search-form" class="form-inline my-lg-0" method="GET">
                        <input type="text" name="query" id="search" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn my-2 my-sm-0" type="submit">
                        <i class="fas fa-search" style="color:white"></i>
                        </button>
                    </form>
                    <a href="<?=$BASE_URL?>contatos.php" id= "home-link" class="nav-link active"><i class="fas fa-phone"></i>   Contatos</a>
                    <a href="<?=$BASE_URL?>?logout" id= "home-link" class="nav-link active"><i class="fas fa-right-from-bracket"></i>   Sair</a>
                </div>
            </div>
        </nav>
    </header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.js" integrity="sha512-0agUJrbt+sO/RcBuV4fyg3MGYU4ajwq2UJNEx6bX8LJW6/keJfuX+LVarFKfWSMx0m77ZyA0NtDAkHfFMcnPpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
</html>
    <style>
        #navbarDropdownMenuLink {
            color: white;
            font-size: 20px;
            margin-right: 10px;
        }
        #navbarDropdownMenuLink:hover{
            transition: 0.5s ease-in-out;
            letter-spacing: 2px;
        }
        #search{
            border-style: none;
            border-radius: 20px;
            padding-left: 20px;
            padding-right: 60px;
            font-weight: bold;
        }
        #search:focus{
        transition: .5s ease-in-out;
        padding-right: 80px;
}
        .navbar-nav{
            padding-left: 120px;
            text-align: center;
        }

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
        @keyframes animateBorder {
            from {border-top: 0px solid white;}
            42%{border-top: 1px solid white;}
            to {border-top: 0px solid white;}
        }
        #home-link:hover{
            animation: animateBorder 2s infinite;
        }}
    </style>