<?php

    include("mod.pdo.php");

    try{
        $requete = "UPDATE `Titre` SET
        `Titre` = :Titre
        WHERE `id` = 1 ;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute(array(
            ":Titre" => $_REQUEST["titre"]
        ));
        $res = $prepare->rowCount();

        if($res == 1){
            header("Location: ?backoffice#TitleUpdate");
        }
    }
    catch (PDOException $e){
        $pdo = NULL;
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

    exit;