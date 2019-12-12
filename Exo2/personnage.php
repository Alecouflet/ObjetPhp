<?php 
    class Personnage
    {
        // propriété :
        private $_Pseudo;
        private $_Vie;

        // méthode :
        public function __construct(){
            $this->_Vie = 100;
        }
        public function AfficherVie(){
            echo "La vie du perso est".$this->_Vie;
        }
    }
?>