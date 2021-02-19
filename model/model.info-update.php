<?php

    include("mod.pdo.php");

    try{
        $requete = "SELECT * FROM `Informations`
                    WHERE `id` = :id ;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute(array(
            ":id" => $_REQUEST["id"]
        ));
        $reslutatInfo = $prepare->fetch();
    }
    catch (PDOException $e){
        $pdo = NULL;
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

    if(isset($_REQUEST["info"])){
        try{
            $requete = "UPDATE `Informations` SET
                       `info` = :info
                       WHERE `id` = :id ;";
            $prepare = $pdo->prepare($requete);
            $prepare->execute(array(
                ":info" => $_REQUEST["info"],
                ":id" => intval($_REQUEST["id"])
            ));
            $res = $prepare->rowCount();

            if($res == 1){
                header("Location: ?backoffice#InfoUpdated");
            }
        }
        catch (PDOException $e){
            $pdo = NULL;
            exit("❌🙀❌ OOPS :\n" . $e->getMessage());
        }
    }
    return($reslutatInfo);