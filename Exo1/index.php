<?php require ("user.php"); ?>
<?php require ("personnage.php"); ?>
<link rel="stylesheet" href="user.css">
<html>

    <head>
    </head>
    <body>
    <?php
        
        $Utilisateur1 = new User();
        
        // CODER ?>
        <h3>Exercice 1<h3>
    <?php $Utilisateur1->AfficherUser();
                
    ?>

        <h3>Exercice 2<h3>

    <?php $Perso1 = new Personnage();
    $Perso1->AfficherVie();
    ?>