<?php

    echo "<!DOCTYPE html>
          <html lang='fr'>
          <head>
          <meta charset='UTF-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1.0'>
          <meta name='description' content='". htmlentities($Description, ENT_QUOTES) ."'>
          <style>
              body{
                  background-color: ". htmlentities($backgroundColor, ENT_QUOTES) .";
                  color : ". htmlentities($Color, ENT_QUOTES) .";
              }
              
              a{
                  color : ". htmlentities($backgroundColor, ENT_QUOTES) .";
                  filter : invert(100%);
              }
          </style>
          <link rel='stylesheet' href='style/styledefault.css'>
          <title>". htmlentities($Titre, ENT_QUOTES) ."</title>
          </head>
          <body>";

    echo "<div class='Info'>";
    foreach($resultatInformations as $key => $value){
        echo "<p>". htmlentities($value["info"], ENT_QUOTES) ."</p>";
    }
    echo "</div>";

    echo "<div class='Liens'>";
    foreach($resultatLiens as $key => $value){
        echo "<a href='". htmlentities($value["lien"], ENT_QUOTES) ."' target='blank'>". htmlentities($value["lien"], ENT_QUOTES) ."</a>
              </br>";
    }
    echo "</div>";
        
    echo "</body>
          </html>";