<?php
require_once('../model/DAO.class.php');
$arrayCategorie = $dao->getAllCat();

foreach($arrayCategorie as $indice => $uneCat){
  var_dump($uneCat);
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Header wsh wsh</title>
  </head>
  <body>

    <header>
      <div>
        <a href="#">  <img src="../view/images/adibou_master_race.gif" alt="Logo de PC Master Race"></a>
        <input type="text" name="search" value="rechercher">
        <a href="#">  <img src="../view/images/panier.png" alt="Panier Utilisateur"></a>

      </div>
      <nav>
        <ul>




          <li><a href="#">QUI SOMMES NOUS ?</a></li>
          <li><a href="#">LE TOP 10</a></li>
          <li><a href="#">GENRES</a></li>
          <li><a href="#">CONTACT</a></li>
          <li><a href="#">QUI SOMMES NOUS ?</a></li>
          <li><a href="#">LE TOP 10</a></li>
          <li><a href="#">GENRES</a></li>
          <li><a href="#">CONTACT</a></li>
          <li><a href="#">QUI SOMMES NOUS ?</a></li>
          <li><a href="#">LE TOP 10</a></li>
          <li><a href="#">GENRES</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </nav>

    </header>

  </body>
</html>
