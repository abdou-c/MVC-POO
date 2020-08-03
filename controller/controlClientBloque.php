<?php
    require_once '../model/ClientBloque.php';
    require_once '../entities/ClassClientBloque.php';

    require_once '../model/compteBloque.php';
    require_once '../entities/ClassCompteBloque.php';
    // apres les require je mets les conditions
    $ControlCompteBloque = FALSE;

    if(!empty($_POST)){
        $clientBloque = new ClassClientBloque();
        $modelBloque = new clientBloque();
        
    $clientBloque->setNom($_POST['nameClient']);
    $clientBloque->setPrenom($_POST['clientUsername']);
    $clientBloque->setTelephone($_POST['telephoneClient']);
    $clientBloque->setCni($_POST['clientId']);
    $clientBloque->setAdresse($_POST['clientMail']);
    $clientBloque->setSexe($_POST['sexeBloque']);
    $clientBloque->setDateNaiss($_POST['dateNaissBloque']);
//je donne le resultat
    $resultat = $modelBloque->insertClientBloque($clientBloque);

    if($resultat == 1){
        echo "client enregistrer";
    }else{
        echo "client non enregistrer!";
    }

    $ControlCompteBloque=TRUE;

        if($ControlCompteBloque == TRUE){
            $compteBloque = new ClassCompteBloque();
            $modelBloque = new compteBloque();

            $compteBloque->setNumero($_POST['numberCompteBloque']);
            $compteBloque->setSolde($_POST['soldeBloque']);
            $compteBloque->setFraisouv($_POST['fraisOuvBloque']);
            $compteBloque->setRemuneration($_POST['remunerationBloque']);
            $compteBloque->setDateouv($_POST['dateOuvertBloque']);
            $compteBloque->setDateferm($_POST['dateFermetureBloque']);

            $resultat = $modelBloque->insertCompteBloque($compteBloque);

            if($resultat == 1){
                echo "client enregistrer";
            }else{
                echo "client non enregistrer!";
            }
        }

    }




?>