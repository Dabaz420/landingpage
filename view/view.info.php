<?php

    echo "<!DOCTYPE html>
            <html lang='fr'>
            <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Changer la couleur</title>
            </head>
            <body>";

    foreach($resultatInformations as $key => $value){
        echo "<p>".htmlentities($value["info"], ENT_QUOTES)."
              <a href='?info-update&id=".htmlentities($value["id"], ENT_QUOTES)."'>Éditer</a>
              <a href='?info-delete&id=".htmlentities($value["id"], ENT_QUOTES)."'>Supprimer</a>
              </p>";
    }

    echo "<a href='?info-create'>Créer</a>
          </body>
          </html>";