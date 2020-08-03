<?php
    class ClassCompteEpargne{
        private $numero;
        private $solde;
        private $fraisOuvert;
        private $remuneration;
        private $dateOuverture;
        public function __construct()
        {

        }

        /**
         * Get the value of numero
         */ 
        public function getNumero()
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         *
\         */ 
        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }

        /**
         * Get the value of solde
         */ 
        public function getSolde()
        {
                return $this->solde;
        }

        /**
         * Set the value of solde
         *
\         */ 
        public function setSolde($solde)
        {
                $this->solde = $solde;

                return $this;
        }

        /**
         * Get the value of fraisOuvert
         */ 
        public function getFraisOuvert()
        {
                return $this->fraisOuvert;
        }

        /**
         * Set the value of fraisOuvert
         *
\         */ 
        public function setFraisOuvert($fraisOuvert)
        {
                $this->fraisOuvert = $fraisOuvert;

                return $this;
        }

        /**
         * Get the value of dateOuverture
         */ 
        public function getDateOuverture()
        {
                return $this->dateOuverture;
        }

        /**
         * Set the value of dateOuverture
         *
\         */ 
        public function setDateOuverture($dateOuverture)
        {
                $this->dateOuverture = $dateOuverture;

                return $this;
        }

        /**
         * Get the value of remuneration
         */ 
        public function getRemuneration()
        {
                return $this->remuneration;
        }

        /**
         * Set the value of remuneration
         *
\         */ 
        public function setRemuneration($remuneration)
        {
                $this->remuneration = $remuneration;

                return $this;
        }

        
    }



?>