<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'crudusuarios');

$conn = new MySQLi(HOST,USER,PASS,BASE);

// if($conn->connect_errno){
//     echo 'erro';
// }else{
//     echo 'conectado';
// }

