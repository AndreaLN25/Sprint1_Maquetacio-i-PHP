<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nom = $_POST["nom"];
    $cognom = $_POST["cognom"];
    $mail = $_POST["email"];
    $_SESSION["usuari"] = $nom;

    echo "Hola .$nom .$cognom";
    echo "Digues la teva direcció de correu electrònic: .$mail"
   ?>
</body>
</html>

