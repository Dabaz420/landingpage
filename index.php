<?php

    parse_str($_SERVER["QUERY_STRING"], $qs);
    $keys = array_keys($qs); // grab 'em all, if any
    $route = array_shift($keys); // first one
    switch ($route) {

        case "login":
            include("controller/ctrl.login.php");
        break;

        case "login-checkin":
            include("controller/ctrl.login-checkin.php");
        break;

        case "backoffice":
            include("controller/ctrl.backoffice.php");
        break;

        case "logout":
            include("controller/ctrl.logout.php");
        break;

        case "style":
            include("controller/ctrl.style.php");
        break;

        case "style-insert":
            include("controller/ctrl.style-insert.php");
        break;

        case "info":
            include("controller/ctrl.info.php");
        break;

        case "info-update":
            include("controller/ctrl.info-update.php");
        break;

        case "info-delete":
            include("controller/ctrl.info-delete.php");
        break;
        
        case "info-create":
            include("controller/ctrl.info-create.php");
        break;

        case "liens":
            include("controller/ctrl.liens.php");
        break;

        case "lien-cree":
            include("controller/ctrl.lien-cree.php");
        break;

        case "lien-editer":
            include("controller/ctrl.lien-editer.php");
        break;

        case "lien-supprimer":
            include("controller/ctrl.lien-supprimer.php");
        break;

        case "titre":
            include("controller/ctrl.titre.php");
        break;

        case "titre-update":
            include("controller/ctrl.titre-update.php");
        break;

        case "description":
            include("controller/ctrl.description.php");
        break;

        case "description-update":
            include("controller/ctrl.description-update.php");
        break;

        default:
            include("controller/ctrl.homepage.php");
        break;

    }

    exit;