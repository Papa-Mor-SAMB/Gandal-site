<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulaire d'Inscription</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "entete.php"; 
        include "ConnectBD.php";
  ?>

</head>
<body>


<section class="d-flex justify-content-center align-items-center">
<div class="container">
  <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
        <h2>Inscription Etudiant</h2>
        <div class="mb-3 mt-3">

    

  <form action="TraitInscriptionEtu.php" method="POST">
  <div class="mb-3 mt-3">
      <label for="nom">Nom :</label>
      <input type="text" class="form-control" id="nom" placeholder="Tapez votre nom" name="nom">
    </div>
    <div class="mb-3 mt-3">
      <label for="prenom">Prénom :</label>
      <input type="text" class="form-control" id="prenom" placeholder="Tapez votre prénom" name="prenom">
    </div>
  

  <div class="mb-3 mt-3">
      <label for="email">Email :</label>
      <input type="email" class="form-control" id="email" placeholder="Tapez votre adresse mail" name="email">
    </div>

    <div class="mb-3 mt-3">
      <label for="numero">N° Tel :</label>
      <input type="text" class="form-control" id="numero" placeholder="Tapez votre numéro de téléphone" name="numero">
    </div>


    <div class="mb-3 mt-3">
      <label for="motDePasse">Mot de passe :</label>
      <input type="password" class="form-control" id="motDePasse" placeholder="Tapez votre mot de passe" name="motDePasse">
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
</div>
 <div class="col-sm-4">

</div>
   </div>
</div>
</section>
</body>
</html>
