<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'crudUsuarios');

$conn = new MySQLi(HOST,USER,PASS,BASE);

// if(isset($conn)){
//     echo 'conectado com sucesso';
// }else{
//     echo 'nao conectado';
// }

