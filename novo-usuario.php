<?php 
    session_start();
    require_once ('config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Novo Usuários</h1>

    <form action="?page-salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

    </form>
</body>

</html>

<?php



session_start();
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        $nomeUser = mysqli_real_escape_string($conn, $_POST['nome']);
        $emailUser = mysqli_real_escape_string($conn, $_POST['email']);
        $senhaUser = mysqli_real_escape_string($conn, $_POST['senha']);

        // Consulta SQL usando prepared statement
        $sql = "INSERT INTO tabela_usuarios (nomeUser, emailUser, senhaUser) VALUES ('nomeUser','emailUser' , 'senhaUser')";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'sss', $nomeUser, $emailUser, $senhaUser);

        if (mysqli_stmt_execute($stmt)) {
            echo 'Cadastrado com sucesso!';
        } else {
            echo 'Erro na inserção: ' . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}

// $nomeUser = $_POST['nome'];
// $emailUser = $_POST['email'];
// $senhaUser = $_POST['senha'];

// $sql = "INSERT INTO tabela_usuarios (nomeUser, emailUser, senhaUser) VALUES ('$nomeUser', '$emailUser', '$senhaUser' )";
// mysqli_query($conn, $sql);

// if(isset($sql)){
//     echo 'Cadastrado';
    
// }
?>