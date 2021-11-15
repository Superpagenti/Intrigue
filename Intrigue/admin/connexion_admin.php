<?php

session_start();
include("../connexion.php");

/* Methode 1 avec des données deja remplis sans bdd

if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
        

        $default_pseudo = "admin";
        $default_mdp = "pass";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);


    }
}

/* Methode 2 connexion admin avec bdd et requete preparée */

if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
    $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
    $mdp_saisi = htmlspecialchars($_POST['mdp']);

    $requete_prepare_1=$PDO->prepare("SELECT pseudo,password FROM admin WHERE pseudo=:username AND password =:pass" ); 

    $requete_prepare_1->bindParam(":username",$pseudo_saisi);
    $requete_prepare_1->bindParam(":pass",$mdp_saisi);

    $requete_prepare_1->execute();

    $res=$requete_prepare_1->fetchAll(PDO::FETCH_OBJ);
    $cpt =count($res); 
    /* Si notre compteur est égale a 1 ( il ne peut y avoir dutilisateurs ayant le meme pseudo ) */
    
    if($cpt == 1 ){
        $_SESSION['pseudo'] = $pseudo_saisi;
        $_SESSION['mdp'] = $mdp_saisi;
        header("location: index.php");
    }else{
        $error =  "veuillez remplir les champs correctement";
    }
}



 
//On execute la requête avec le paramètre
?>



</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTRIGUE</title>
</head>
<body>
    <div>
        <?php if($_POST) :?>
            <p><?=$error;?></p>
        <?php endif;?>

        <form action = "connexion_admin.php" method="POST" >
            <input type = "text" name ="pseudo">
            <br>
            <input type="password" name="mdp">
            <br><br>
            <input type="submit" name = "valider">
        </form>
    </div>


    <div>
       <h2>Retour page principale</h2>
       <p><a href = "../index.php">Page principale</a></p>
   </div>

</body>

