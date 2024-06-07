<?php
include_once("../config.php");

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Usuarios</title>
    <script src="https://kit.fontawesome.com/7ffdafc7d7.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="dash.php">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dash-adm.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo
                            Usuario
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php

                switch (@$_REQUEST["page"]) {
                    case "listar":;
                        include_once "listar-usuario-adm.php";
                        break;

                        case "novo":;
                        include("novo-usuario-adm.php");
                        break;

                    case "salvar":
                        include("salvar-usuario-adm.php");
                    default:
                        print "<h1> Bem vindo!</h1>";
                        
                }
                ?>

            </div>
        </div>
    </div>

    <br><br><br>
    <?php
    include("../controllers/excluir_usuario.php")
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            $sql = $conn->query("SELECT * FROM tabela_usuarios");
            while ($dados = $sql->fetch_object()) { ?>
                <tr>
                    <td><?= $dados->id ?></td>
                    <td><?= $dados->nome ?></td>
                    <td><?= $dados->email ?></td>
                    <td><?= $dados->senha ?></td>
                    <td>
                        <a href="editar_usuario-adm.php?id=<?= $dados->id ?>" class="btn btn-small btn-warning"> <i class="fa-solid fa-pen-to-square"></i> </a>
                        <a href="../controllers/excluir_usuario.php?id=<?= $dados->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>




    </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>