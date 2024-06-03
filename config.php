<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '123456789');
define('BASE', 'crudusuarios');

$conn = new MySQLi(HOST,USER,PASS,BASE);

// if($conn->connect_errno){
//     echo 'erro';
// }else{
//     echo 'conectado';
// }

