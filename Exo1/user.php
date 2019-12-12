<html>

<head>
<link rel="stylesheet" href="user.css">
</head>

<body>
        

<?php 
    class User 
    {
        // propriété :
        private $_nom;
        private $_prenom;

        // méthode :
        public function AfficherUser(){
            ?>
            <table>
                <tr>
                    <th>Je suis un User</th>
                </tr>
                <tr>
                    <td><p style="white-space:normal;solid black;width:115px"> -Nom : Lecouflet
                        -Prenom : Alexis</td>
                </tr>
                <tr>
                    <td>+AfficherUser() : void</td>
                </tr>
            </table>
            <?php }
    } ?>

    