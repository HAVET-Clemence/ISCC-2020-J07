<?php

$historique_commandes = array (5.49, 9.99, 5.49, 15.99, 25);


function afficher_commandes($historique_commandes){ 
    foreach($historique_commandes as $valeur) {
        echo "Une commande de ".$valeur. " euros a été reçue.<br/>";
        }
}
afficher_commandes($historique_commandes);
echo "Le total des commandes est de " .array_sum($historique_commandes). " euros.";



?>
    