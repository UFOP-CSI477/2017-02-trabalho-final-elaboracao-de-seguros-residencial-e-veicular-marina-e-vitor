<?php include'./PHPinclude/topo.php'; ?>

<title>Página do Administrador</title>
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><p><img src="Outros/Imagem/beePequeno.png"> Bee Safe</p></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="PHPinclude/logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <br>
                <h1>Página do Administrador</h1>
                <div class="well well-lg"><a href="pesquisaAutomotivo.php"><h3><i class="fa fa-car fa-1x"></i> Área Automotivo</h3></a></div>
                <div class="well well-lg"><a href="pesquisaResidencia.php"><h3><i class="fa fa-home fa-1x"></i> Área Residencial</h3></a></div>
                <div class="well well-lg"><a href="pesquisaContato.php"><h3><i class="fa fa-phone fa-1x"></i> Fale Conosco</h3></a></div>
                <br>
            </div>
            <?php include'./PHPinclude/rodape.php'; ?>
            