<?php

require_once 'connect.php';

$host = 'localhost';
$user = 'developer';
$password = 'root';
$database = 'my_db';

$import = '../dumb_db.sql';
$command = 'mysql -h' . $host . ' -u' . $user . ' -p' . $password . ' root' . $database . ' < ' . $import;
exec($command, $output, $worked);
header('location:/index.php');