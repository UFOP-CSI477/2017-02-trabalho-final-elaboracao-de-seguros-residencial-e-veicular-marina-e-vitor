<?php include'./PHPinclude/topo.php'; ?>
<?php
if (isset($_GET['nDeletar'])) {
    $CONEXAO = new PDO("mysql:host=localhost;dbname=seguradora", 'root', '');
    $CONEXAO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $CONEXAO->exec("DELETE FROM formulariocontato WHERE id = '" . $_GET['nDeletar'] . "'");
    $_POST["nAssunto"] = "";
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
                <h1>Resultado Pesquisa do Formulário Automotivo</h1>
                <?php include './PHPinclude/conexao.php' ?>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-Mail</th>
                            <th>Telefone</th>
                            <th>Assunto</th>
                            <th>Mensagem</th>
                            <th>Ignorar</th>
                            <th>Data de Criação</th>
                        </tr>
                        <?php
                        $formularios = $CONEXAO->query("SELECT * FROM formulariocontato WHERE assunto LIKE '%" . $_POST["nAssunto"] . "%' ORDER BY created_at");

                        while ($FORMULARIO_CONTATO = $formularios->fetch(PDO::FETCH_ASSOC)) {
                            echo '
                                <tr>
                                    <td>' . $FORMULARIO_CONTATO['id'] . '</td>
                                    <td>' . $FORMULARIO_CONTATO['nome'] . '</td>
                                    <td>' . $FORMULARIO_CONTATO['email'] . '</td>
                                    <td>' . $FORMULARIO_CONTATO['telefone'] . '</td>
                                    <td>' . $FORMULARIO_CONTATO['assunto'] . '</td>
                                    <td>' . $FORMULARIO_CONTATO['mensagem'] . '</td>
                                    <form action="resultadoPesquisaContato.php" method="get">
                                        <td><input class="btn btn-danger" type="submit" name="nDeletar" value="' . $FORMULARIO_CONTATO['id'] . '" > Apagar</td>
                                    </form>
                                    <td>' . $FORMULARIO_CONTATO['created_at'] . '</td>
                                </tr>';
                        }
                        ?>
                    </table>
                </div>
                <a href="pesquisaContato.php" class="btn btn-primary btn-lg" role="button"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
                <br>
            </div>
            <?php include'./PHPinclude/rodape.php'; ?>
            