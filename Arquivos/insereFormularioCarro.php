<?php include'./PHPinclude/topo.php'; ?>
<title>Inserir Formulario Carro</title>
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
                    <li class="active"><a href="simulacaoCarro.php">Simulação Carro</a></li>
                    <li><a href="contato.php">Fale Conosco</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <br>
                <h1>Inserir Formulario Carro</h1>
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
                    $sql = "INSERT INTO formulariocarro (nome,cpf,genero,salario,estadoCivil,filhoHabilitado,alcool,entorpecente,nascimento,fabricante,anoVeiculo,distancia,classe,cambio,cor,combustivel,garagemCasa,ambiental,furto,acidente,concorda)
                    VALUES (
                        '" . $_POST["nNome"] . "','" . $_POST["nCPF"] . "','" . $_POST["nGenero"] . "','"
                            . $_POST["nSalario"] . "','" . $_POST["nEstadoCivil"] . "','" . $_POST["nFilhoHabilitado"] . "','"
                            . $_POST["nDependenteAlcoolica"] . "','" . $_POST["nDependenteEntorpecentes"] . "','" . $_POST["nNascimento"] . "','"
                            . $_POST["nFabricante"] . "','" . $_POST["nVeiculoAno"] . "','" . $_POST["nDistanciaPecorrida"] . "','"
                            . $_POST["nClasse"] . "','" . $_POST["nCambio"] . "','" . $_POST["nCor"] . "','" . $_POST["nCombustivel"] . "','"
                            . $_POST["nGaragemResidencia"] . "','" . $_POST["nSeguroAmbiental"] . "','" . $_POST["nSeguroFurto"] . "','"
                            . $_POST["nSeguroAcidente"] . "','" . $_POST["nConcorda"] . "')";
                    $CONEXAO->exec($sql);

                    echo '
                        <tr class="warning"><td style="font-weight: bold;">Dados do Condutor</td><td></td></tr>
                        <tr><td style="font-weight: bold;">Nome</td><td>' . $_POST['nNome'] . '</td></tr>
                        <tr><td style="font-weight: bold;">CPF</td><td>' . $_POST['nCPF'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Gênero</td><td>' . $_POST['nGenero'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Salário</td><td>' . $_POST['nSalario'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Estado Civil</td><td>' . $_POST['nEstadoCivil'] . '</td></tr>                        
                        <tr><td style="font-weight: bold;">Filho com Habilitação?</td><td>' . $_POST['nFilhoHabilitado'] . '</td></tr>                        
                        <tr><td style="font-weight: bold;">Depedência Alcoólica</td><td>' . $_POST['nDependenteAlcoolica'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Depedência Entorpecentes</td><td>' . $_POST['nDependenteEntorpecentes'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Data de Nascimento</td><td>' . $_POST['nNascimento'] . '</td></tr>
                        
                        <tr class="warning"><td style="font-weight: bold;">Dados do Veículo</td><td></td></tr>
                        <tr><td style="font-weight: bold;">Fabricante</td><td>' . $_POST['nFabricante'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Classe</td><td>' . $_POST['nClasse'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Ano do Veículo</td><td>' . $_POST['nVeiculoAno'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Distância Pecorrida</td><td>' . $_POST['nDistanciaPecorrida'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Tipo de Câmbio</td><td>' . $_POST['nCambio'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Cor do Carro</td><td>' . $_POST['nCor'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Tipo de Combustível</td><td>' . $_POST['nCombustivel'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Garagem Residência</td><td>' . $_POST['nGaragemResidencia'] . '</td></tr>
                        
                        <tr class="warning"><td style="font-weight: bold;">Dados do Seguro</td><td></td></tr>
                        <tr><td style="font-weight: bold;">Ambiental</td><td>' . $_POST['nSeguroAmbiental'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Furto</td><td>' . $_POST['nSeguroFurto'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Acidente</td><td>' . $_POST['nSeguroAcidente'] . '</td></tr>
                        <tr><td style="font-weight: bold;">Concorda</td><td>' . $_POST['nConcorda'] . '</td></tr>
                        ';
                    ?>
                </table>
                <a href="index.php" class="btn btn-primary btn-lg" role="button"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
                <br>
                <br>
            </div>
            <?php include'./PHPinclude/rodape.php'; ?>
            