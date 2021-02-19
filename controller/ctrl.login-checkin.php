<?php

    include("ctrl.login.php");

    foreach($resultatlogin as $key => $value){
        if($value["user_email"] == $_REQUEST["email"] && password_verify($_REQUEST["password"], $value["user_psw"])){
            include("ctrl.session-start.php");
            $_SESSION["connected"] = $_REQUEST["email"];
            $pdo = NULL;
            header("Location: ?backoffice#Bienvenu");
            exit;
        }
    }

    exit;