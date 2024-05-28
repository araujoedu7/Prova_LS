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
                <form action="index.php" class="p-4 p-md-5 border rounder-3 bg-light border rounded" >
                    <div class="form-floater">
                        <label for="loginName">Email</label>
                        <input type="email" name="email" class="form-control" id="loginName" placeholder="Usuario">
                    </div>

                    <div class="form-floater">
                        <label for="loginSenha">Senha</label>
                        <input type="password" class="form-control" name="senha" id="loginPassword" placeholder="Senha">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="lembrar-me"> Lembrar-me
                        </label>
                    </div>
                     <button class="btn btn-lg btn-success" type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>

</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se as chaves 'email' e 'senha' estão definidas no array $_POST
    if (isset($_POST['email'], $_POST['senha'])) {
        $login = $_POST['email'];
        $senha = $_POST['senha'];
        // Verifique as credenciais e redirecione para a página de dashboard (dash.php) se estiverem corretas
        // (Você deve implementar essa lógica de autenticação)
        header("Location: dash.php");
        exit; // Importante: encerre a execução após o redirecionamento
    }
}
?>

</html>

