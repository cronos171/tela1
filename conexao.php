<?php

$hostname = "localhost";
$bancodedados = "nvisitas";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->errno . ") " . $mysqli->connect_error;
} else {
    echo "!";
}

?>
