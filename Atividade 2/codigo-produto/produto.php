<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Consulta de produtos</title>
</head>
<style>
    .planodefundo{
        position: relative;
        height: 100vh;
        width: 100vw;
        /* margin-top: 10vh; */
        margin-left: auto;
        margin-right: auto;
        /* adicionando imagem de fundo */
        background: url('imagens/mapa-background.jpg');
        background-size: cover;
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
        align-items: baseline;
    }
    .jumbotron{
        margin:0%;
    }
    @font-face{
        font-family: Youtube;
        src: url("YouTubeSansDarkExtrabold.otf") format("otf");
    }
    #titulo{
        font-family: Youtube;
        font-size: 2.5em;
    }
    #icone-musica{
        padding-right: 1%;
    }
    #mapas{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        align-items: center; 
    }
</style>
<body>
    <div class="planodefundo">
    <!-- Linha 2 onde estão os elementos que constituem o formulário de login, são formatados pela classe "form" e "Jumbotron" -->
        <div class="row flex-container">
        <!-- A coluna está ocupando 4 espaços de um total de 12, com a classe flex-container ele fica formatada ao centro da página utilizando-se do flex-box do CSS-->
            <div class="col-4">
            <!-- A tag form cria o formulário, que por sua vez é formatado pelas classes form e jumbotron do Bootstrap-->
                <form class="jumbotron" method="get" action="produto.php">
                    <div class="mb-3 flex-title">
                        <label for="exampleInputEmail1" class="form-label" id="titulo">
                            Consulta de Produto
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Insira o código do produto
                        </label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="codigo">
                        <div id="mapas">
                            <?php
                                $codigo = $_GET["codigo"];
                                switch ($codigo) {
                                    case 1:
                                        echo "<img src='imagens/sul.png' width='180vw' height='150vh'>";
                                        echo "O produto é do sul";
                                        break;
                                    case 2:
                                        echo "<img src='imagens/norte2.png' width='180vw' height='150vh'>";
                                        echo "O produto é do norte";
                                        break;
                                    case 3:
                                        echo "O produto é do leste";
                                        break;
                                    case 4:
                                        echo "O produto é do oeste";
                                        break;
                                    case 5:
                                        echo "<img src='imagens/nordeste.png' width='180vw' height='150vh'>";
                                        echo "O produto é do nordeste";
                                        break;
                                    case 6:
                                        echo "<img src='imagens/nordeste.png' width='180vw' height='150vh'>";
                                        echo "O produto é do nordeste";
                                        break;
                                    case 7:
                                        echo "<img src='imagens/sudeste.png' width='180vw' height='150vh'>";
                                        echo "O produto é do sudeste";
                                        break;
                                    case 8:
                                        echo "<img src='imagens/sudeste.png' width='180vw' height='150vh'>";
                                        echo "O produto é do sudeste";
                                        break;
                                    case 9:
                                        echo "<img src='imagens/sudeste.png' width='180vw' height='150vh'>";
                                        echo "O produto é do sudeste";
                                        break;
                                    case 10:
                                        echo "<img src='imagens/centro-oeste.png' width='180vw' height='150vh'>";
                                        echo "O produto é do centro-oeste";
                                        break;
                                    case 11:
                                        echo "O produto é do noroeste";
                                        break;
                                    case ($codigo>11 or $codigo<0):
                                        echo "<img src='imagens/mapa-background.jpg' width='180vw' height='150vh'>";
                                        echo "O produto é importado";
                                    break;
                                    }
                                ?>
                        </div>
                        <div id="emailHelp" class="form-text">
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>