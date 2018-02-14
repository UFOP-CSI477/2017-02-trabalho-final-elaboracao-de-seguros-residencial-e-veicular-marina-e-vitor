<?php include'./PHPinclude/topo.php'; ?>
<?php
if (isset($_GET['nDeletar'])) {
    $CONEXAO = new PDO("mysql:host=localhost;dbname=seguradora", 'root', '');
    $CONEXAO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $CONEXAO->exec("DELETE FROM formulariocarro WHERE id = '" . $_GET['nDeletar'] . "'");
    $_POST["nNomeCondutor"] = "";
}
?>
<title>Resultado Pesquisa do Formulário Automotivo</title>
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
                <h1>Resultado Pesquisa do Formulário Automotivo</h1>
                <?php include './PHPinclude/conexao.php' ?>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Riscos</th>
                            <th>Lucro</th>
                            <th>Fator de Lucro</th>
                            <th>Negar</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Gênero</th>
                            <th>Salário</th>
                            <th>Estado Civil</th>
                            <th>Filho Habilitado</th>
                            <th>Álcool</th>
                            <th>Entorpercente</th>
                            <th>Nascimento</th>
                            <th>Fabricante</th>
                            <th>Classe</th>
                            <th>Ano Veículo</th>
                            <th>Distância Anual</th>
                            <th>Câmbio</th>
                            <th>Cor</th>
                            <th>Combustível</th>
                            <th>Garagem</th>
                            <th>Seguro Ambiental</th>
                            <th>Seguro Furto</th>
                            <th>Seguro Acidente</th>
                            <th>Data</th>
                        </tr>
                        <?php
                        $formularios = $CONEXAO->query("SELECT * FROM formulariocarro WHERE nome LIKE '%" . $_POST["nNomeCondutor"] . "%' ORDER BY created_at");

                        while ($FORMULARIO_AUTOMOTIVO = $formularios->fetch(PDO::FETCH_ASSOC)) {
                            $RISCO = 0;
                            $LUCRO = 0;

                            switch ($FORMULARIO_AUTOMOTIVO["salario"]) {
                                case '1 a 5':
                                    $LUCRO += 0;
                                    break;
                                case '5 a 10':
                                    $LUCRO += 3;
                                    break;
                                case '10 a 15':
                                    $LUCRO += 5;
                                    break;
                                case '20+':
                                    $LUCRO += 10;
                                    break;
                            }

                            switch ($FORMULARIO_AUTOMOTIVO["estadoCivil"]) {
                                case 'Casado':
                                    $RISCO += 0;
                                    break;
                                case 'Viuvo':
                                    $RISCO += 1;
                                    break;
                                case 'Solteiro':
                                    $RISCO += 2;
                                    break;
                                case 'Divorciado':
                                case 'Separado':
                                    $RISCO += 3;
                                    break;
                            }

                            if ($FORMULARIO_AUTOMOTIVO["filhoHabilitado"] == 'Sim')
                                $RISCO += 2;

                            if ($FORMULARIO_AUTOMOTIVO["alcool"] == 'Sim')
                                $RISCO += 5;

                            if ($FORMULARIO_AUTOMOTIVO["entorpecente"] == 'Sim')
                                $RISCO += 5;

                            switch ($FORMULARIO_AUTOMOTIVO["classe"]) {
                                case 'Compacto';
                                case 'Medio';
                                    $LUCRO += 1;
                                    break;

                                case 'Minivan':
                                case 'SUV':
                                case 'Pick-up':
                                    $LUCRO += 3;
                                    break;

                                case 'Desportivo':
                                case 'Cabrio':
                                case 'Grande';
                                    $LUCRO += 5;
                                    break;

                                case 'Luxo':
                                    $LUCRO += 10;
                                    break;
                            }

                            if ($FORMULARIO_AUTOMOTIVO["distancia"] < 10000)
                                $LUCRO += 10;
                            else if ($FORMULARIO_AUTOMOTIVO["distancia"] > 10000 && $FORMULARIO_AUTOMOTIVO["distancia"] < 20000)
                                $RISCO += 1;
                            else if ($FORMULARIO_AUTOMOTIVO["distancia"] >= 20000)
                                $RISCO += 3;

                            switch ($FORMULARIO_AUTOMOTIVO["cambio"]) {
                                case 'Eletrico':
                                    $RISCO += 0;
                                    break;
                                case 'Hidraulico':
                                    $RISCO += 3;
                                    break;
                                case 'Mecanico':
                                    $RISCO += 5;
                                    break;
                            }

                            switch ($FORMULARIO_AUTOMOTIVO["combustivel"]) {
                                case 'Etanol':
                                case 'Gasolina':
                                case 'Flex':
                                    $RISCO += 0;
                                    break;

                                case 'Diesel':
                                    $RISCO += 1;
                                    break;

                                case 'Eletrico':
                                    $RISCO += 3;
                                    break;

                                case 'Gas':
                                    $RISCO += 5;
                                    break;

                                case 'Hidrogenio':
                                    $RISCO += 10;
                                    break;
                            }

                            if ($FORMULARIO_AUTOMOTIVO["garagemCasa"] == "Sim")
                                $LUCRO += 10;
                            else
                                $RISCO += 5;

                            if ($FORMULARIO_AUTOMOTIVO["ambiental"] == 'Sim')
                                $RISCO += 5;

                            if ($FORMULARIO_AUTOMOTIVO["acidente"] == 'Sim')
                                $RISCO += 5;

                            if ($FORMULARIO_AUTOMOTIVO["furto"] == 'Sim')
                                $RISCO += 5;

                            echo '
                                <tr>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['id'] . '</td>
                                    <td>' . $RISCO . '</td>
                                    <td>' . $LUCRO . '</td> ';
                            
                            if (number_format((float) $LUCRO / $RISCO, 2, '.', '') < 0.4 )
                                echo '<td style="color:red;font-weight: bold;">' . number_format((float) $LUCRO / $RISCO, 2, '.', '') . '</td>';
                            else if (number_format((float) $LUCRO / $RISCO, 2, '.', '') >= 0.4 && number_format((float) $LUCRO / $RISCO, 2, '.', '') < 0.8)
                                echo '<td style="color:DarkOrange;font-weight: bold;">' . number_format((float) $LUCRO / $RISCO, 2, '.', '') . '</td>';
                            else
                                echo '<td style="color:green;font-weight: bold;">' . number_format((float) $LUCRO / $RISCO, 2, '.', '') . '</td>';
                            
                            echo '
                                    <form action="resultadoPesquisaAutomovel.php" method="get">
                                        <td><input class="btn btn-danger" type="submit" name="nDeletar" value="' . $FORMULARIO_AUTOMOTIVO['id'] . '" >Apagar</td>
                                    </form>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['nome'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['cpf'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['genero'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['salario'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['estadoCivil'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['filhoHabilitado'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['alcool'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['entorpecente'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['nascimento'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['fabricante'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['classe'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['anoVeiculo'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['distancia'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['cambio'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['cor'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['combustivel'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['garagemCasa'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['ambiental'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['furto'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['acidente'] . '</td>
                                    <td>' . $FORMULARIO_AUTOMOTIVO['created_at'] . '</td>
                                </tr>';
                        }
                        ?>
                    </table>
                </div>
                <a href="pesquisaAutomotivo.php" class="btn btn-primary btn-lg" role="button"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
                <br>
            </div>
            <?php include'./PHPinclude/rodape.php'; ?>