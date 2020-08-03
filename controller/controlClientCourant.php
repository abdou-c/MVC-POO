<?php
//en premier on va require le model et les entites
require_once '../model/clientCourant.php';
require_once '../entities/ClassClientCourant.php';

require_once '../model/compteCourant.php';
require_once '../entities/ClassCompteCourant.php';

$courant = FALSE;


if(!empty($_POST)){
    $clientCourant = new ClassClientCourant();
    $modelCourant = new ClientCourant();
    //apres on va commencer a recuperer les names

    $clientCourant->setNom($_POST['nomClient']);
    $clientCourant->setPrenom($_POST['prenomClient']);
    $clientCourant->setTelephone($_POST['callClient']);
    $clientCourant->setCni($_POST['numCniClient']);
    $clientCourant->setAdresse($_POST['adresseClient']);
    $clientCourant->setSalaire($_POST['Salaire']);
    $clientCourant->setSexe($_POST['sexeCourant']);
    $clientCourant->setDateNaiss($_POST['dateNaissCourant']);
//resultat
    $resultat = $modelCourant->insertClientCourant($clientCourant);



    //  if($ok == 1){
    //      echo "client enregistrer";
    //  }else{
    //      echo "client non enregistrer!";
     $courant=TRUE;

if($courant == true){
    $compteCourant = new ClassCompteCourant();
    $modelCourant = new compteCourant();

    $compteCourant->setNumero($_POST['numberCompte']);
    $compteCourant->setSolde($_POST['solde']);
    $compteCourant->setAgios($_POST['agios']);
    $compteCourant->setDateOuvert($_POST['dateOuv']);

    $resultat = $modelCourant->insertCompteCourant($compteCourant);

    if($resultat == 1){
        echo "client enregistrer";
    }else{
        echo "client non enregistrer!";
    }
  }
}










?>