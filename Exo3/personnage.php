<?php 
    class Personnage
    {
        // propriété :
        private $_Pseudo;
        private $_Vie;

        
        // méthode :
        public function __construct($SonPseudo,$SaVie){
            $this->_Vie = $SaVie;
            $this->_Pseudo = $SonPseudo;
        }
        public function Afficher(){
            echo "<p>La vie du perso est ".$this->_Vie."<p>";
            echo "<p>Son pseudo est ".$this->_Pseudo."<p>";
        }
    }
?>