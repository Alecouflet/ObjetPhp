<?php require ("joueur.php"); ?>
<link rel="stylesheet" href="user.css">
<html>
 <head>
</head>
<body>
    <h3>Exercice 4<h3>

<?php 
$Perso1 = new joueur("Julien",100);
$Perso2 = new joueur("Alexis",100);
$Perso1->Attaquer($Perso2);
$Perso2->Attaquer($Perso1);
?>
<?php echo  highlight_file('./'.basename(__FILE__),true);?>
</body>
</html>