<?php

    include("mod.pdo.php");

    try{
        $requete = "SELECT * FROM `Liens`
                    WHERE `id` = :id ;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute(array(
            ":id" => $_REQUEST["id"]
        ));
        $reslutatLien = $prepare->fetch();
    }
    catch (PDOException $e){
        $pdo = NULL;
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

    if(isset($_REQUEST["lien"])){
        try{
            $requete = "UPDATE `Liens` SET
            `lien` = :lien
            WHERE `id` = :id;";
            $prepare = $pdo->prepare($requete);
            $prepare->execute(array(
                ":lien" => $_REQUEST["lien"],
                ":id" => $_REQUEST["id"]
            ));
            $res = $prepare->rowCount();

            if($res == 1){
                header("Location: ?backoffice#LinkUpdated");
            }
        }
        catch (PDOException $e){
            $pdo = NULL;
            exit("❌🙀❌ OOPS :\n" . $e->getMessage());
        }
    }
    return($reslutatLien);