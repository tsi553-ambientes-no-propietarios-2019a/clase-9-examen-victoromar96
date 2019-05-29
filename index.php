<?php
include('common/utils.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesion</title>
</head>
<body>
    <h1>Inicio de Sesion</h1>

    <form action="php/process_login.php" method="post">
        <input type="text" name="username" placeholder="Usuario">
        <input type="password" name="password" placeholder="Clave">
        <button>Ingresar</button>
        <a href="registro.php"> Registrar </a>
    </form>
</body>
</html>
