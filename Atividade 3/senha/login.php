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
        background: url('imagens/background.jpg');
        background-size: cover;
        filter: blur(5px);
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
        background-image: linear-gradient(#3b657ad7, #142026da);
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
    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-light fw-semibold" id="exampleModalLabel">Cadastre-se no YouMusic</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-auto d-flex flex-row justify-content-center">
                        <div class="bg-white d-flex flex-row align-items-center justify-content-center" style="border-radius: 50%; width: 16%; height: 4rem;">
                            <img src="imagens/bootstrap.svg" class="img-fluid" style="width: 60%; height: 60%;" alt="Logo">
                        </div>
                    </div>
                    <!--Campo de email  -->
                    <label for="email" class="visually-hidden">Isto é para os leitores de tela -Email</label>
                    <input type="email" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-50 w-100 fw-semibold text-light" autocomplete="email" required="true" placeholder="Email" id="imput-email" name="email-cadastro">
                    <!-- Campo de senha -->
                    <label for="imput-senha" class="visually-hidden">Isto é para os leitores de tela -senha</label>
                    <input type="password" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-50 w-100 fw-semibold text-light" autocomplete="off" placeholder="Senha" required="true" id="imput-senha" name="senha-cadastro">
                    <label for="imput--repetir-senha" class="visually-hidden">Isto é para os leitores de tela imput--repetir-senha</label>
                    <input type="password" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-50 w-100 fw-semibold text-light" autocomplete="off" placeholder="Repita a senha" required="true" id="imput-senha">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Feito!</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal da senha incorreta -->
    <div class="modal fade" id="senhaIncorreta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5 text-light fw-semibold" id="exampleModalLabel">Aviso</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-auto d-flex flex-row justify-content-center">
                        <div class="bg-white d-flex flex-row align-items-center justify-content-center" style="border-radius: 50%; width: 16%; height: 4rem;">
                            <img src="imagens/bootstrap.svg" class="img-fluid" style="width: 60%; height: 60%;" alt="Logo">
                        </div>
                    </div>
                    <div>
                        <label for="erro">Senha Incorreta!</label>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit" id="erro"class="btn btn-success">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do modal -->
    <div class="planodefundo">
    </div>
    <!-- Fim do modal -->
    <!-- Linha 2 onde estão os elementos que constituem o formulário de login, são formatados pela classe "form" e "Jumbotron" -->
        <div class="row flex-container">
        <!-- A coluna está ocupando 4 espaços de um total de 12, com a classe flex-container ele fica formatada ao centro da página utilizando-se do flex-box do CSS-->
            <div class="col-lg-3 col-sm-10">
                <!-- A tag form cria o formulário, que por sua vez é formatado pelas classes form e jumbotron do Bootstrap-->
                <form class="g-3 jumbotron w-auto d-flex flex-column justify-content-between align-items-center" style="height: 30rem;" autocomplete="on" method="get" action="login.php">
                        <h1 class="fw-lighter text-light ">YouMusic</h1>
                        <div class="bg-white d-flex flex-row align-items-center justify-content-center" style="border-radius: 50%; width: 16%; height: 4rem;">
                            <img src="imagens/bootstrap.svg" class="img-fluid" style="width: 60%; height: 60%;" alt="Logo">
                        </div>
                        <!--Campo de email  -->
                        <label for="email" class="visually-hidden">Isto é para os leitores de tela -Email</label>
                        <input type="email" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-10 w-100 fw-semibold text-light" autocomplete="email" required="true" placeholder="Email" id="imput-email" name="email">
                        <?php
                            if (1234 != $_GET["senha"]) {
                                echo '  <div class="alert alert-danger" role="alert">
                                            Acesso negado.
                                            A senha está incorreta!
                                        </div>';
                            }
                            else
                            {
                                echo '  <div class="alert alert-success" role="alert">
                                            Acesso permitido.
                                            A senha está correta!
                                        </div>';
                            }
                        ?>
                        <!-- Campo de senha -->
                        <label for="imput-senha" class="visually-hidden">Isto é para os leitores de tela -Email</label>
                        <input type="password" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-10 w-100 fw-semibold text-light" autocomplete="off" placeholder="Senha" required="true" id="imput-senha" maxlength="4" name="senha">
                        <!-- Botão Login -->
                        <button type="submit" class="btn btn-light fw-semibold fs-6" style="border-radius: 3rem;" >Login</button>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkbox">
                            <label class="form-check-label text-light" for="checkbox">
                                lembrar de mim
                            </label>
                        </div>
                        <div class="d-flex flex-row align-items-stretch justify-content-around w-100" >
                            <label for="recuperar-senha">
                                <a href="#" class="link-light fw-normal text-decoration-none">Esqueci minha senha</a>
                            </label>
                            <label for="cadastro" data-bs-toggle="modal" data-bs-target="#Modal">
                                <!-- O data-bs-target serve para adicionar mais informações ao elemento -->
                                <!-- O data-bs-target indica qual elemento html vai ser aberto, funciona com o JavaScript -->
                                <a href="#" class="link-light fw-normal text-decoration-none">Cadastre-se</a>
                                <!-- Link que chama o modal -->
                            </label>
                        </div>                   
                </form>
            </div>
        </div>
</body>
</html>

