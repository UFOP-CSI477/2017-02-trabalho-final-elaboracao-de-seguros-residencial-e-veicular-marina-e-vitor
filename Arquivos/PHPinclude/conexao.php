<?php

try {
    /* Estabelecimento de conexão do BD */
    $CONEXAO = new PDO("mysql:host=localhost;dbname=seguradora", 'root', '');
    $CONEXAO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* Sucesso na Conexão */
    echo '<div class = "panel panel-success">
    <div class = "panel-heading">Conectado</div>
    <div class = "panel-body">Sucesso na conexão com a seguradora.</div>
    </div>';
} catch (PDOException $e) {
    /* Fracasso na Conexão */
    echo '<div class = "panel panel-danger">
    <div class = "panel-heading">Erro</div>
    <div class = "panel-body">Falha na conexão: ' . $e->getMessage() . '</div>
    </div>';
}
?>