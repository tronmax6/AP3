<?php
include "header.php"
?>

<tbody>
    <?php
    foreach ($produits as $produit) {
      ?>
      <ul>
      <li><a href="./Controller/view_produits.php=
      <?php echo $produit['pr_rayon']?>">
      <?php echo $produit['pr_rayon']?>
      <?php echo $produit['pr_image']?></a>
      </ul>
      <?php
  }
    ?>
  </tbody>

<?php require '../footer.php';?>