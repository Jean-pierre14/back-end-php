<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'eteyelodb');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('Connection a echoue' . mysqli_connect_error());
mysqli_set_charset($connect, 'utf8');