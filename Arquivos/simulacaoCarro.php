<?php include'./PHPinclude/topo.php'; ?>
<title>Simulação Carro</title>
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
                    <li class="active"><a href="simulacaoCarro.php">Simulação Carro</a></li>
                    <li><a href="contato.php">Fale Conosco</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <br>
                <h1>Fórmulário do Automóvel</h1>
                <div class="well">
                    <p>Este formulário irá coletar os dados e serão mantidos em sigilo. O formulário será encaminha e analisado pela equipe.</p>
                </div>
                <form action="insereFormularioCarro.php" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><i class="fa fa-user"></i> Dados do Condutor</div>
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
                                    <option value="20+">Mais de 20 salários mínimos</option>
                                </select>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="material-icons">people</i> Estado Civil</div>
                                <div class="panel-body">
                                    <label class="radio-inline"><input name="nEstadoCivil" type="radio" value="Casado" required>Casado(a)</label>
                                    <label class="radio-inline"><input name="nEstadoCivil" type="radio" value="Viuvo">Viúvo(a)</label>
                                    <label class="radio-inline"><input name="nEstadoCivil" type="radio" value="Divorciado">Divorciado(a)</label>
                                    <label class="radio-inline"><input name="nEstadoCivil" type="radio" value="Solteiro">Soteiro(a)</label>
                                    <label class="radio-inline"><input name="nEstadoCivil" type="radio" value="Separado">Separado(a)</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-child"></i> Filho com habilitação</label>
                                <br>
                                <label class="radio-inline"><input name="nFilhoHabilitado" type="radio" value="Sim" required>Sim</label>
                                <label class="radio-inline"><input name="nFilhoHabilitado" type="radio" value="Nao">Não</label>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">Depedências</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <p><i class="fa fa-beer"></i> Alcoólica</p>
                                        <label class="radio-inline"><input name="nDependenteAlcoolica" type="radio" value="Sim" required>Sim</label>
                                        <label class="radio-inline"><input name="nDependenteAlcoolica" type="radio" value="Nao">Não</label>
                                    </div>
                                    <div class="form-group">
                                        <p><i class="fa fa-eyedropper"></i> Entorpecentes</p>
                                        <label class="radio-inline"><input name="nDependenteEntorpecentes" type="radio" value="Sim" required>Sim</label>
                                        <label class="radio-inline"><input name="nDependenteEntorpecentes" type="radio" value="Nao">Não</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><i class="fa fa-automobile"></i> Dados do Carro</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="iFabricante">Fabricante</label>
                                    <select class="form-control" id="iFabricante" name="nFabricante" required>
                                        <option disabled selected value> -- Selecione uma opção. -- </option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Fiat">Fiat</option>
                                        <option value="Ford">Ford</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Peugeot">Peugeot</option>
                                        <option value="Citroen">Citroen</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Volkswagen">Volkswagen</option>
                                        <option value="Suzuki">Suzuki</option>
                                        <option value="Kia">Kia</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                                </div>
                                <label for="iClasse">Classe</label>
                                <select class="form-control" id="iClasse" name="nClasse" required>
                                    <option disabled selected value> -- Selecione uma opção. -- </option>
                                    <option value="Compacto">Compacto</option>
                                    <option value="Medio">Tamanho médio</option>
                                    <option value="Grande">Tamanho grande</option>
                                    <option value="Luxo">Luxo</option>
                                    <option value="Desportivo">Desportivo</option>
                                    <option value="Cabrio">Cabrio</option>
                                    <option value="Minivan">Minivan</option>
                                    <option value="SUV">SUV compacto</option>
                                    <option value="Pick-up">Pick-up Pequena</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="iVeiculoAno">Ano</label>
                                <input id="iVeiculoAno" name="nVeiculoAno" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="iDistanciaPecorrida">Anualmente quantos KM usa o automóvel?</label>
                                <input id="iDistanciaPecorrida" name="nDistanciaPecorrida" type="text" class="form-control" placeholder="Distância em KM" required>
                            </div>
                            <div class="form-group">
                                <label for="iCambio">Câmbio</label>
                                <select class="form-control" id="iCambio" name="nCambio" required>
                                    <option disabled selected value> -- Selecione uma opção. -- </option>
                                    <option value="Mecanico">Mecânico</option>
                                    <option value="Hidraulico">Hidráulico</option>
                                    <option value="Eletrico">Elétrico</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="iCor"><i class="material-icons">color_lens</i> Cor</label>
                                <select class="form-control" id="iCor" name="nCor" required>
                                    <option disabled selected value> -- Selecione uma opção. -- </option>
                                    <option value="Branco">Branco</option>
                                    <option value="Preto">Preto</option>
                                    <option value="Prata">Prata</option>
                                    <option value="Vermelho">Vermelho</option>
                                    <option value="Azul">Azul</option>
                                    <option value="Verde">Verde</option>
                                    <option value="Cinza">Cinza</option>
                                    <option value="Amarelo">Amarelo</option>
                                    <option value="Verde">Verde</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="iCombustivel"><i class="material-icons">local_gas_station</i> Combustível</label>
                                <select class="form-control" id="iCombustivel" name="nCombustivel" required>
                                    <option disabled selected value> -- Selecione uma opção. -- </option>
                                    <option value="Etanol">Etanol</option>
                                    <option value="Gasolina">Gasolina</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="Gas">Gás</option>
                                    <option value="Eletrico">Elétrico</option>
                                    <option value="Flex">Flex</option>
                                    <option value="Hidrogenio">Hidrogênio</option>
                                </select>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class=""></i> Garagem</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <p><i class="fa fa-home"></i> Residência</p>
                                        <label class="radio-inline"><input name="nGaragemResidencia" type="radio" value="Sim" required>Sim</label>
                                        <label class="radio-inline"><input name="nGaragemResidencia" type="radio" value="Nao">Não</label>
                                    </div>
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
                                        <p><i class="	fa fa-exclamation-triangle"></i> Acidente</p>
                                        <label class="radio-inline"><input name="nSeguroAcidente" type="radio" value="Sim" required>Sim</label>
                                        <label class="radio-inline"><input name="nSeguroAcidente" type="radio" value="Nao">Não</label>
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