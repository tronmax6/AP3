<?php

require_once "../Model/bdd.php";

$bdd = new Bdd();

if (isset($_GET['id'])) {
  // Récupération d'un produit spécifique...
} else {
  $produits = $bdd->getProduits();
  require "../View/view_produits.php";
}