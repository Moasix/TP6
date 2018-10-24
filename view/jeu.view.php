<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>PC Master Race</title>
      <link rel="stylesheet" type="text/css" href="../view/stylemain_page.css" />
    </head>
    <body>
      <?php  include('../view/header_include.view.php') ?>
      <h2><?=$jeu->titre ?></h2>
      <img src="../data/covers/<?=$jeu->image?>" alt="">
      <?= $jeu->prix?>€
      <p><?= $jeu->description?></p>
    </body>
</html>