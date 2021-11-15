<?php
session_start();
/* verif connexion */
if(!isset($_SESSION['mdp']) && !isset($_SESSION['pseudo'])){
    header('Location: connexion_admin.php');
}

/* bdd */
include("../connexion.php");
$req1 = "SELECT * FROM membre";
$retour_req1 = $PDO->query($req1);
$data1 = $retour_req1->fetchAll(PDO::FETCH_OBJ);



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="" rel="stylesheet" type="text/css" />
    <title>Intrigue</title>
</head>
<body>
<section>
	<h2>Membere</h2>
	<table>
	<?php foreach ($data1 as $k => $unMembre) : ?>
    <tr>
        <th>
            <?=$unMembre->pseudo;?>
            <a href="bannir.php?id=<?=$unMembre->id_membre;?>">Bannir</a>
        </th>
    </tr>
    <?php endforeach;?>
	</table>
</section>

<section>
    <h2>Retour index</h2>
    <a href ="index.php">Retour index admin</a>
</section>
</body>
</html>