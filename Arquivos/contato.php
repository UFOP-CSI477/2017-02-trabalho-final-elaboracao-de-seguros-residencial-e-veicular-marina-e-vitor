<?php include'./PHPinclude/topo.php'; ?>
<title>Contato</title>
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
                    <li><a href="formularioLogin.php">Área Administrativa</a></li>
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
                <h1>Fale Conosco</h1>
                <p>Preencha o formulário abaixo para fazer contato com o portal SecurityVip. Retornaremos seu e-mail o mais breve possível</p>
                <form action="insereFormularioContato.php" method="post">
                    <div class="form-group">
                        <label for="iNome"><i class="fa fa-user"></i> Seu Nome</label>
                        <input id="iNome" class="form-control" type="text" name="nNome" placeholder="Coloque seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="iEmail"><i class="fa fa-envelope"></i> Seu E-Mail</label>
                        <input id="iEmail" class="form-control" type="email" name="nEmail" placeholder="Coloque seu E-Mail" required>
                    </div>
                    <div class="form-group">
                        <label for="iTelefone"><i class="fa fa-phone"></i> Telefone de Contato</label>
                        <input id="iTelefone" class="form-control" type="tel" name="nTelefone" placeholder="Coloque seu Telefone" required>
                    </div>
                    <div class="form-group">
                        <label for="iAssunto"><i class="fa fa-header"></i> Assunto</label>
                        <input id="iAssunto" class="form-control" type="text" name="nAssunto" placeholder="Coloque título do Assunto" required>
                    </div>
                    <div class="form-group">
                        <label for="iMensagem"><i class="fa fa-comment"></i> Sua mensagem</label>
                        <textarea id="iMensagem" class="form-control" rows="5" name="nMensagem" placeholder="Sua mensagem." required></textarea>
                    </div>
                    <button type="reset" class="btn btn-default"><i class="fa fa-trash"></i> Apagar</button>
                    <button type="submit" class="btn btn-default"><i class="fa fa-send"></i> Enviar</button>
                </form>
            </div>
            <?php include'./PHPinclude/rodape.php'; ?>
            