<?php

$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'leagueoflegends';

$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_set_charset($db, 'utf8mb4');

