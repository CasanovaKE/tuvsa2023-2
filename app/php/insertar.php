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
$cs = $con -> query("INSERT INTO registro (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')");

$con -> close();

//echo '<script>alert("Datos Insertados")</script>';
//echo '<script>window.location="../../registro.html"</script>';


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_css_bootstrap.min.css">
    <title>Datos</title>
</head>
<body>
    <script src="../../js/sweetalert2.js"></script>
    <script>
    Swal.fire({
        title: 'Datos Guardados',
        icon: 'success',
        confirmButtonColor: '#3085d6',
    }).then((result) => {
            if (result.isConfirmed) {
            window.location='../../registro.html'
        }
    })
    </script>
</body>
</html>