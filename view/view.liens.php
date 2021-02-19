<?php

    echo "<!DOCTYPE html>
            <html lang='fr'>
            <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>A variabiliser</title>
            </head>
            <body>";

    foreach($resultatLiens as $key => $value){
        echo "<p>". htmlentities($value["lien"], ENT_QUOTES) ." 
        <a href='?lien-editer&id=". htmlentities($value["id"], ENT_QUOTES) ."'>Éditer</a>
        <a href='?lien-supprimer&id=". htmlentities($value["id"], ENT_QUOTES) ."'>Supprimer</a></p>";
    }

    echo "</br>
          <a href='?lien-cree'>Créer</a>
          </body>
          </html>";