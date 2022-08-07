<?php
header('Access-Control-Arrow-Origin: *');
$db = mysqli_connect('localhost', 'root', 'root', 'appsalon');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
};

