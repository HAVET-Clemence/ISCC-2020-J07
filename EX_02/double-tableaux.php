<?php

$panier = array (
    ["T-shirt rouge", 15.50, 5],
    ["T-shirt vert", 15.50, 6],
    ["T-shirt argent", 15.50, 8],
    ["Short bleu", 16.50, 5],
    ["Short vert", 19.99, 5],
    ["Veste argent", 19.99, 10],
    ["Veste argent", 35, 3]
);

    function afficher_panier($panier){
       $compteur1 = 0;
      

        while ($compteur1 < 7){
            echo "<ul>";
            $compteur2 = 0;
            while ($compteur2 < 3){
                echo "<li>" .$panier[$compteur1][$compteur2]. "</li>";
                $compteur2++;
            }
            $compteur1++;
            echo "</ul>";
        }
}

afficher_panier($panier);

function calculer_total_panier($panier){
    for ($numero = 0; $numero < 7; $numero++){
        echo $panier[$numero]. "<br>";
    }
}

echo "<p>" .calculer_total_panier($panier). "</p>"
?>

 




 