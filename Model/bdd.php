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

  public function getProduits()
  {
    $sql = "SELECT * FROM produit;";
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }
}