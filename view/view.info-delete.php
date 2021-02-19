<?php

    echo "<!DOCTYPE html>
            <html lang='fr'>
            <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Changer la couleur</title>
            </head>
            <body>     
            <form method='post' action=''>
            <label>Êtes vous sur de vouloir supprimer le lien ?</label>
            <input type='text' name='info' value='". htmlentities($reslutatInfo["info"], ENT_QUOTES) ."' required>
            <input type='submit'>
            </form>
            </body>
            </html>";