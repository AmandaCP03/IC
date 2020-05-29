<?php
    try {
        $link = new PDO('mysql:host=localhost:3307;dbname=quimica_de_materiais', 'root', 'usbw');
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
    

    $user = "bsts_quimica_de_materiais";
    $pass = "123quij456!";
    $db = "bsts_quimica_de_materiais";
    
    $link=mysqli_connect("pluto.ignitionserver.net:3306", $user, $pass, $db);

    //$link = new PDO("mysql:host=uranus.ignitionserver.net:3306;dbname=$db", $user, $pass);

?>
