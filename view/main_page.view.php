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
=======

>>>>>>> a1d36cb9e7dc917f9b42af8423b12e76c5f4fe6a
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
<<<<<<< HEAD

=======
>>>>>>> a1d36cb9e7dc917f9b42af8423b12e76c5f4fe6a
      </div>
      <?php  include('../view/footer_include.view.php') ?>
    </body>
</html>
