<?php 
session_start();
require_once("config.php");

?>

<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faça Login!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body bg-body-tertiary>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container mt-5">
        <div class="row aling-items-center">
            <div class="col-md-10 mx-auto col-lg-5 ">
            <p class="h2">Faça Login!</p>
            <form action="index.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Entrar</button>
            <p>Não tem uma conta? <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="novo-usuario.php">Entrar</a> </p>
        </div>

    </form>
               
            </div>
        </div>
    </div>

    
</body>
</html>
<?php
    $sql = "SELECT email, senha FROM tabela_usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $usuario_id);
?>
