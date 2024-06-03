<?php 
    // session_start();
    // require_once ('config.php');
?>
<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faça seu  Cadastro!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body bg-body-tertiary>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container mt-5">
        <div class="row aling-items-center">
            <div class="col-md-10 mx-auto col-lg-5 ">
            <p class="h2">Cadastre-se</p>
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
            <button type="submit" class="btn btn-success">Enviar</button>
            <p>Já tem uma conta? <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="index.php">Entrar</a> </p>
        </div>

    </form>
               
            </div>
        </div>
    </div>

</body>

<?php



// session_start();
// require_once('config.php');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
//         $nomeUser = mysqli_real_escape_string($conn, $_POST['nome']);
//         $emailUser = mysqli_real_escape_string($conn, $_POST['email']);
//         $senhaUser = mysqli_real_escape_string($conn, $_POST['senha']);

//         // Consulta SQL usando prepared statement
//         $sql = "INSERT INTO tabela_usuarios (nomeUser, emailUser, senhaUser) VALUES ('nomeUser','emailUser' , 'senhaUser')";
//         $stmt = mysqli_prepare($conn, $sql);
//         mysqli_stmt_bind_param($stmt, 'sss', $nomeUser, $emailUser, $senhaUser);

//         if (mysqli_stmt_execute($stmt)) {
//             echo 'Cadastrado com sucesso!';
//         } else {
//             echo 'Erro na inserção: ' . mysqli_error($conn);
//         }

//         mysqli_stmt_close($stmt);
//     }
// }

// $nomeUser = $_POST['nome'];
// $emailUser = $_POST['email'];
// $senhaUser = $_POST['senha'];

// $sql = "INSERT INTO tabela_usuarios (nomeUser, emailUser, senhaUser) VALUES ('$nomeUser', '$emailUser', '$senhaUser' )";
// mysqli_query($conn, $sql);

// if(isset($sql)){
//     echo 'Cadastrado';
    
// }
?>

