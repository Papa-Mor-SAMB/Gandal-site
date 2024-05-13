<?php 
include "ConnectBD.php";

        $req = "INSERT INTO etudiant (nom_etu,prenom_etu,email_etu,tel_etu,mot_de_passe) 
        VALUES (:nom_etu,:prenom_etu,:email_etu,:tel_etu,:mot_de_passe)";

        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["email"];
        $numero = $_POST["numero"];
        $motDePasse = $_POST["motDePasse"];

        $resultat = $cnx->prepare($req);
        $nb_ligne = $resultat->execute(array(":nom_etu"=>$nom, ":prenom_etu"=>$prenom,":email_etu"=>$mail,":tel_etu"=>$numero,":mot_de_passe"=>$motDePasse));

        header("Location:index.php");
   ?>
