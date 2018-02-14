<?php include'./PHPinclude/topo.php'; ?>
<?php
if (isset($_GET['nDeletar'])) {
    $CONEXAO = new PDO("mysql:host=localhost;dbname=seguradora", 'root', '');
    $CONEXAO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $CONEXAO->exec("DELETE FROM formularioresidencia WHERE id = '" . $_GET['nDeletar'] . "'");
    $_POST["nNomeMorador"] = "";
}
?>
<title>Resultado Pesquisa do Formulário Automotivo</title>
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
                <h1>Resultado Pesquisa do Formulário Residencial</h1>
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
                            <th>Nascimento</th>
                            <th>Salário</th>
                            <th>Estado Civil</th>
                            <th>Pessoas Morando</th>
                            <th>Localização</th>
                            <th>Tipo de Domicílo</th>
                            <th>Tipo de Moradia</th>
                            <th>Seguro Ambiental</th>
                            <th>Seguro Furto</th>
                            <th>Seguro Incêndio</th>
                            <th>Data</th>
                        </tr>
                        <?php
                        $formularios = $CONEXAO->query("SELECT * FROM formularioresidencia WHERE nome LIKE '%" . $_POST["nNomeMorador"] . "%' ORDER BY created_at");

                        while ($FORMULARIO_RESIDENCIA = $formularios->fetch(PDO::FETCH_ASSOC)) {
                            $RISCO = 0;
                            $LUCRO = 0;

                            switch ($FORMULARIO_RESIDENCIA["salario"]) {
                                case '1 a 5':
                                    $LUCRO += 0;
                                    break;
                                case '5 a 10':
                                    $LUCRO += 5;
                                    break;
                                case '10 a 15':
                                    $LUCRO += 10;
                                    break;
                                case '20+':
                                    $LUCRO += 25;
                                    break;
                            }

                            switch ($FORMULARIO_RESIDENCIA["estadoCivil"]) {
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

                            if (($FORMULARIO_RESIDENCIA["pessoasMorando"]) < 5) {
                                $LUCRO += 5;
                            } else {
                                $RISCO += 5;
                            }

                            switch ($FORMULARIO_RESIDENCIA["localizacao"]) {
                                case 'Zona Rural':
                                    $RISCO += 0;
                                    break;
                                case 'Suburbio':
                                    $RISCO += 4;
                                    break;
                                case 'Zona Industrial':
                                case 'Centro':
                                    $RISCO += 5;
                                    break;
                            }

                            switch ($FORMULARIO_RESIDENCIA["tipoDomicilio"]) {
                                case 'Casa de 3 andares':
                                    $RISCO += 5;
                                    break;
                                case 'Casa de 2 andares':
                                    $RISCO += 3;
                                    break;
                                case 'Casa':
                                    $LUCRO += 1;
                                    break;
                                case 'Apartamento':
                                    $LUCRO += 2;
                                    break;
                                case 'Kitnet':
                                    $LUCRO += 5;
                                    break;
                            }

                            switch ($FORMULARIO_RESIDENCIA["tipoDomicilio"]) {
                                case 'Alugada':
                                case 'Parente/Amigo':
                                    $RISCO += 5;
                                    break;
                                case 'Propria':
                                    $LUCRO += 5;
                                    break;
                            }

                            if ($FORMULARIO_RESIDENCIA["ambiental"] == 'Sim')
                                $RISCO += 5;

                            if ($FORMULARIO_RESIDENCIA["furto"] == 'Sim')
                                $RISCO += 5;

                            if ($FORMULARIO_RESIDENCIA["incendio"] == 'Sim')
                                $RISCO += 5;

                            echo '
                                <tr>
                                    <td>' . $FORMULARIO_RESIDENCIA['id'] . '</td>
                                    <td>' . $RISCO . '</td>
                                    <td>' . $LUCRO . '</td>';

                            if (number_format((float) $LUCRO / $RISCO, 2, '.', '') < 0.4 )
                                echo '<td style="color:red;font-weight: bold;">' . number_format((float) $LUCRO / $RISCO, 2, '.', '') . '</td>';
                            else if (number_format((float) $LUCRO / $RISCO, 2, '.', '') >= 0.4 && number_format((float) $LUCRO / $RISCO, 2, '.', '') < 0.8)
                                echo '<td style="color:DarkOrange;font-weight: bold;">' . number_format((float) $LUCRO / $RISCO, 2, '.', '') . '</td>';
                            else
                                echo '<td style="color:green;font-weight: bold;">' . number_format((float) $LUCRO / $RISCO, 2, '.', '') . '</td>';

                            echo '
                                    <form action="resultadoPesquisaResidencia.php" method="get">
                                        <td><input class="btn btn-danger" type="submit" name="nDeletar" value="' . $FORMULARIO_RESIDENCIA['id'] . '" >Apagar</td>
                                    </form>
                                    <td>' . $FORMULARIO_RESIDENCIA['nome'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['cpf'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['genero'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['nascimento'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['salario'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['estadoCivil'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['pessoasMorando'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['localizacao'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['tipoDomicilio'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['tipoMoradia'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['ambiental'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['furto'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['incendio'] . '</td>
                                    <td>' . $FORMULARIO_RESIDENCIA['created_at'] . '</td>
                                </tr>';
                        }
                        ?>
                    </table>
                </div>
                <a href="pesquisaResidencia.php" class="btn btn-primary btn-lg" role="button"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
                <br>
            </div>
            <?php include'./PHPinclude/rodape.php'; ?>
            