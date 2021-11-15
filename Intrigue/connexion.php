<?php
/* Pour le mettre en ligne 
$DB_DSN = 'mysql:host=darkmat20.mysql.db;dbname=darkmat20';
$DB_USER ='darkmat20';
$DB_PASS = 'Lancecrotte1';
*/

/* Pour le local */
$DB_DSN = 'mysql:host=localhost;dbname=Intrigue';
$DB_USER = 'root';
$DB_PASS = '';


try
{
    $PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS);
}
catch(PDOException $pe)
{
    echo 'ERREUR : ' .$pe->getMessage();
}



?>