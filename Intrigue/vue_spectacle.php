<?php
/* Connexion BD */
require("connexion.php");

if ( !empty($_GET['spectacle']) ) 
{
    $numSpectacle = $_GET['spectacle'];
}
else{
    $msg = 'aucun article selectionne';
}




/* On recupere l'article par son id */
$req1 = "SELECT * FROM spectacle where id_spectacle = \"$numSpectacle\"";
$retour_req1 = $PDO->query($req1);
$data1 = $retour_req1->fetchAll(PDO::FETCH_OBJ);



/* Attribution de variable */

if(!empty($_GET['spectacle'])){
    foreach($data1 as $k=>$unSpectacle){
        $titre = $unSpectacle->titre;
        $description = $unSpectacle->description;
        $image_link = $unSpectacle->img_spectacle;
        $prix = $unSpectacle->prix_sceance;
    }
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
<?php include("header.php");?>


<!-- Millieu de page -->
	<section>


        <!-- Affichage d'article -->
        <header>
	        <h2><?=$titre?></h2>
		</header>
            <article>

                <img src="<?=$image_link;?>">
                <h3><?=$prix;?></h3>

                <p><?=$description?></p>        
                <!-- Formulaire -->
                    <select>
                        <nom>Quantite</nom>
                        <libelle>Quantite demandé</libelle>
                        <option valeur ="1">1</option>
                        <option valeur ="2">2</option>
                        <option valeur ="3">3</option>
                        <option valeur ="4">4</option>
                        <option valeur ="5">5</option>
                    </select>
            </article>

    
	</section>


	<!-- Fin de page -->
	<?php include("footer.php");?>
</body>
</html>