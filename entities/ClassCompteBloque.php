<?php
    class ClassCompteBloque{
        private $numero;
        private $solde;
        private $fraisouv;
        private $remuneration;
        private $dateouv;
        private $dateferm;

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
         */ 
        public function setNumero($numero)
        {
                $this->numero = $numero;

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
         */ 
        public function setRemuneration($remuneration)
        {
                $this->remuneration = $remuneration;

                return $this;
        }

        /**
         * Get the value of fraisouv
         */ 
        public function getFraisouv()
        {
                return $this->fraisouv;
        }

        /**
         * Set the value of fraisouv
         *
         */ 
        public function setFraisouv($fraisouv)
        {
                $this->fraisouv = $fraisouv;

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
         * Get the value of dateferm
         */ 
        public function getDateferm()
        {
                return $this->dateferm;
        }

        /**
         * Set the value of dateferm
         *
         */ 
        public function setDateferm($dateferm)
        {
                $this->dateferm = $dateferm;

                return $this;
        }

        /**
         * Get the value of dateouv
         */ 
        public function getDateouv()
        {
                return $this->dateouv;
        }

        /**
         * Set the value of dateouv
         *
         */ 
        public function setDateouv($dateouv)
        {
                $this->dateouv = $dateouv;

                return $this;
        }
    }




?>