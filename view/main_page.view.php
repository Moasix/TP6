
<?php
require_once('../model/DAO.class.php');
$arrayCategorie = $dao->getAllCat();
?>

<html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>PC Master Race</title>
      <link rel="stylesheet" type="text/css" href="../view/stylemain_page.css" />
    </head>
    <body>
      <?php  include('../view/header_include.view.php') ?>

      <div id="divCONTAINER">


      <?php foreach ($games as $key => $value) { ?>
        <a href="../controler/jeu.ctrl.php/?ref=<?=$value->ref?>">
          <img src="../data/covers/<?=$value->image?>" alt="">
        </a>
      <?php } ?>

      <aside>

      </aside>
      <div class="">

      </div>

      </div>
      <?php  include('../view/footer_include.view.php') ?>
    </body>
</html>
