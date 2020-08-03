<?php
    //il joue l'intermediaire entre view et model!!
    require_once '../model/ClientSimple.php';
    require_once '../entities/ClassClientSimple.php';
   
    require_once '../model/compteEpargne.php';
    require_once '../entities/ClassCompteEpargne.php';

    //recupere tous les name en POST
    //var_dump($_POST);
    // if(isset($_POST['submitSimple'])){
        //extract($_POST); 
        $var = FALSE;
    // Comment Il va transmettre ces donnees vers le modele pour inserer
        if(!empty($_POST)){
            $clientSimple = new ClassClientSimple();
            $modelClient = new ClientSimpleModel();
// pour la recuperation des names
        $clientSimple->setNom($_POST['nom']);
        $clientSimple->setPrenom($_POST['prenom']);
        $clientSimple->setTelephone($_POST['telephone']);
        $clientSimple->setCni($_POST['numCni']);
        $clientSimple->setAdresse($_POST['adresse']);
        $clientSimple->setSexe($_POST['sexe']);
        $clientSimple->setDateNaiss($_POST['dateNaiss']);

        //faire la recuperation des donnees
        $ok = $modelClient->insertClientSimple($clientSimple);

        // var_dump($ok);
        // die();
        if($ok == 1){
            echo "client enregistrer";
        }else{
            echo "client non enregistrer!";
        }
        $var= TRUE;
 
//}
    //pour afficher les donnees
    //require '../view/projet.php';

    if($var==TRUE){
        $compteEpargne = new ClassCompteEpargne();
        $modelEpargne = new clientEpargne();

        $compteEpargne->setNumero($_POST['numCompte']);
        $compteEpargne->setSolde($_POST['solde']);
        $compteEpargne->setFraisOuvert($_POST['fraisOuv']);
        $compteEpargne->setRemuneration($_POST['remuneration']);
        $compteEpargne->setDateOuverture($_POST['dateOuv']);
        $resultat = $modelEpargne->insertCompteEpargne($compteEpargne);

          if($ok == 1){
            echo "client enregistrer";
        }else{
            echo "client non enregistrer!";
        }
            

    }
}
    

?>

