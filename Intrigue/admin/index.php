<?php

session_start();
/* Si non connecté redirigé vers connexion_admin */
if(!isset($_SESSION['mdp'])){
    header('Location: connexion_admin.php');
}


/* bdd */
include("../connexion.php");


/* on verifie que tout est envoyé */
if(isset($_POST["adresse"])&& isset($_POST["numSujet"]) ){

}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<title>Intrigue</title>
</head>
<body>
<!-- DEBUT de la page -->
<header>
    <h2>Bonjour <?=$_SESSION['pseudo'];?></h2>
</header>


<h2>Deconnexion</h2>
<a href="deconnexion.php">deconnexion</a>

<!-- Millieu de page -->

   <div id ="container">
        <h1> Administration du site intrigue</h1>
        <h2>Ajout d'un article dans la boutique</h2>

        <!--  utilisation post -->
        <form action="index.php" method="post" >
            <fieldset>
                <legend>Ajout d'un article</legend>
                <p>
                    <label>designation</label>
                    <input type="text" name="adresse" />
                </p>
                <p>
                    <label>description</label>
                    <input type="text" name="adresse" />
                </p>

                <p><label>Categories :</label>
                    <!-- structure du select -->
                    <select name="numSujet">
                        <option value="0">Vetements</option>
                        <option value="1">Accessoires</option>
                        <option value="2">Posters</option>
                        <option value="2">DVD</option>
                    </select>
                </p>
                <p>
                    <label>PRIX</label>
                    <input type="text" name="adresse" />
                </p>
                <p>
                    <label>TVA</label>
                    <input type="text" name="adresse" />
                </p>
                <p><label for="fichier" id="idNom">Images</label>
                    <input type="file" id="fichier" name="fichier" accept="image/jpeg" />
                </p>
            </fieldset>
            <p><input type="submit" value="Envoyer" /></p>

        </form>


        <!-- fin post -->        
    </div>


    <div>
        <h2>Gestion des membres</h2>
        <p><a href = "gestion_membre.php"> gestion des membres</a></p>
    </div>
   <!-- Fin de page -->

   <div>
       <h2>Retour page principale</h2>
       <p><a href = "../index.php">Ici</a></p>
   </div>
</body>
</html>
 