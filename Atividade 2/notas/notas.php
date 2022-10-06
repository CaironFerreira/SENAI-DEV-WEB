<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Notas</title>
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
        background: url('imagens/armarios.jpg');
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
        align-items: center;
    }
    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: hsla(210, 16%, 93%, 0.85);
        border-radius: 0.3rem;
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
</style>
<body>
    <div class="planodefundo">
    <!-- Linha 2 onde estão os elementos que constituem o formulário de login, são formatados pela classe "form" e "Jumbotron" -->
        <div class="row flex-container">
        <!-- A coluna está ocupando 4 espaços de um total de 12, com a classe flex-container ele fica formatada ao centro da página utilizando-se do flex-box do CSS-->
            <div class="col-4">
            <!-- A tag form cria o formulário, que por sua vez é formatado pelas classes form e jumbotron do Bootstrap-->
                <form class="jumbotron" method="get" action="notas.html">
                    <div class="mb-3 flex-title">
                        <label for="exampleInputEmail1" class="form-label" id="titulo">
                            Resultado Escolar
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            <?php
                                $notaobrigatoria1 = $_GET["notaobrigatoria1"];
                                $notaobrigatoria2 = $_GET["notaobrigatoria2"];
                                $notaoptativa = $_GET["notaoptativa"];
                                if ($notaoptativa==-1) {
                                    $media = ($notaobrigatoria1+$notaobrigatoria2)/2;
                                }
                                else
                                {
                                    if ($notaoptativa>$notaobrigatoria1 or $notaoptativa>$notaobrigatoria2) {
                                        if ($notaobrigatoria1>$notaobrigatoria2) {
                                            $media = ($notaobrigatoria1+$notaoptativa)/2;
                                        }
                                        else
                                        {
                                            $media = ($notaoptativa+$notaobrigatoria2)/2; 
                                        }
                                    }
                                    else
                                    {
                                        $media = ($notaobrigatoria1+$notaobrigatoria2)/2;
                                    }
                                }
                                switch ($media) 
                                {
                                    case ($media>=6):
                                        echo "Sua media é $media Você está aprovado, parabéns!";
                                        break;
                                    case ($media<3):
                                        echo "Sua media é $media Infelizmente você está reprovado!";
                                        break;
                                    case ($media>3 and $media<6):
                                        echo "Sua media é $media Você está de exame final!";
                                        break;
                                }
                            ?>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">calcular novamente</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>