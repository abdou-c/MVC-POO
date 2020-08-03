<?php
    class ClassCompteCourant{
        private $numero;
        private $solde;
        private $agios;
        private $dateOuvert;
        
        public function __construct()
        {

        }

        /**
         * Get the value of dateOuvert
         */ 
        public function getDateOuvert()
        {
                return $this->dateOuvert;
        }

        /**
         * Set the value of dateOuvert
         *
         */ 
        public function setDateOuvert($dateOuvert)
        {
                $this->dateOuvert = $dateOuvert;

                return $this;
        }

        /**
         * Get the value of agios
         */ 
        public function getAgios()
        {
                return $this->agios;
        }

        /**
         * Set the value of agios
         *
         */ 
        public function setAgios($agios)
        {
                $this->agios = $agios;

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
         */ 
        public function setSolde($solde)
        {
                $this->solde = $solde;

                return $this;
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
         */ 
        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }
    }



?>