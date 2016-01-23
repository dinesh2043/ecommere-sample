<?php    
require('msql.class.php'); // include mysql-class
$dbObj = new mysql('mysql.metropolia.fi', 'dineshs', 'password2043', 'dineshs'); // make an object from mysql-class

// make the connection
$dbObj->connect();
$dbObj->select();
?> 