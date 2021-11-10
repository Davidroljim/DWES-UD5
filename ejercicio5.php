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

    include "ejercicio5BBDD.php";


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $usuario=strip_tags($_POST["usuario"]);
	    $usuario=stripslashes($_POST["usuario"]);
		$usuario=htmlspecialchars($_POST["usuario"]);

        $contrasenya=strip_tags($_POST["contrasenya"]);
	    $contrasenya=stripslashes($_POST["contrasenya"]);
		$contrasenya=htmlspecialchars($_POST["contrasenya"]);

        $numerocuenta=strip_tags($_POST["numerocuenta"]);
	    $numerocuenta=stripslashes($_POST["numerocuenta"]);
		$numerocuenta=htmlspecialchars($_POST["numerocuenta"]);

        $furbo=password_hash($contrasenya,PASSWORD_DEFAULT);

        insertaElemento($usuario,$furbo,$numerocuenta);

    }
    ?>


<form class="form-register" enctype="multipart/form-data" action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="POST">
            <h2 class="form-titulo">Registrate:</h2>
            <div class="contenedor-inputs">
                <input type="text" name="usuario" placeholder="Usuario" class="input-100" required>
                <input type="password" name="contrasenya" placeholder="Contraseña" class="input-100" required>
                <input type="text" name="numerocuenta" placeholder="Numero de Cuenta" class="input-100" required>
                <input type="submit" value="Registrar" class="btn-enviar" name="submit">
                <div id="errores"></div>
            </div>
        </form>

</body>
</html>