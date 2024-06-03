<?php
require_once ("config.php");



    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
                $nomeUser = mysqli_real_escape_string($conn, $_POST['nome']);
                $emailUser = mysqli_real_escape_string($conn, $_POST['email']);
                $senhaUser = mysqli_real_escape_string($conn, $_POST['senha']);
                $niveis_acesso = 2;

                $sql = "INSERT INTO tabela_usuarios (nome, email, senha, niveis_acesso) VALUES ('$nomeUser','$emailUser' , '$senhaUser', '$niveis_acesso')";
                mysqli_query($conn, $sql);
                if(isset($sql)){
                        echo "usuario cadastrado: " ;
                        

                }else{
                    echo "usuario nao cadastrado";
                    
                }
}

