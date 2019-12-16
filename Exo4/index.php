<?php require ("personnage.php"); ?>
<link rel="stylesheet" href="user.css">
<html>
 <head>
</head>
<body>
    <h3>Exercice 3<h3>

<?php $Perso1 = new Personnage("Julien",100);
    $Perso1->Afficher();
?>
<?php echo  highlight_file('./'.basename(__FILE__),true);?>
</body>
</html>