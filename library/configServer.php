<?php
$hostname = "bdsrvdream.mysql.database.azure.com";
$username = "Administrador";
$password = "Azure.comsrv";
$database = "store";
$port = "3306";
$options = array(
    PDO::MYSQL_ATTR_SSL_CA => 'assets/img/DigiCertGlobalRootCA.crt.pem'
);
$conn = mysqli_init();

