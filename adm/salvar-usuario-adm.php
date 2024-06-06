<?php
 include("novo-usuario-adm.php");
 require_once ("../config.php");



//     if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
//                 $nomeUser = mysqli_real_escape_string($conn, $_POST['nome']);
//                 $emailUser = mysqli_real_escape_string($conn, $_POST['email']);
//                 $senhaUser = mysqli_real_escape_string($conn, $_POST['senha']);
//                 $niveis_acesso = 2;

//                 $sql = "INSERT INTO tabela_usuarios (nome, email, senha, niveis_acesso) VALUES ('$nomeUser','$emailUser' , '$senhaUser', '$niveis_acesso')";
//                 mysqli_query($conn, $sql);
//                 if(isset($sql)){
//                         echo "usuario cadastrado: " ;
//                         header("location:dash-adm.php");

//                 }else{
//                     echo "usuario nao cadastrado";

//                 }
// }

$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$email =mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
$senha = md5($senha);
$niveis_acesso = 2; 


// Preparando a declaração SQL
$sql = "INSERT INTO tabela_usuarios (nome, email, senha, niveis_acesso)
VALUES ('$nome', '$email', '$senha', '$niveis_acesso')";

// Executando a declaração SQL e verificando se foi bem-sucedida
if ($conn->query($sql) === TRUE) {

    echo "usuario cadastrado";
    header("location:dash-adm.php");
} else {

    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechando a conexão
$conn->close();
