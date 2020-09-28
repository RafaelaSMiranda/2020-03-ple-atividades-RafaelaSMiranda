<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Montar o meu lanche</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./montagem.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Lanches Fast Food</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cardápio
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../cardapio/cardapio.html">Pizza</a>
                        <a class="dropdown-item" href="../cardapio/cardapio.html">Hamburguer</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Montar meu lanche</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../adicionais/adicionais.html">Adicionais<span
                            class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="../bebidas/bebidas.html">Bebidas</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="../perfil/perfil.html">Perfil<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">

                <a href="../finalizar/finalizar.html" class="btn btn-danger my-2 mr-2 my-sm-0" type="submit">R$
                    24,00</a>
                <a href="../home/home.html" class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</a>
            </form>
        </div>
    </nav>

    <!-- -------------------------------------------------------------------------------------------------- -->


    </div>

    <div class="container w-75 border border-dark rounded shadow bg-white rounded"
        style=" padding: 20px; margin-top: 100px; ">

        <div class="title">

            <span>Escolha a opção e selecione os seus ingredientes</span>

        </div>


        <div class="row">

            <div class="col-4" style="display: grid; justify-content: center;">

                <span style="text-align: center;">Pizza</span>

                <div class="quantidade">


                    <div class="valor">
                        <p style="text-align: center;">R$25,00</p>
                    </div>

                    <div class="unidades">
                        <input type="button" id="subtrair" value='-' onclick="process(-1)" />
                        <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5"
                            disabled />
                        <input type="button" id="adicionar" value='+' onclick="process(1)">
                    </div>

                </div>

            </div>

            <div class="col-4" style="display: grid; justify-content: center;">


                <span style="text-align: center;">Hambúrguer

                </span>
                <div class="quantidade">


                    <div class="valor">
                        <p style="text-align: center;">R$6,00</p>
                    </div>

                    <div class="unidades">
                        <input type="button" id="subtrair" value='-' onclick="process(-1)" />
                        <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5"
                            disabled />
                        <input type="button" id="adicionar" value='+' onclick="process(1)">
                    </div>

                </div>

            </div>

            <div class="col-4" style="display: grid; justify-content: center;">

                <span style="text-align: center;">Porção</span>

                <div class="quantidade">


                    <div class="valor">
                        <p style="text-align: center;">R$20,00</p>
                    </div>

                    <div class="unidades">
                        <input type="button" id="subtrair" value='-' onclick="process(-1)" />
                        <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5"
                            disabled />
                        <input type="button" id="adicionar" value='+' onclick="process(1)">
                    </div>

                </div>

            </div>
        </div>

        <div class="botaoFinalizar pt-5" style="display: flex; justify-content: center;">
            <a href="../adicionais/adicionais.html" type="submit" class="btn btn-outline-primary">Ingredientes</a>
        </div>

    </div>


</body>

</html>