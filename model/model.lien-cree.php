<?php

    include "mod.pdo.php";

    if(isset($_REQUEST["lien"])){
        try{
            $requete = "INSERT INTO `Liens` (`lien`)
            VALUE (:lien);";
            $prepare = $pdo->prepare($requete);
            $prepare->execute(array(
                ":lien" => $_REQUEST["lien"]
            ));
            $res = $prepare->rowCount();

            if($res == 1){
                header("Location: ?backoffice#LinkInserted");
            }
        }
        catch (PDOException $e){
            $pdo = NULL;
            exit("❌🙀❌ OOPS :\n" . $e->getMessage());
        }
    }