<?php

class Bdd
{
  private $bdd;

  public function __construct()
  {
    $dsn = 'mysql:dbname=ap3;host=127.0.0.1:3306';
    $dbUser = 'root';
    $dbPwd = 'tronmax971';

    try {
      $this->bdd = new PDO($dsn, $dbUser, $dbPwd);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function getProduits(){
    $sql = "SELECT * FROM produit;";
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function getProduitsRayon($idRayon){
    $sql = "SELECT * FROM produit WHERE ray_fk = ".$idRayon.";";
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function getRayons(){
    $sql = "SELECT * FROM rayon;";
    $query = $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function getImageProduit(){
    $sql = "select pr_id, pr_nom, min(im_nom) as imgproduit from produit join image on pr_im_fk = pr_id group by pr_nom;";
    $query = $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }
}