<?php require ("user.php"); ?>
<?php require ("personnage.php"); ?>
<link rel="stylesheet" href="user.css">
<html>

    <head>
    </head>
    <body>coucou
    
    
    
    
    <?php
        
        $Utilisateur1 = new User();
        
        // CODER ?>
        <h3>Exercice 1<h3>
    <?php
     $Utilisateur1->AfficherUser();
                
    ?>

       
<table>
                <tr>
                    <th>User</th>
                </tr>
                <tr>
                    <td><p style="white-space:normal;solid black;width:115px"> -Nom : string
                        -Prenom : string</td>
                </tr>
                <tr>
                    <td>+AfficherUser() : void</td>
                </tr>
            </table>

<?php echo  highlight_file('./'.basename(__FILE__),true);?>


   