<?php
/* Clase para ejecutar las consultas a la Base de Datos*/
class ejecutarSQL{
        public static function connection(){
            
			$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password,$options);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	 


    // public static function conection(){
    //     if(!$conn=  mysqli_connect(SERVER,USER,PASS,BD)){
    //         echo "Error en el servidor, verifique sus datos";
    //     }
    //     /* Codificar la información de la base de datos a UTF8*/
    //     mysqli_set_charset($conn, "utf8");
    //     return $conn;  
    // }
    public static function consultar($query) {
        if (!$consul = mysqli_query(ejecutarSQL::connection(), $query)) {
            echo 'Error en la consulta SQL ejecutada';
        }
        return $consul;
    }  
}
/* Clase para hacer las consultas Insertar, Eliminar y Actualizar */
class consultasSQL{
    public static function InsertSQL($tabla, $campos, $valores) {
        if (!$consul = ejecutarSQL::consultar("INSERT INTO $tabla ($campos) VALUES($valores)")) {
            die("Ha ocurrido un error al insertar los datos en la tabla");
        }
        return $consul;
    }
    public static function DeleteSQL($tabla, $condicion) {
        if (!$consul = ejecutarSQL::consultar("DELETE FROM $tabla WHERE $condicion")) {
            die("Ha ocurrido un error al eliminar los registros en la tabla");
        }
        return $consul;
    }
    public static function UpdateSQL($tabla, $campos, $condicion) {
        if (!$consul = ejecutarSQL::consultar("UPDATE $tabla SET $campos WHERE $condicion")) {
            die("Ha ocurrido un error al actualizar los datos en la tabla");
        }
        return $consul;
    }
    public static function clean_string($val){
        $val=trim($val);
        $val=stripslashes($val);
        $val=str_ireplace("<script>", "", $val);
        $val=str_ireplace("</script>", "", $val);
        $val=str_ireplace("<script src", "", $val);
        $val=str_ireplace("<script type=", "", $val);
        $val=str_ireplace("SELECT * FROM", "", $val);
        $val=str_ireplace("DELETE FROM", "", $val);
        $val=str_ireplace("INSERT INTO", "", $val);
        $val=str_ireplace("--", "", $val);
        $val=str_ireplace("^", "", $val);
        $val=str_ireplace("[", "", $val);
        $val=str_ireplace("]", "", $val);
        $val=str_ireplace("==", "", $val);
        $val=str_ireplace(";", "", $val);
        return $val;
    }
}
?>
