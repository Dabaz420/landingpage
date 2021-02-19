<?php

    include "mod.pdo.php";

    if(isset($_REQUEST["info"])){
        try{
            $requete = "INSERT INTO `Informations` (`info`)
            VALUE (:info);";
            $prepare = $pdo->prepare($requete);
            $prepare->execute(array(
                ":info" => $_REQUEST["info"]
            ));
            $res = $prepare->rowCount();

            if($res == 1){
                header("Location: ?backoffice#Infocreated");
            }
        }
        catch (PDOException $e){
            $pdo = NULL;
            exit("❌🙀❌ OOPS :\n" . $e->getMessage());
        }
    }