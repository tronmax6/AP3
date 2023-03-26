<?php
include "header.php"
?>

<tbody>
    <?php
    foreach ($produits as $produit) {
      ?>
      <ul>
      <li><a href='produits.php?produit=<?= $produit['pr_rayon'] ?>'>  voir produit </a>
      <?php echo $produit['pr_rayon']?>
      <?php echo $produit['pr_id']?>
      <?php echo $produit['pr_image']?></a>
      </ul>
      <?php
  }
    ?>
  </tbody>

<?php require '../footer.php';?>