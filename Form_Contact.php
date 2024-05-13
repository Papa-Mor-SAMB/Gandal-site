<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "entete.php" ?>
</head>
<body>
<section class="d-flex justify-content-center align-items-center">
<div class="container">
  <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
        <h2>Inscription</h2>
  <form action="TraitFormConnexion.php">
  <div class="mb-3 mt-3">
      <label for="name">Nom :</label>
      <input type="text" class="form-control" id="names" placeholder="Tapez votre nom" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="name">Prénom :</label>
      <input type="text" class="form-control" id="names" placeholder="Tapez votre prenom" name="prenom">
    </div>
    

  <div class="mb-3 mt-3">
      <label for="email">Email :</label>
      <input type="email" class="form-control" id="email" placeholder="Tapez votre adresse mail" name="email">
    </div>

    <div class="mb-3 mt-3">
      <label for="message">Message :</label>
      <textarea class="form-control" id="message" placeholder="Rédiger votre message" name="message" style = "width:300; height:150;"></textarea>
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
