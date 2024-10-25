<?php

$produit1 = ["nom" => "Livre", "prix" => 15, "quantite" => 2];
$produit2 = ["nom" => "Stylo", "prix" => 3, "quantite" => 5];
$produit3 = ["nom" => "Sac", "prix" => 25, "quantite" => 1];

$produits = [$produit1, $produit2, $produit3];

function calculerSousTotal($produit) {
    return $produit['prix'] * $produit['quantite'];
}

foreach ($produits as $produit) {
    $sousTotal = calculerSousTotal($produit);
    echo "Le sous-total pour le " . $produit['nom'] . " est de " . $sousTotal . " €.<br>";
}


$totalPanier = 0;
foreach ($produits as $produit) {
    $totalPanier += calculerSousTotal($produit);
}

echo "Le montant total du panier est de " . $totalPanier . " €.<br>";


if ($totalPanier > 50) {
    $reduction = $totalPanier * 0.10;
    $totalApresReduction = $totalPanier - $reduction;
    echo "Après une réduction de 10%, le total est de " . $totalApresReduction . " €.<br>";
} else {
    $totalApresReduction = $totalPanier;
}


echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th><th>Sous-total</th></tr>";

foreach ($produits as $produit) {
    $sousTotal = calculerSousTotal($produit);
    echo "<tr>
            <td>{$produit['nom']}</td>
            <td>{$produit['prix']} €</td>
            <td>{$produit['quantite']}</td>
            <td>{$sousTotal} €</td>
          </tr>";
}

echo "<tr><td colspan='3'><strong>Total</strong></td><td><strong>{$totalApresReduction} €</strong></td></tr>";
echo "</table>";

?>
