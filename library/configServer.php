<?php
define("SERVER", "bdsrvdream.mysql.database.azure.com");
define("USER", "Administrador");
define("BD", "store");
define("PASS", "Azure.comsrv");
$conn = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($conn->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


