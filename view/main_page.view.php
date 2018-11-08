<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PC Master Race</title>
  <link rel="stylesheet" type="text/css" href="../view/stylemain_page.css" />
</head>
<body>
  <!-- HEADER -->
  <?php  include('../view/header_include.view.php') ?>

  <!-- CONTENU -->
  <h2>ACCUEIL</h2>
  <div id="MAIN_CONTAINER">

    <?php foreach ($games as $key => $value) { ?>
      <article>
        <h3><?=$value->titre?></h3>
        <a href="../controler/main.ctrl.php?ref=<?=$value->ref?>">
          <img src="../data/covers/<?=$value->image?>" alt="">
        </a>
        <p>Prix : <?=$value->prix?> €</p>
        <form class="" action="../controler/panier.ctrl.php?act=add&" method="get">
          <input type="hidden" name="act" value="add"/>
          <button type="submit" name="ref" value=<?=$value->ref?>> ajouter au panier</button>
        </form>
      </article>
    <?php } ?>

  </div>

  <!-- FOOTER -->
  <?php  include('../view/footer_include.view.php') ?>
</body>
</html>
