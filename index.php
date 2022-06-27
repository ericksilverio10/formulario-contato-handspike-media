<?php
    include_once('config/url.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


    <title>Entre em contato - Handspike Media</title>
</head>
<body>
    <div id="fade" class="hide">
        <div id="loader">
            <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
    <div class="form-container">
        <a  class="logo-container" href="https://handspikemedia.com/">
        <img class="logo-link" src="assets/Logo-Handspike2.png" alt="Logo Handspike Media">
        </a>
        <h1 class="title">Entre em contato</h1>
        <p>Receba uma análise grátis da nossa equipe.</p>
        <form action="<?=$BASE_URL?>/config/process_contatos.php" method="POST">
            <div class="row g-2">
            <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" placeholder="Seu nome" name="nome" required>
                        <label for="name"><i class="fas fa-user"></i> Nome</label>
                    </div>
                 </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" id="email" placeholder="name@example.com" name="email" required>
                    <label for="email"><i class="fas fa-building" style="margin-right: 5px"></i> Nome da sua empresa</label>
                </div>
            </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control"name="telefone" id="phone" placeholder="name@example.com" required>
                        <label for="phone"><i class="fas fa-phone"></i> Telefone</label>
                    </div>
                 </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" id="insta" placeholder="name@example.com" name="website">
                    <label for="insta"><i class="fa-brands fa-instagram" style="font-size: 20px; margin-right: 5px" ></i> Seu Instagram (se possuir)</label>
                </div>
            </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectGrid" name="como_conheceu">
                        <option selected value="Anúncios do Facebook e Instagram">Anúncios do Facebook e Instagram</option>
                        <option value="Indicação de amigos e clientes">Indicação de amigos e clientes</option>
                        <option value="Pesquisando no Google ou Instagram">Pesquisando no Google ou Instagram</option>
                    </select>
                    <label for="floatingInputGrid">Como você conheceu a Handspike?</label>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="msg" placeholder="Deixe a sua mensagem" name="msg">
                        <label for="msg"><i class="fas fa-envelope" style="margin-right: 5px;"></i>Mensagem</label>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="btn-container">
                        <button onclick="toggleLoader()" class="btn btn-dark" type="submit">Receber análise gratuita! 

                        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/hjeefwhm.json"
                                trigger="loop"
                                colors="primary:#ffffff"
                                style="width:40px;height:40px;margin-left:4px;">
                            </lord-icon>

                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<script>

const fadeElement = document.querySelector("#fade");
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const websiteInput = document.querySelector('#website');

const toggleLoader = () => {
    if(nameInput.value != "" && emailInput.value != "" && websiteInput.value != ""){
        fadeElement.classList.toggle("hide");
    }
}
    //Get address event
    phoneInput.addEventListener("keyup", (e)=>{
    const inputValue = e.target.value;
    
    //Check if we have the correct length
    if(inputValue.length === 14){
        return;
    }
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./jquery.mask.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#insta').mask('@AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA')
    })
    $(document).ready(function(){
        $('#phone').mask('(00) 00000-0000')
    })
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;800&family=Roboto:wght@300;400;700&display=swap');
    body{
        background-color: black;
        font-family: 'Montserrat';
    }
    #fade {
    position: fixed;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    }

    #fade .spinner-border {
    width: 60px;
    height: 60px;
    }
    .hide{
        display: none !important;
    }
    i{
        margin-right: 2px;
    }
    .form-container{
        text-align: center;
        padding-top: 200px;
        padding-right: 500px;
        padding-left: 500px;
    }
    .logo-container{
        display: flex;
        justify-content: center;
    }
    .logo-link{
        width: 25%;
        margin-bottom: 10px;
    }
    .title{
        text-align: center;
        font-weight: 900;
        background: linear-gradient(to right,#B30FC3 40%, #3A0442 90%);;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        letter-spacing: -1px;
        margin-bottom: 0;
    }
    p{
        color: white;
        font-size: 18.5px;
        text-align: center;
        letter-spacing: -1px;
    }
    .row.g-2{
        padding-top: 12px;
    }
    .btn-container{
        text-align: center;
    }
    .btn.btn-dark{
        background: linear-gradient(50deg, rgba(179,15,195,1) 0%, rgba(102,9,116,1) 79%);
        border-style: none;
        padding: 6px 40px;
        width: 100%;
        border-radius: 40px;
        font-size: 18px;
        transition: .2s ease-in-out;
    }
    .btn.btn-dark:hover{
        color: rgba(179,15,195,1);
        border: 2px solid rgba(179,15,195,1);
        background: transparent;
        letter-spacing: 2px;
    }
    .form-control{
        background-color: #131313;
        border-style: none;
        border-radius: 5px;
        letter-spacing: -0.5px;
    }
    .form-control{
        background-color: #131313;
        border-style: none;
        border-radius: 5px;
        letter-spacing: -0.5px;
    }
    .form-select{
        letter-spacing: -0.5px;
        color: #e7e7e7;
        background-color: #131313;
        border-style: none;
        border-radius: 5px;
        box-shadow: none;
    }
    .form-select:focus{
        box-shadow: none;
        
    }
    label{
        letter-spacing: -0.2px;
        color: #e7e7e7;
    }
    .form-control:focus{
        color: #e7e7e7;
        border-style: none;
        background-color: #131313;
        box-shadow: none;
    }
    input {
        font-weight: 700;
    }
    input:-webkit-autofill,
    input:-webkit-autofill:focus {
    transition: background-color 600000s 0s, color 600000s 0s;
  }
  @media (max-width: 1600px) {
        .form-container{
        text-align: center;
        padding-top: 150px;
        padding-right: 300px;
        padding-left: 300px;
        width: 100%;
        margin: 0;
        }
        .logo-link{
        width: 30%;
        margin-bottom: 10px;
    }
    }
    @media (max-width: 1000px) {
        .form-container{
        text-align: center;
        padding-top: 120px;
        padding-right: 20px;
        padding-left: 20px;
        width: 100%;
        margin: 0;
        }
        .logo-link{
        width: 50%;
        margin-bottom: 10px;
        }
        .col-md{
        padding-top: 10px;
        }
        .row.g-2{
        padding-top: 5px;
        }
    }
    /* Loader */
    .lds-ring {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
    }
    .lds-ring div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 64px;
    height: 64px;
    margin: 8px;
    border: 8px solid #fff;
    border-radius: 50%;
    animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    border-color: #fff transparent transparent transparent;
    }
    .lds-ring div:nth-child(1) {
    animation-delay: -0.45s;
    }
    .lds-ring div:nth-child(2) {
    animation-delay: -0.3s;
    }
    .lds-ring div:nth-child(3) {
    animation-delay: -0.15s;
    }
    @keyframes lds-ring {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    }

</style>