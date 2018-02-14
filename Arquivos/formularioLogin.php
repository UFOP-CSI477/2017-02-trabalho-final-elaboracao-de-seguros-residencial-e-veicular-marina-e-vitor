<?php include'./PHPinclude/topo.php'; ?>
<title>Área Administrativa</title>
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><p><img src="Outros/Imagem/beePequeno.png">  Bee Safe</p></a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Página inicial</a></li>
                    <li class="active"><a href="formularioLogin.php">Área Administrativa</a></li>
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
                <form action="login.php" method="post">
                    <div class = "panel panel-default">
                        <div class = "panel-heading">Login</div>
                        <div class = "panel-body">
                            <div class="form-group">
                                <label for="iNome">Nome</label>
                                <input id="iNome" name="nNome" type="text" class="form-control" placeholder="Nome do Administrador">
                            </div>
                            <div class="form-group">
                                <label for="iSenha">Senha</label>
                                <input id="iSenha" name="nSenha" type="password" class="form-control" placeholder="Sua senha.">
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="reset" class="btn btn-default"><i class="fa fa-trash"></i> Apagar</button>
                            <button type="submit" class="btn btn-default"><i class="fa fa-send"></i> Enviar</button>
                        </div>
                    </div>
                </form>
                <br>
            </div>
            <?php include'./PHPinclude/rodape.php'; ?>
            