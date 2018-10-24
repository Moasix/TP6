<html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Juk Zik</title>
      <link href="main3.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>

      <h1>Jukebox</h1>

      <p>
      <a href="main.ctrl.php?firstId=<?=$previousId?>">
        <img src="../view/Actions-arrow-left-icon.png" alt="image fleche gauche">
      </a>
      Numéro de page : <?=$numPage?>
      <a href="main.ctrl.php?firstId=<?=$nextId?>">
        <img src="../view/Actions-arrow-right-icon.png" alt="image fleche droite">
      </a>
      </p>

      <?php foreach($list as $id => $url){   ?>
        <a href="play.ctrl.php?id=<?php echo $id ?>&firstId=<?= $firstId ?>">
        <img src="<?= $url ?>" />
        </a>
      <?php } ?>

    </body>
</html>
