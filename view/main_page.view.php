
<?php
require_once('../model/DAO.class.php');
$arrayCategorie = $dao->getAllCat();
?>

<html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>PC Master Race</title>
      <link rel="stylesheet" type="text/css" href="styleMusique.css" />
    </head>
    <body>
      <!-- affichage des jeux-->
      <?php foreach ($games as $key => $value) { ?>
        <a href="../controler/jeu.ctrl.php/?ref=<?=$value->ref?>">
          <img src="../data/covers/<?=$value->image?>" alt="">
        </a>
      <?php } ?>

    </body>
</html>
