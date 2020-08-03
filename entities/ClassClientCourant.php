<?php
        namespace entities;
    Class ClassClientCourant{
        private $nom;
        private $prenom;
        private $telephone;
        private $cni;
        private $adresse;
        private $salaire;
        private $sexe;
        private $dateNaiss;

        public function __construct()
        {

        }

        

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of telephone
         */ 
        public function getTelephone()
        {
                return $this->telephone;
        }

        /**
         * Set the value of telephone
         *
         */ 
        public function setTelephone($telephone)
        {
                $this->telephone = $telephone;

                return $this;
        }

        /**
         * Get the value of cni
         */ 
        public function getCni()
        {
                return $this->cni;
        }

        /**
         * Set the value of cni
         *
         */ 
        public function setCni($cni)
        {
                $this->cni = $cni;

                return $this;
        }

        /**
         * Get the value of adresse
         */ 
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         */ 
        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }

          /**
         * Get the value of salaire
         */ 
        public function getSalaire()
        {
                return $this->salaire;
        }

        /**
         * Set the value of salaire
         *
         */ 
        public function setSalaire($salaire)
        {
                $this->salaire = $salaire;

                return $this;
        }

        /**
         * Get the value of salaire
         */ 
        public function getSexe()
        {
                return $this->sexe;
        }

        /**
         * Set the value of salaire
         *
         */ 
        public function setSexe($sexe)
        {
                $this->sexe = $sexe;

                return $this;
        }

        /**
         * Get the value of dateNaiss
         */ 
        public function getDateNaiss()
        {
                return $this->dateNaiss;
        }

        /**
         * Set the value of dateNaiss
         *
         */ 
        public function setDateNaiss($dateNaiss)
        {
                $this->dateNaiss = $dateNaiss;

                return $this;
        }

      
    }
?>