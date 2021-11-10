<?php
function insertaElemento($usuario,$contrasenya,$numerocuenta){
    
    try {
        $conexion = new PDO("mysql:host=localhost".";dbname=tienda","developer","developer");

        $consulta =$conexion->prepare("INSERT INTO datostienda (usuario, contrasenya, numerocuenta) VALUES (?,?,?)"); 
        $consulta->bindParam(1,$usuario);
        $consulta->bindParam(2,$contrasenya);
        $consulta->bindParam(3,$numerocuenta);
        $consulta->execute();
        return $conexion->lastInsertId();

    } catch (PDOException $e) {
        echo ("Fallo");
        return false;
    }           
        
}
?>