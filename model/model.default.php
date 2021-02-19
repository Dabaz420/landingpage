<?php

    include "mod.pdo.php";

    try{
        $requete = "SELECT * FROM `Style`;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute();
        $resultatStyle = $prepare->fetch();
        $backgroundColor = $resultatStyle["background"];
        $Color = $resultatStyle["text"];
    }
    catch (PDOException $e){
        $pdo = NULL;
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
        
    }

    try{
        $requete = "SELECT * FROM `Informations`;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute();
        $resultatInformations = $prepare->fetchAll();
    }
    catch (PDOException $e){
        $pdo = NULL;
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
        
    }

    try{
        $requete = "SELECT * FROM `Liens`;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute();
        $resultatLiens = $prepare->fetchAll();
    }
    catch (PDOException $e){
        $pdo = NULL;
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
        
    }

    try{
        $requete = "SELECT `Titre` FROM `Titre`
                    WHERE id = 1;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute();
        $resultatTitre = $prepare->fetch();
        $Titre = $resultatTitre["Titre"];
    }
    catch (PDOException $e){
        $pdo = NULL;
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
        
    }

    try{
        $requete = "SELECT `description` FROM `description`
                    WHERE id = 1;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute();
        $resultatDescription = $prepare->fetch();
        $Description = $resultatDescription["description"];
    }
    catch (PDOException $e){
        $pdo = NULL;
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
        
    }

    return[$backgroundColor, $Color, $resultatInformations, $resultatLiens, $Titre, $Description];

    exit;