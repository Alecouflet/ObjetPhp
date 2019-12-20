<?php 
    class joueur
    {
        // propriété :
        private $_Pseudo;
        private $_Vie;

        // méthode :
        public function __construct($SonPseudo,$SaVie)
        {
            $this->_Vie = $SaVie;
            $this->_Pseudo = $SonPseudo;
        }
        public function Attaquer($Attaque1)
        {
            echo '<p>'.$this->_Pseudo.' attaque<p>';
            $Attaque1->Defendre(50);
        }
        public function Defendre($Def){
            $this->_vie = $Def;
            echo '<p>'.$this->_Pseudo.' a plus que '.$this->_vie.' hp.<p>';
        }
    
    }
?>