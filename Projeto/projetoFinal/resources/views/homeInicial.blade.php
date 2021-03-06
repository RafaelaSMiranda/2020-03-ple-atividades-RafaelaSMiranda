<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>


    <!-- -------------------------------------------------------------------------------------------------- -->

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../img/1.jpg" alt="Hamburguer">


                <div id="teste" class="carousel-caption text-left p-3 " style="background-color: black; opacity: 0.7;">

                    <p style="font-weight: bold; font-size: 20px;"> Trabalhamos com Pizzas, Hambúrgueres, Porções, Sobremesas e muito mais ... </p>

                    <p style="font-size: 18px;">Observação: Todas as pizzas possuem  o mesmo tamanho  </p>

                    <p style="font-size: 18px;">8 fatias</p>

                </div>


            </div>
            <div class="carousel-item">
                <img src="../../img/2.jpg" alt="Porção">

                <div id="teste" class="carousel-caption text-left p-3 " style="background-color: black; opacity: 0.7;">

                    <p style="font-weight: bold; font-size: 20px;">Realize o seu pedido</p>

                    <p style="font-size: 18px;">Rápido e seguro</p>

                    <p style="font-size: 18px;">Levamos ate você com entrega grátis para todos os bairros da cidade</p>

                </div>

            </div>
            <div class="carousel-item">
                <img src="../../img/3.jpg" alt="Pizza">


                <div id="teste" class="carousel-caption text-left p-3 " style="background-color: black; opacity: 0.7;">

                    <p style="font-weight: bold; font-size: 20px;"> Horário de funcionamento: </p>

                    <p style="font-size: 18px;">18h00 às 01h00 </p>

                    <p style="font-size: 18px;">Contato: (DD) xxxxx-xxxx / (DD) xxxxx-xxxx</p>

                </div>

            </div>

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

    <!-- --------------------------------------------------------------------------------------------------------- -->


    <div class="container-sm pl-5 pr-5 pt-4">

        <div id="text">

            <div id="login">
                <form class="form" style="display: flex; justify-content: space-evenly;">


                    <div class="col-md-6 mt-5">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body bordered shadow">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group justify-content-center" style="display: flex;">
                                        <a href="{{route('produto.index')}}" style="margin-left: 2px; margin-right: 50px; font-size: 150%; justify-content: center; align-items: center;" type="button" class="btn btn-light border-info">Realize o seu pedido</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-5">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body bordered shadow">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group justify-content-center" style="display: flex;">
                                        <a href="{{route('pedido.index')}}" style="margin-left: 2px; margin-right: 50px; font-size: 150%; justify-content: center; align-items: center;" type="button" class="btn btn-light border-info">Área Administrativa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

</body>

</html>
