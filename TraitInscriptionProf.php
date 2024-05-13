<?php 
include "ConnectBD.php";

        $req = "INSERT INTO professeur (nom_prof,prenom_prof,email_prof,tel_prof,mot_de_passe) 
        VALUES (:nom_prof,:prenom_prof,:email_prof,:tel_prof,:mot_de_passe)";

        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["email"];
        $numero = $_POST["numero"];
        $motDePasse = $_POST["motDePasse"];

        $resultat = $cnx->prepare($req);
        $nb_ligne = $resultat->execute(array(":nom_prof"=>$nom, ":prenom_prof"=>$prenom,":email_prof"=>$mail,":tel_prof"=>$numero,":mot_de_passe"=>$motDePasse));

        header("Location:index.php");
   ?>
