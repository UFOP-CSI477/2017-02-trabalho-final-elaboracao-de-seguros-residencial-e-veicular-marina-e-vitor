<?php include'./PHPinclude/topo.php'; ?>
<title>Inserir Formulario Residência</title>
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
                <h1>Inserir Formulario Residência</h1>
                <div class="well">
                    <p>Dados do formulário Residência</p>
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
                    $sql = "INSERT INTO formularioresidencia (nome,cpf,nascimento,genero,salario,estadoCivil,
                            pessoasMorando,localizacao,tipoDomicilio,tipoMoradia,ambiental,furto,incendio,concorda)
                            VALUES ('" . $_POST["nNome"] . "','" . $_POST["nCPF"] . "','" . $_POST["nNascimento"] . "','"
                            . $_POST["nGenero"] . "','" . $_POST["nSalario"] . "','" . $_POST["nEstadoCivil"] . "','"
                            . $_POST["nPessoasMorando"] . "','" . $_POST["nLocalizacao"] . "','" . $_POST["nTipoDomicilio"] . "','"
                            . $_POST["nTipoMoradia"] . "','" . $_POST["nSeguroAmbiental"] . "','" . $_POST["nSeguroFurto"] . "','"
                            . $_POST["nSeguroIncendio"] . "','" . $_POST["nConcorda"] . "')";
                    $CONEXAO->exec($sql);

                    echo '
                        <tr><td style="font-weight: bold;">Nome</td><td>' . $_POST['nNome'] . '</td></tr>
                        <tr><td style="font-weight: bold;">CPF</td><td>' . $_POST['nCPF'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Nascimento</td><td>' . $_POST['nNascimento'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Gênero</td><td>' . $_POST['nGenero'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Salário</td><td>' . $_POST['nSalario'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Estado Civil</td><td>' . $_POST['nEstadoCivil'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Pessoas Morando</td><td>' . $_POST['nPessoasMorando'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Localização</td><td>' . $_POST['nLocalizacao'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Tipo de Domicílio</td><td>' . $_POST['nTipoDomicilio'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Tipo de Moradia</td><td>' . $_POST['nTipoMoradia'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Seguro Ambiental</td><td>' . $_POST['nSeguroAmbiental'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Seguro Furto</td><td>' . $_POST['nSeguroFurto'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Seguro Incêndio</td><td>' . $_POST['nSeguroIncendio'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Concorda</td><td>' . $_POST['nConcorda'] . '</td></tr>
                        ';
                    ?>
                </table>
                <a href="index.php" class="btn btn-primary btn-lg" role="button"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
                <br>
                <br>
            </div>
            <?php include'./PHPinclude/rodape.php'; ?>
            