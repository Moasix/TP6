<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>PC Master Race</title>
      <link rel="stylesheet" type="text/css" href="../view/stylemain_page.css" />
    </head>
    <body>
      <?php  include('../view/header_include.view.php') ?>

<<<<<<< HEAD
      <h2>GENRE ACTUEL</h2>
      <div id="MAIN_CONTAINER">

        <?php foreach ($games as $key => $value) { ?>
          <article>
            <h3><?=$value->titre?></h3>
            <a href="../controler/jeu.ctrl.php/?ref=<?=$value->ref?>">
              <img src="../data/covers/<?=$value->image?>" alt="">
            </a>
            <p>Prix : <?=$value->prix?> €</p>
          </article>
        <?php } ?>
=======
      <div id="divCONTAINER">


      <?php foreach ($games as $key => $value) { ?>
        <a href="../controler/jeu.ctrl.php?ref=<?=$value->ref?>">
          <img src="../data/covers/<?=$value->image?>" alt="">
        </a>
      <?php } ?>

      <aside>

      </aside>
      <div class="">

      </div>
>>>>>>> fc0b9947f19a171684a6995ab2bdf2a6c00cb59c

      </div>
      <?php  include('../view/footer_include.view.php') ?>
    </body>
</html>
