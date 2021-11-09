<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">

    <tr>
        <td style="text-align: center;">NOMBRE</td><td style="text-align: center;">FUNCION</td><td style="text-align: center;">VALORES</td>
    </tr>

    <tr>
        <td>session.use_cookies</td><td>session.use_cookies especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente. Por defecto es 1 (habilitado).</td><td>Boolean</td>
    </tr>
    <tr>
        <td>session.use_only_cookies</td><td>session.use_only_cookies especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente. Habilitar este ajuste previene ataques que implican pasar el id de sesión en la URL. Por defecto es 1 (habilitado).</td><td>Boolean</td>
    </tr>
    <tr> 
        <td>session.save_handler</td><td>session.save_handler define el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión.</td><td>String</td>
    </tr>
    <tr>
        <td>session.name</td><td>session.name specifica el nombre de la sesión que se usa como nombre de cookie. Sólo debería contener caracteres alfanuméricos. Por defecto es PHPSESSID.</td><td>String</td>
    </tr>
    <tr>
        <td>session.auto_start</td><td>session.auto_start especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición. Por defecto es 0 (deshabilitado).</td><td>Boolean</td>
    </tr>
    <tr>
        <td>session.cookie_lifetime</td><td>session.cookie_lifetime especifica el tiempo de vida en segundos de la cookie que es enviada al navegador. El valor 0 significa "hasta que el navegador se cierre". Por defecto es 0.</td><td>Integer</td>
    </tr>
    <tr>
        <td>session.gc_maxlifetime</td><td>session.gc_maxlifetime especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada. La recolección de basura puede suceder durante el inicio de sesiones </td><td>Integer</td>
    </tr>

    </table>

</body>
</html>