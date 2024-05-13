<?php
session_start();
//include "entete.php";
// Connexion à la BDD, instanciation de l’objet $cnx
include "connectBD.php";  
$sql="SELECT * FROM etudiant where email=:email and mdpasse=:mdpasse";
// on exécute la requête
try{
   $resultat = $cnx->prepare($sql); 
   $resultat->execute(array(":email" => $_POST["mail"],":mdpasse" => $_POST["pass"]));
   $tabloResultat=$resultat->fetch(PDO::FETCH_ASSOC);

   
   if (empty($tabloResultat)) {
       // erreur , on redirige vers la page de connexion - l'admin n'existe pas
    echo "<script>alert('Erreur de mail ou de mot de passe. veuillez réessayer.');</script>";
    echo "<script>window.location='formCnx.php';</script>";
   
   }
   else {
       // on mémorise le nom de l'admin dans une variable de session 
       $_SESSION["id"]=$tabloResultat["id"];
       $_SESSION["nom"]=$tabloResultat["nom"];
       header("Location: index.php");
        }
  
   } 
catch(PDOException $e) {   // gestion des erreurs
    echo"ERREUR PDO  " . $e->getMessage();
 }
?>