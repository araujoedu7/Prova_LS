<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'crudUsuarios');

$conn = new MySQLi(HOST,USER,PASS,BASE);

// if($conn->connect_errno){
//     echo 'erro';
// }else{
//     echo 'conectado';
// }

