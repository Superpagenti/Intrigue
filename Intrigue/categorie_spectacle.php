<?php
/*
cookie
*/


/* Connexion BD */
include("connexion.php");

/* inclusion de fonctions */
include("fonction/tronquer.php");

/* Differente requete pour req1 */
if(isset($_GET['cat_spectacle'])){
    $numCat = $_GET['cat_spectacle'];

    if($_GET['cat_spectacle']== "all"){
        $req1 = "SELECT * FROM spectacle ";
    }

    if($_GET['cat_spectacle']== "1"){
        
        $req1 = "SELECT * FROM spectacle where id_categorie_spectacle  = $numCat";
        //setcookie("vetements",$numCat,time()+3600); 
    }

    if($_GET['cat_spectacle']== "2"){
        $req1 = "SELECT * FROM spectacle where id_categorie_spectacle  = $numCat";
        //setcookie("accessoires",$numCat,time()+3600); 
    }

    if($_GET['cat_spectacle']== "3"){
        $req1 = "SELECT * FROM spectacle where id_categorie_spectacle  = $numCat";
        //setcookie("posters",$numCat,time()+3600); 
   
    }
    if($_GET['cat_spectacle']== "4"){
        $req1 = "SELECT * FROM spectacle where id_categorie_spectacle  = $numCat";
        //setcookie("dvd",$numCat,time()+3600); 
    }


}




$retour_req1 = $PDO->query($req1);
$data1 = $retour_req1->fetchAll(PDO::FETCH_OBJ);


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
        <header>
                <h2>spectacle</h2>
        </header>
       
        <table>
            <?php foreach ($data1 as $k => $unSpectacle) : ?>
                <tr>
                    <th><?=$unSpectacle->titre;?></th>
                    <th><img src = "<?=$unSpectacle->img_spectacle;?>" width="75%" ></th>
                    <th><?=tronquer_texte(($unSpectacle->description));?></th>        
                    <th><?=$unSpectacle->prix_sceance;?></th>
                    <th><a id="a_spectacle" href="vue_spectacle.php?spectacle=<?=$unSpectacle->id_spectacle;?>"> Voir les détails</a></th>
                </tr>
            <?php endforeach;?>
        </table>
    </section>


        <!-- Fin de page -->
    
    
        <?php include("footer.php");?>
    </body>
    
</html>
