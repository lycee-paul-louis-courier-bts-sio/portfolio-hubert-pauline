<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$gerer = htmlspecialchars($_REQUEST['gerer']);
switch ($gerer) {
     case "stage":
        include 'vues/v_stage.php';
        break;
    case "atelierProfessionalisation":
        include 'vues/v_atelierProfessionalisation.php';
        break;
    
}