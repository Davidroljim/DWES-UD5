<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    function getUser ($usuario){
    
        try {
            $conexion = new PDO("mysql:host=localhost".";dbname=tienda","developer","developer");
    
            $consulta =$conexion->prepare("SELECT * FROM datostienda  WHERE usuario=?"); 
            $consulta->bindParam(1,$usuario);
            $consulta->execute();
            
            $retorno = $consulta->fetch(PDO::FETCH_ASSOC);
            $conexion=null;
            return $retorno;
    
        } catch (PDOException $e) {
            echo ("Fallo");
            return false;
        }

    }

    ?>


</body>
</html>