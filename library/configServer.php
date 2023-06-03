<?php
$hostname = "bdsrvdream.mysql.database.azure.com";
$port = "3306";
$database = "store";
$username = "Administrador";
$password = "Azure.comsrv";
$options = array(
    PDO::MYSQL_ATTR_SSL_CA => 'assets/img/DigiCertGlobalRootCA.crt.pem'
);
