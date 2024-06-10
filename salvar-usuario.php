<?php
include("config.php");



if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
    $nomeUser = mysqli_real_escape_string($conn, $_POST['nome']);
    $emailUser = mysqli_real_escape_string($conn, $_POST['email']);
    $senhaUser = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senhaUser);
    $niveis_acesso = 2;

    $sql = "INSERT INTO tabela_usuarios (nome, email, senha, niveis_acesso) VALUES ('$nomeUser','$emailUser' , '$senha', '$niveis_acesso')";
    mysqli_query($conn, $sql);
    if (isset($sql)) {
        echo '<html>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                    <div class="justify-content-center spinner-border text-success" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                <script>

                setInterval(function() {
    window.location.href = "dash.php";
}, 2000);
                </script>
                      


                  
                  </html>';
    } else {
        echo "usuario nao cadastrado";
        header("location:index.php");
    }
}
