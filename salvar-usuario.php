<?php
require_once 'config.php';
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        break;

        $slque = "INSERT INTO tabela_usuarios (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}' )";

        $res = $conn->query($sql);

    case 'editar':
        # code...
        break;

    case 'salvar':
        # code...
        break;
}
