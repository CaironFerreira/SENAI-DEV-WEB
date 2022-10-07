<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Login</title>
</head>
<!-- 1) Escreva um programa que verifique a validade de uma senha fornecida pelo usuário. A senha válida é o número 1234. Devem ser impressas as seguintes mensagens:
ACESSO PERMITIDO caso a senha seja válida. -->
<style>
    .planodefundo{
        position: absolute;
        height: 100vh;
        width: 100vw;
        /* margin-top: 10vh; */
        margin-left: auto;
        margin-right: auto;
        /* adicionando imagem de fundo */
        background: url('imagens/planoDeFundo.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        z-index: -1;
        border: 0%;
    }
    .row{
        margin-left: 0px;
        margin-right: 0px;
    }
    .flex-container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        height: 100vh;
    }
    .flex-title{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        /* background-color: hsla(210, 16%, 93%, 0.5); */
        border-radius: 1rem;
        margin:0%;
        background-image: linear-gradient(#fc3903, #d1024e);
    }
    .modal{
        /*  */
        --bs-modal-bg: #3b657ad7;
        --bs-modal-header-border-color: #142026da;
        --bs-modal-header-border-width: 2px;
        --bs-modal-footer-border-color: #142026da;
        --bs-modal-footer-border-width: 2px;
        
    }
</style>
<body>
    <script src="bootstrap.js"></script>
    <div class="planodefundo">
    </div>
    <!-- Fim do modal -->
    <!-- Linha 2 onde estão os elementos que constituem o formulário de login, são formatados pela classe "form" e "Jumbotron" -->
        <div class="row flex-container">
        <!-- A coluna está ocupando 4 espaços de um total de 12, com a classe flex-container ele fica formatada ao centro da página utilizando-se do flex-box do CSS-->
            <div class="col-lg-3 col-sm-10">
                <!-- A tag form cria o formulário, que por sua vez é formatado pelas classes form e jumbotron do Bootstrap-->
                <form class="g-3 jumbotron w-auto d-flex flex-column justify-content-between align-items-center" style="height: 30rem;" autocomplete="on" method="get" action="imc.php">
                        <h1 class="fw-lighter text-light ">Calcule seu IMC</h1>
                        <div class="bg-white d-flex flex-row align-items-center justify-content-center" style="border-radius: 50%; width: 16%; height: 4rem;">
                            <img src="imagens/bootstrap.svg" class="img-fluid" style="width: 60%; height: 60%;" alt="Logo">
                        </div>
                        <?php
                            $sexo=$_GET["sexo"];
                            $altura=$_GET["altura"];
                            if ($sexo==1) {
                                $imc = (72.7 * $altura)-58;
                                echo "  <div class='alert alert-success' role='alert'>
                                            Seu IMC é $imc
                                        </div>";
                                $imc = 0;
                                $sexo = 0;
                            } else {
                                $imc = (62.1 * $altura)-44.7;
                                echo "  <div class='alert alert-success' role='alert'>
                                            Seu IMC é $imc
                                        </div>";
                                $imc = 0;
                                $sexo = 0;
                            }
                            
                        ?>
                        <!--Campo do sexo  -->
                        <label for="sexo" class="visually-hidden">Isto é para os leitores de tela -Sexo</label>
                        <input type="number" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-10 w-100 fw-semibold text-light" required="true" placeholder="Sexo 1 para Fem e 2 para Masc" id="sexo" name="sexo" min="1" max="2">
                        <!-- Campo da altura -->
                        <label for="altura" class="visually-hidden">Isto é para os leitores de tela -Altura</label>
                        <input type="number" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-10 w-100 fw-semibold text-light" required="true" placeholder="Altura em metros" id="altura" name="altura" max="3" step="0.01">
                        <!-- Botão Login -->
                        <button type="submit" class="btn btn-light fw-semibold fs-6" style="border-radius: 3rem;" >Calcular</button>                 
                </form>
            </div>
        </div>
</body>
</html>
