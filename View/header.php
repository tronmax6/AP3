<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALL4SPORT</title>
  <link rel="stylesheet" href="./style.css">

  <?php 
  if (isset($title)) { // isset --> 'Vérifie qu'une variable est définit (= non null)'
    echo $title; //On change le titre en mettant celui de la variable de la page
} else {
    echo 'on aime la vie';
}
?>
</head>
  <body>
    <nav>
        <div class="profile">
            <img src="../images/logo.png" alt="logo">
            <h1>On Aime la Vie</h1>
        </div>
        <ul>
            <a href="index.php">
                <li>accueil</li>
            </a>
            <a href="./Controller/rayon.php">
                <li>Catégorie</li>
            </a>

        </ul>
    </nav>
  </body>                                                                           
</html>