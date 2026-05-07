<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portefolio</title>
        <!--Liaison au fichier css de Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <?php
        session_start();
        include 'vues/v_nav.php';
        
        
        if (!isset($_REQUEST['uc']))
        {
            $_REQUEST['uc'] = 'portefolio';
        }
        $uc = htmlspecialchars($_REQUEST["uc"]);
        switch ($uc)
        {
            case 'accueil':
                include 'controleur/controleur_accueil.php';
                break;
            case 'formation':
                include 'controleur/controleur_formation.php';
                break;
            case 'slam':
                include 'controleur/controleur_slam.php';
                break;
            case 'sisr':
                include 'controleur/controleur_sisr.php';
                break;
            case 'semestre1':
                include 'controleur/controleur_semestre1.php';
                break;
            case 'semestre2':
                include 'controleur/controleur_semestre2.php';
                break;
            case 'semestre3':
                include 'controleur/controleur_semestre3.php';
                break;
                case 'semestre4':
                    include 'controleur/controleur_semestre4.php';
                    break;
            case 'gestionPatrimoine':
                include 'controleur/controleur_gestionPatrimoine.php';
                break;
            case 'veilleTechnologique':
                include 'controleur/controleur_veilleTechnologie.php';
                break;
            case 'certification':
                include 'controleur/controleur_certification.php';
                break;
            case 'contact':
                include 'controleur/controleur_contact.php';
                break;
            case 'atelierProfessionalisation':
                include 'controleur/controleur_AtelierProfessionalisation.php';
                break;
            case 'stage':
                include 'controleur/controleur_Stage.php';
                break;
            case 'stage2025':
                include 'controleur/controleur_Stage2025.php';
                break;
            case 'stage2026':
                include 'controleur/controleur_Stage2026.php';
                break;
            default:
                include 'vues/v_portefolio.php';
                break;
        }
        ?>
        <!-- lien Bootstrap Bundle JavaScript plugin(includes Popper)-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>
</html>