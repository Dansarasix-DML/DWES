<?php
    /**
     * @author Daniel Marín López
     * @version 0.01a
     */

    if (!isset($_POST["enviar"])) {
        header("location: aut_1.php");
    }
    session_start();

    include "./config/users.php";
    include "./lib/funciones.php";

    $user = test_input($_POST["usuario"]);
    $pass = test_input($_POST["passwd"]);


    foreach ($users as $key => $value) {
        if ($user == $users[$key]["user"] && $pass == $users[$key]["passwd"]) {
            $_SESSION["auth"] = true;
            $_SESSION["user"] = $users[$key]["user"];
            $_SESSION["profile"] = $users[$key]["profile"];
        }
    }    

    header("location: aut_1.php");
?>