<?php include'./PHPinclude/topo.php'; ?>

<title>Pesquisar Formulário Residencial</title>
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><p><img src="Outros/Imagem/beePequeno.png">  Bee Safe</p></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="PHPinclude/logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <br>
                <h1>Pesquisar Formulário Residencial</h1>
                <div class="well well-lg">Observação.: Entrada vazia irá obter todos os formulários.</div>
                <form action="resultadoPesquisaResidencia.php" method="post">
                    <div class="form-group">
                        <label for="iNomeMorador">Insira o nome do moradores:</label>
                        <input type="text" class="form-control" name="nNomeMorador" id="iNomeMorador">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-search"></i> Pesquisar</button>
                </form>
                <br>
                <a href="paginaAdm.php" class="btn btn-primary btn-lg" role="button"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
                <br>
            </div>
            <?php include'./PHPinclude/rodape.php'; ?>