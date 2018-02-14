<?php include'./PHPinclude/topo.php'; ?>

<title>Página do Administrador</title>
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
                <h1>Página de Login</h1>
                <?php
                require './PHPinclude/init.php';

                $usuario = isset($_POST['nNome']) ? $_POST['nNome'] : '';
                $senha = isset($_POST['nSenha']) ? $_POST['nSenha'] : '';

                if (empty($usuario) || empty($senha)) {
                    echo '<div class = "panel panel-danger">
                                <div class = "panel-heading">Erro</div>
                                <div class = "panel-body">Informe seu usuário e senha!</div>
                                </div>';
                    goto FIM;
                }

                include './PHPinclude/conexao.php';

                $sql = "SELECT * FROM login WHERE usuario = :usuario AND senha = :senha";
                $stmt = $CONEXAO->prepare($sql);

                $stmt->bindParam(':usuario', $usuario);
                $stmt->bindParam(':senha', $senha);

                $stmt->execute();

                $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($users) <= 0) {
                    echo '<div class = "panel panel-danger">
                              <div class = "panel-heading">Erro</div>
                              <div class = "panel-body">Usuário ou senha errados!</div>
                              </div>';
                    goto FIM;
                }

                $user = $users[0];

                session_start();
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['nome'];

                header('Location: paginaAdm.php');

                FIM:
                ?>
                <a href="formularioLogin.php" class="btn btn-primary btn-lg" role="button"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
                <br>
            </div>
            <?php include './PHPinclude/rodape.php'; ?>
            