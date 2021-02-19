<?php

    include("mod.pdo.php");

    try{
        $requete = "UPDATE `description` SET
        `description` = :description
        WHERE `id` = 1 ;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute(array(
            ":description" => $_REQUEST["description"]
        ));
        $res = $prepare->rowCount();

        if($res == 1){
            header("Location: ?backoffice#DescriptionUpdate");
        }
    }
    catch (PDOException $e){
        $pdo = NULL;
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

    exit;