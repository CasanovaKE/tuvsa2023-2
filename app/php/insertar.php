<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

// variables del formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

 // conexion data
$con = new SQLite3("../data/tuvsa.db") or die("problemas para conectar");

// consulta a SQL
$cs = $con -> query("INSERT INTO usuarios (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')");

$con -> close();

echo '<script>alert("Datos Insertados")</script>';
echo '<script>window.location="../../registro.html"</script>';


?>