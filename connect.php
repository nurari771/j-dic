<?php
$host = 'localhost';
$user = 'root';
$password = 'monday110';
$database = 'db'; //database name

mysql_connect($host, $user, $password);
mysql_select_db($database);
mysql_query("SET NAMES UTF8");