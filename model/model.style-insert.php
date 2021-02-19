<?php

    include("mod.pdo.php");

    try{
        $requete = "UPDATE `Style` SET
        `background` = :background,
        `text` = :text
        WHERE `id` = 1;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute(array(
            ":background" => $_REQUEST["background"],
            ":text" => $_REQUEST["text"]
        ));
        $res = $prepare->rowCount();

        if($res == 1){
            header("Location: ?backoffice#Stylechange");
        }
    }
    catch (PDOException $e){
        $pdo = NULL;
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

    exit;