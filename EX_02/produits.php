<?php
$produits = array (
"T-shirt rouge" => 15.50,
"T-shirt vert" => 15.50,
"T-shirt argent" => 16.50,
"Short bleu" => 19.99,
"Short vert" => 19.99,
"Veste argent" => 35,
);

function afficher_produit($produits){

echo "<table>";
echo "<tr>";
echo "<td>Produits</td>";
echo "<td>Prix</td>";
echo "</tr>";
    
foreach($produits as $cle => $valeur) {
  echo "<tr>";
  echo "<td>$cle</td>";
  echo "<td>$valeur</td>";
  echo "</tr>";
      }
    echo "</table>";
   }
  afficher_produit($produits);

?>