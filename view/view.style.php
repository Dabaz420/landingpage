<?php

    echo "<!DOCTYPE html>
            <html lang='fr'>
            <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Changer la couleur</title>
            </head>
            <body>
            <form method='post' action='?style-insert'>
            <input type='color' name='background' value='".htmlentities($backgroundColor, ENT_QUOTES)."' required>
            <input type='color' name='text' value='".htmlentities($Color,ENT_QUOTES)."' required>
            <input type='submit'>
            </form>
            </body>
            </html>";