<!DOCTYPE html>
<html lang="fr">
<head>
    <header>
        <title>SAS GANDAL INFORMATIQUE</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="Style/css/bootstrap.min.css" rel="stylesheet">
                <script src="Style/js/bootstrap.bundle.min.js"></script>
                <header>
    <div class="jumbotron text-center" style="margin-bottom:0">
      <h1>GANDAL INFORMATIQUE</h1>
      <h3>Votre site de cours en ligne</h3> 
    </div>
<?php
      
        if (!isset($_SESSION["nom"]))  // rien en session
            include "navBar.php";
        else
            include "navBar_Admin.php";
        ?>
    </header>
</head>
<body>
