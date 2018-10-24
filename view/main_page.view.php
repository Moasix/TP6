<html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>PC Master Race</title>
      <link rel="stylesheet" type="text/css" href="styleMusique.css" />
    </head>
    <body>
      <?php foreach ($games as $key => $value) { ?>
        <a href="../jeu.ctrl.php/?ind=<?=$value->ref?>">
          <img src="../data/covers/<?=$value->image?>" alt="">
        </a>
      <?php } ?>
    </body>
</html>
