<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>YouMusic</title>
</head>
<style>
    html, body .row{
        margin: 0;
        padding: 0;
    }
    .coluna{
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
    .navbar-expand-lg{
        padding-left: 0%;
        padding-right: 0%;
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
        background-image: linear-gradient(#3b657af3, #142026f5);
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
    <script src='bootstrap.js'></script>
    <header>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <!-- Navbar do bootstrap -->
                <nav class="navbar navbar-expand-lg bg-dark">
                    <div class="container-fluid">
                        <!-- Marca do site -->
                        <a class="navbar-brand text-light" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Link pra Homepage -->
                                <li class="nav-item">
                                    <label for="cadastro" data-bs-toggle="modal" data-bs-target="#cadastro">
                                        <!-- O data-bs-toggle serve para adicionar mais informações ao elemento -->
                                        <!-- O data-bs-target indica qual elemento html vai ser aberto, funciona com o JavaScript -->
                                        <a class="nav-link active text-light" aria-current="page" data-bs-target="#cadastro" href="#">Cadastre-se</a>
                                        <!-- Link que chama o modal -->
                                    </label>
                                </li>
                                <!-- Link -->
                                <li class="nav-item">
                                    <label for="login" data-bs-toggle="modal" data-bs-target="#login">
                                        <!-- O data-bs-toggle serve para adicionar mais informações ao elemento -->
                                        <!-- O data-bs-target indica qual elemento html vai ser aberto, funciona com o JavaScript -->
                                        <a class="nav-link active text-light" aria-current="page" data-bs-target="#login" href="#">Login</a>
                                        <!-- Link que chama o modal -->
                                    </label>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown teste
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item text-light">
                                    <a class="nav-link" href="#">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
                <!-- fim da navbar -->
            </div>
        </div>
		<?php
			//include_once('conexao.php');
			$host = "localhost";
			$database = "cadastro";
			$username = "root";
			$password = "";
			// Create connection
			$conn = mysqli_connect($host, $username, $password, $database);
	
			$nome=$_POST['nome-cadastro'];
			$email=$_POST['email-cadastro'];
			$senha=$_POST['senha-cadastro'];
			$sql= "INSERT INTO usuarios(nome, email, senha) 
			VALUES ('$nome','$email', '$senha')";
			// mysqli_query($conn, $sql);
			if (mysqli_query($conn, $sql)){
				echo "<script type='text/javascript src='bootstrap.js''>
				$(window).on('load',function(){
				$('#cadastro').modal('show'); });
			</script>";
			}
			else{
				echo "Error:". $sql ."<br/>".mysqli_error($conn);
				echo"nada feito";
			}
			mysqli_close($conn);		
			
			
			
		?>
        <!-- Modal cadastro-->
        <div class="modal fade" id="cadastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form name="signup" method='post'action="cadastrando.php">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-light fw-semibold" id="exampleModalLabel">Cadastre-se no YouMusic</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                            <!-- Logo do modal -->
                            <div class="w-auto d-flex flex-row justify-content-center">
                                <div class="bg-white d-flex flex-row align-items-center justify-content-center" style="border-radius: 50%; width: 16%; height: 4rem;">
                                    <img src="imagens/bootstrap.svg" class="img-fluid" style="width: 60%; height: 60%;" alt="Logo">
                                </div>
                            </div>
							<div class="alert alert-success" role="alert">
                                Cadastro realizado!
                            </div>
                            <!--Campo de email  -->
                            <label for="imput-email" class="visually-hidden">Isto é para os leitores de tela -Email</label>
                            <input type="email" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-50 w-100 fw-semibold text-light" autocomplete="email" required="true" placeholder="Email" id="imput-email" name="email-cadastro">
                            <!-- Campo de senha -->
                            <label for="imput-senha" class="visually-hidden">Isto é para os leitores de tela -senha</label>
                            <input type="password" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-50 w-100 fw-semibold text-light" autocomplete="off" placeholder="Senha" required="true" id="imput-senha" name="senha-cadastro">
                            <!-- Campo de nome -->
                            <label for="imput--repetir-senha" class="visually-hidden">Isto é para os leitores de tela imput--repetir-senha</label>
                            <input type="text" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-50 w-100 fw-semibold text-light" autocomplete="off" placeholder="Nome" required="true" id="imput-nome" name="nome-cadastro">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Feito!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Fim do modal cadastro-->
        <!-- Modal Login -->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-light fw-semibold" id="exampleModalLabel">Login no YouMusic</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                            <!-- Logo do modal -->
                            <div class="w-auto d-flex flex-row justify-content-center">
                                <div class="bg-white d-flex flex-row align-items-center justify-content-center" style="border-radius: 50%; width: 16%; height: 4rem;">
                                    <img src="imagens/bootstrap.svg" class="img-fluid" style="width: 60%; height: 60%;" alt="Logo">
                                </div>
                            </div>
                            <!--Campo de email  -->
                            <label for="imput-email" class="visually-hidden">Isto é para os leitores de tela -Email</label>
                            <input type="email" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-50 w-100 fw-semibold text-light" autocomplete="email" required="true" placeholder="Email" id="imput-email" name="email-cadastro">
                            <!-- Campo de senha -->
                            <label for="imput-senha" class="visually-hidden">Isto é para os leitores de tela -senha</label>
                            <input type="password" class="form-control-plaintext border-bottom border-2 border-top-0 border-light border-opacity-50 w-100 fw-semibold text-light" autocomplete="off" placeholder="Senha" required="true" id="imput-senha" name="senha-cadastro">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Feito!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- fim modal login -->
    </header>
    <main>
        <div class="row">
            <div class="col-lg-3 col-sm-12 col-md-6 coluna">
                <!-- cartão 1 -->
                <div class="card m-2 " style="width: 18rem;">
                    <!-- Imagem com link -->
                    <a href="www.youtube.com">
                        <img src="imagens/background.jpg" class="card-img-top" alt="imagem do cartão 1">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Cartão 1. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6 coluna">
                <!-- cartão 2 -->
                <div class="card m-2 " style="width: 18rem;">
                    <!-- Imagem com link -->
                    <a href="www.youtube.com">
                        <img src="imagens/background.jpg" class="card-img-top" alt="imagem do cartão 1">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Cartão 2. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6  coluna">
                <!-- cartão 3 -->
                <div class="card m-2 " style="width: 18rem;">
                    <!-- Imagem com link -->
                    <a href="www.youtube.com">
                        <img src="imagens/background.jpg" class="card-img-top" alt="imagem do cartão 1">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Cartão 3. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6 coluna">
                <!-- cartão 4 -->
                <div class="card m-2 " style="width: 18rem;">
                    <!-- Imagem com link -->
                    <a href="www.youtube.com">
                        <img src="imagens/background.jpg" class="card-img-top" alt="imagem do cartão 1">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Cartão 4. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>