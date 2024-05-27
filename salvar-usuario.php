<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];
        break;

        $slque = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}' '{$data_nasc}')";

        $res = $conn->query($sql);

    case 'editar':
        # code...
        break;

    case 'salvar':
        # code...
        break;
}
