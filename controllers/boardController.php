<?php
require_once('helper.php');

$bdd = dbConnect('splists','root','', 3308);

$res = $bdd->query('SELECT * FROM lists');

$lists = [];

while($donnees = $res->fetch()){

// on prend chaque ligne "$donnees" qu'on m'est dans l'array $lists.
    $lists[] = $donnees;

}

