<?php require ("user.php"); ?>
<?php require ("personnage.php"); ?>
<link rel="stylesheet" href="user.css">
<html>
 
    <head>
    </head>
    <body>julien
 

        <h3>Exercice 2<h3>

    <?php $Perso1 = new Personnage();
    $Perso1->AfficherVie();
    ?>

    <?php echo  highlight_file('./'.basename(__FILE__),true);?>
    </body>
</html>