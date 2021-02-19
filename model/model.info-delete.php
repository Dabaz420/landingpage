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
            $requete = "DELETE FROM `Informations`
            WHERE `id` = :id;";
            $prepare = $pdo->prepare($requete);
            $prepare->execute(array(
                ":id" => $_REQUEST["id"]
            ));
            $res = $prepare->rowCount();

            if($res == 1){
                header("Location: ?backoffice#InfoDelete");
            }
        }
        catch (PDOException $e){
            $pdo = NULL;
            exit("❌🙀❌ OOPS :\n" . $e->getMessage());
        }
    }
    return($reslutatInfo);