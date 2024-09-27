<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname ="qw";



$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}
$id= $_POST['id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$dispositivo = $_POST['dispositivo'];
$mes = $_POST['mes'];
$aporte = $_POST['aporte'];

$sql = "INSERT INTO php(id,nombre,telefono,dispositivo,mes,aporte) VALUES ('$id', '$nombre', '$telefono','$dispositivo','$mes','$aporte')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();