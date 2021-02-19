<?php
    
    include "view/view.login.php";    
    include "model/mod.pdo.php";

    try{
        $requete = "SELECT * FROM `users`;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute();
        $resultatlogin = $prepare->fetchAll();
        return($resultatlogin);
    }
    catch (PDOException $e){
        $pdo = NULL;
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
    
    exit;