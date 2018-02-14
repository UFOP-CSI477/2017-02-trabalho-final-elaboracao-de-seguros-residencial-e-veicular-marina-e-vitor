<?php include'./PHPinclude/topo.php'; ?>
<title>Inserir Formulario Contato</title>
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
                    <li><a href="login.php">Login</a></li>
                    <li><a href="simulacaoCasa.php">Simulação Casa</a></li>
                    <li><a href="simulacaoCarro.php">Simulação Carro</a></li>
                    <li class="active"><a href="contato.php">Fale Conosco</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <br>
                <h1>Inserir Formulário Contato</h1>
                <div class="well">
                    <p>Dados do formulário</p>
                    <?php echo var_dump($_POST); ?>
                </div>
                <?php include './PHPinclude/conexao.php'; ?>
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Variável</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "INSERT INTO formulariocontato (nome,email,telefone,assunto,mensagem)
                    VALUES ('" . $_POST["nNome"] . "','" . $_POST["nEmail"] . "','" . $_POST["nTelefone"] . "','"
                            . $_POST["nAssunto"] . "','" . $_POST["nMensagem"] . "')";
                    $CONEXAO->exec($sql);

                    echo '
                        <tr><td style="font-weight: bold;">Nome</td><td>' . $_POST['nNome'] . '</td></tr>
                        <tr><td style="font-weight: bold;">E-Mail</td><td>' . $_POST['nEmail'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Telefone</td><td>' . $_POST['nTelefone'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Assunto</td><td>' . $_POST['nAssunto'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Mensagem</td><td>' . $_POST['nMensagem'] . '</td></tr>
                        ';
                    ?>
                </table>
                <a href="index.php" class="btn btn-primary btn-lg" role="button"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
                <br>
                <br>
            </div>
            <?php include'./PHPinclude/rodape.php'; ?>
            