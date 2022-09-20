<?php
include "../View/header.php"
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
      echo "<tr>";
      echo "<td>" . $produit['pr_id'] . "</td>";
      echo "<td>" . $produit['pr_nom'] . "</td>";
      echo "</tr>";
    }

    ?>
  </tbody>

</table>