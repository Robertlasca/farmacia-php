
<?php
session_start();

if($_SESSION['id_tipo']==2){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnico</title>
</head>
<body>
    <h1>Hola tecnico</h1>
    <a href="../controller/Logout.php">Cerrar sesión</a>
    
</body>
</html>

<?php

}else{
    header('Location: ../view/login.php');
}
?>