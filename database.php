<?php

    include_once './dbconfig.php';

    $database = $_ENV['database'];
    $user = $_ENV['user'];
    $password = $_ENV['password'];
    $host = $_ENV['host'];

    $conexao = mysqli_connect($host, $user, $password, $database);
?>