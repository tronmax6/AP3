<?php
include "header.php"
?>

<h1>Produits</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nom</th>
    </tr>
  </thead>

  <tbody>
    <?php
    foreach ($produits as $produit) {
      ?>
      <a href='ProduitChoisie.php?produit=<?php echo $produit['pr_id']?>
    <?php  echo "<tr>"?>
    <?php  echo "<td>" . $produit['pr_id'] . "</td>"?>'> 
    <?php  echo "<td>" . $produit['pr_nom'] . "</td>"?>bouton </a>
    <?php  echo "</tr>" ?>
    <?php }

    ?>
  </tbody>
</table>
<?php require '../footer.php';?>