<?php include'./PHPinclude/topo.php'; ?>
<title>Página Inicial</title>
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><p><img src="Outros/Imagem/beePequeno.png">  Bee Safe</p></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Página inicial</a></li>
                    <li><a href="formularioLogin.php">Área Administrativa</a></li>
                    <li><a href="simulacaoCasa.php">Simulação Casa</a></li>
                    <li><a href="simulacaoCarro.php">Simulação Carro</a></li>
                    <li><a href="contato.php">Fale Conosco</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <br>
                <div class="well">
                    <h1>Bem-vindo(a)!</h1>      
                    <p>Saiba mais sobre nossos serviços.</p>
                </div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="simulacaoCarro.php">
                                <img style="width: 100%;" class="img-responsive img-rounded" src="Outros/Imagem/carro.jpg">
                            </a>
                            <div class="carousel-caption">
                                <h3>Seguro Automotivo</h3>
                                <p>Seu carro em boas mãos.</p>
                            </div>
                        </div>
                        <div class="item img-responsive">
                            <a href="simulacaoCasa.php">
                                <img style="width: 100%;" src="Outros/Imagem/casaDeAbelha.jpg" alt="Simulação de Casa">
                            </a>
                            <div class="carousel-caption">
                                <h3>Seguro Residencial</h3>
                                <p>Seu lar protegido.</p>
                            </div>
                        </div>
                        <div class="item img-responsive">
                            <a href="formularioLogin.php">
                                <img style="width: 100%;" src="Outros/Imagem/escritorio.jpg" alt="Área Administrativa">
                            </a>
                            <div class="carousel-caption">
                                <h3>Área Administrativa</h3>
                            </div>
                        </div>
                        <div class="item img-responsive">
                            <a href="contato.php">
                                <img style="width: 100%;" src="Outros/Imagem/faleConosco.jpg" alt="Fale Conosco">
                            </a>
                            <div class="carousel-caption">
                                <h3>Fale Conosco</h3>
                                <p>Seu feedback é importante.</p>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
            </div>
            <?php include'./PHPinclude/rodape.php'; ?>
            