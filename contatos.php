<?php
    include_once('templates/header.php');
?>
<head>
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
</head>
        <h1 id="main-title">Contatos</h1>
            <table  style="max-width: 1200px;"  class="table" id="trabalhos-table">
                <thead style="text-align: center; vertical-align: center;">
                    <tr style="padding: 0 10px">
                        <th scope="col">#</th>
                        <th scope="col-md-1" style="width: 300px"><i class="fas fa-clock"></i> Data e Horário</th>
                        <th scope="col" class="text-nowrap" style="width: 350px"><i class="fas fa-user"></i> Nome</th>
                        <th scope="col" class="text-nowrap"><i class="fas fa-envelope"></i> Email</th>
                        <th scope="col" class="text-nowrap" style="width: 300px"><i class="fas fa-phone"></i> Telefone</th>
                        <th scope="col" class="text-nowrap"><i class="fas fa-globe"></i> Website</th>
                        <th scope="col" class="text-nowrap" style="width: 300px;"><i class="fas fa-laptop"></i> Como conheceu</th>
                    </tr>
                </thead>
                <tbody style="text-align: center">
                    <?php foreach($contatos as $contato):?>
                        <tr>
                            <td scope="row" class="id"><?=$contato['id']?></td>
                            <td scope="row" class="data_horario" style="width:500px"><b><?=$contato['data_horario']?></b></td>
                            <td class= "data-td" scope="row"><?=$contato['nome']?></td>
                            <td scope="row"><?=$contato['email']?></td>
                            <td scope="row" ><?=$contato['telefone']?></td>
                            <td scope="row" style="max-width:500px"><?=$contato['website']?></td>
                            <td scope="row"><?=$contato['como_conheceu']?></td>
                        </tr>
                    <?php endforeach?>    
                </tbody>
            </table>
            <form style="display: inline-block;" action="<?=$BASE_URL?>config/process.php" method="POST">
                <input type="hidden" name="type" value="download-contatos">
                <button class="btn btn-dark" type="submit"><i class="fas fa-download"></i>Fazer Download</button>       
            </form>
    </div>

<?php
    include_once('templates/footer.php');
?>

<style>
.button-download{
    text-align: center;
}
.btn.btn-dark{
    font-size: 20px;
    background-color: #920097;
    border: none;
    font-weight: 700;
    padding: 10px 60px;
    border-radius: 35px;
    transition: 0.5s all;
    }
    .btn.btn-dark:hover{
    background-color: #820086;
    letter-spacing: 4px;
    }
    .fas.fa-download{
    margin-right: 15px;
    }
    i{
        margin-right: 4px;
    }

</style>


