<?php
    require_once 'dbConnect.php';
    require_once '../entities/ClassClientSimple.php';
    Class ClientSimpleModel extends dbConnect{
        private $db;
        public function __construct()
        {
           parent::__construct();
        }
        function insertClientSimple(ClassClientSimple $clientSimple){
            $pren = $clientSimple->getPrenom();
            $tel = $clientSimple->getTelephone();
            $cni = $clientSimple->getCni();
            $nom = $clientSimple->getNom();
            $mail = $clientSimple->getAdresse();
            $sexe = $clientSimple->getSexe();
            $dateNaiss = $clientSimple->getDateNaiss();
            
            $sql = "INSERT INTO client(id, nom, prenom, telephone, cni, adresse, sexe, dateNaiss) 
                    VALUES (null,'$nom',
                    '$pren',
                    '$tel',
                    '$cni',
                    '$mail','$sexe', '$dateNaiss')";
                    //  var_dump($sql);
                    //  die();
                  
                  if($this->base != null){
                    return $this->base->exec($sql); 
                  }else{
                      return null;
                  }
                    
        }
    }

?>
