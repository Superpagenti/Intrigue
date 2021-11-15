<?php
session_start();
/* verif connexion */
if(!isset($_SESSION['mdp']) && !isset($_SESSION['pseudo'])){
    header('Location: connexion_admin.php');
}

/* bdd */
include("../connexion.php");

/* suppression */
if(isset($_GET['id']) && !empty ($_GET['id'])){
    $id_m = $_GET['id'];

    $bannir_req = "DELETE FROM membre where id_membre = $id_m";
    
    $bannissementUser= $PDO->exec($bannir_req);
    header('Location: gestion_membre.php');
    


}
else{
    echo "pas de compte trouve";
}


?>

