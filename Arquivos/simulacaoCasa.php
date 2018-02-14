<?php include'./PHPinclude/topo.php'; ?>
<title>Simulação Casa</title>
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
                    <li class="active"><a href="simulacaoCasa.php">Simulação Casa</a></li>
                    <li><a href="simulacaoCarro.php">Simulação Carro</a></li>
                    <li><a href="contato.php">Fale Conosco</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <br>
                <h1>Fórmulário Residencial</h1>
                <div class="well">
                    <p>Este formulário irá coletar os dados e serão mantidos em sigilo. O formulário será encaminha e analisado pela equipe.</p>
                </div>
                <form action="insereFormularioResidencia.php" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><i class="fa fa-user"></i> Dados dos Residente</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="iNome">Qual é seu nome?</label>
                                <input id="iNome" name="nNome" type="text" class="form-control" placeholder="Seu nome completo." required>
                            </div>
                            <div class="form-group">
                                <label for="iCPF">Seu CPF</label>
                                <input id="iCPF" name="nCPF"  pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" type="text" class="form-control" placeholder="Siga o padrão: 000.000.000-00" required>
                            </div>
                            <div class="form-group">
                                <label for="iNascimento"><i class="fa fa-birthday-cake"></i> Data de nascimento</label>
                                <input id="iNascimento" name="nNascimento" type="date" class="form-control" min="1900-01-01" max="2018-12-31" required>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="fa fa-genderless"></i> Gênero</div>
                                <div class="panel-body">
                                    <label class="radio-inline"><input name="nGenero" type="radio" value="Masculino" required><i class="fa fa-mars"></i> Masculino</label>
                                    <label class="radio-inline"><input name="nGenero" type="radio" value="Feminino"><i class="fa fa-venus"></i> Feminino</label>
                                    <label class="radio-inline"><input name="nGenero" type="radio" value="Não Binário"><i class="fa fa-transgender-alt"></i> Não Binário</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="iSalario"><i class="material-icons">monetization_on</i> Qual é seu salário.</label>
                                <select class="form-control" id="iSalario" name="nSalario" required>
                                    <option disabled selected value> -- Selecione uma opção. -- </option>
                                    <option value="1 a 5">1 à 5 salários mínimos</option>
                                    <option value="5 a 10">5 à 10 salários mínimos</option>
                                    <option value="10 a 15">10 à 15 salários mínimos</option>
                                    <option value="Mais de 20">Mais de 20 salários mínimos</option>
                                </select>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="material-icons">people</i> Estado Civil</div>
                                <div class="panel-body">
                                    <label class="radio-inline"><input name="nEstadoCivil" type="radio" value="Casado" required>Casado(a)</label>
                                    <label class="radio-inline"><input name="nEstadoCivil" type="radio" value="Viúvo">Viúvo(a)</label>
                                    <label class="radio-inline"><input name="nEstadoCivil" type="radio" value="Divorciado">Divorciado(a)</label>
                                    <label class="radio-inline"><input name="nEstadoCivil" type="radio" value="Solteiro">Soteiro(a)</label>
                                    <label class="radio-inline"><input name="nEstadoCivil" type="radio" value="Separado">Separado(a)</label>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="material-icons">people</i> Pessoas Morando</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="iPessoas">Quantidade</label>
                                        <select class="form-control" id="iPessoas" name="nPessoasMorando" required>
                                            <option disabled selected value> -- Selecione uma opção. -- </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><i class="fa fa-home"></i> Dados da Residência</div>
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="fa fa-map-marker"></i> Localização</div>
                                <div class="panel-body">
                                    <label class="radio-inline"><input name="nLocalizacao" type="radio" value="Zona Rural" required>Zona Rural</label>
                                    <label class="radio-inline"><input name="nLocalizacao" type="radio" value="Suburbio">Subúrbio</label>
                                    <label class="radio-inline"><input name="nLocalizacao" type="radio" value="Zona Industrial">Zona Industrial</label>
                                    <label class="radio-inline"><input name="nLocalizacao" type="radio" value="Centro">Centro</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="fa fa-building"></i> Tipo de Domicílio</div>
                                <div class="panel-body">
                                    <label class="radio-inline"><input name="nTipoDomicilio" type="radio" value="Apartamento" required>Apartamento</label>
                                    <label class="radio-inline"><input name="nTipoDomicilio" type="radio" value="Kitnet">Kitnet</label>
                                    <label class="radio-inline"><input name="nTipoDomicilio" type="radio" value="Casa">Casa</label>
                                    <label class="radio-inline"><input name="nTipoDomicilio" type="radio" value="Casa de 2 andares">Casa de 2 andares</label>
                                    <label class="radio-inline"><input name="nTipoDomicilio" type="radio" value="Casa de 3 andares">Casa de 3 andares</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">Sua residência é:</div>
                                <div class="panel-body">
                                    <label class="radio-inline"><input name="nTipoMoradia" type="radio" value="Alugada" required>Alugada</label>
                                    <label class="radio-inline"><input name="nTipoMoradia" type="radio" value="Propria">Própria</label>
                                    <label class="radio-inline"><input name="nTipoMoradia" type="radio" value="Parente/Amigo">Parente/Amigo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><i class="fa fa-file-text"></i>  Tipo de Seguro</div>
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">Cobertura do Seguro</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <p><i class="fa fa-tree"></i> Desastre Ambiental</p>
                                        <label class="radio-inline"><input name="nSeguroAmbiental" type="radio" value="Sim" required>Sim</label>
                                        <label class="radio-inline"><input name="nSeguroAmbiental" type="radio" value="Nao">Não</label>
                                    </div>
                                    <div class="form-group">
                                        <p><i class="fa fa-unlock"></i> Furto</p>
                                        <label class="radio-inline"><input name="nSeguroFurto" type="radio" value="Sim" required>Sim</label>
                                        <label class="radio-inline"><input name="nSeguroFurto" type="radio" value="Nao">Não</label>
                                    </div>
                                    <div class="form-group">
                                        <p><i class="	fa fa-fire-extinguisher"></i> Incêndio</p>
                                        <label class="radio-inline"><input name="nSeguroIncendio" type="radio" value="Sim" required>Sim</label>
                                        <label class="radio-inline"><input name="nSeguroIncendio" type="radio" value="Nao">Não</label>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox-inline"><input type="checkbox" name="nConcorda" value="Sim" required>Concordo com os termos</label>
                            </div>
                            <button type="reset" class="btn btn-default"><i class="fa fa-trash"></i> Apagar</button>
                            <button type="submit" class="btn btn-default" id="enviar" value="submit"><i class="fa fa-send"></i> Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <?php include'./PHPinclude/rodape.php'; ?>
            