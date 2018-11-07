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
  <h2>PANIER</h2>
  <div id="MAIN_CONTAINER">
    <?php foreach ($panier->getArticles() as $key => $value) {
      $jeu = $dao->getJeu($value->ref);
      ?>
      <article>
        <h3><?=$jeu->titre?></h3>
        <a href="../controler/main.ctrl.php?ref=<?=$jeu->ref?>">
          <img src="../data/covers/<?=$jeu->image?>" alt="">
        </a>
        <p>Prix : <?=$jeu->prix?> €</p>
        <p>Quantite : <?=$value->quantite?> </p>
        <a href="../controler/panier.ctrl.php/?act=sup&ref=<?=$jeu->ref?>">
          <img src="" alt="supprimer">
        </a>
      </article>
    <?php } ?>
    <p>Total : <?=$panier->getTotal()?></p>

  </div>
  <p>
    <form class="" action="../controler/panier.ctrl.php" method="get">
      <button type="submit" name="empty">vider le panier</button>
    </form>
  </p>
  <!-- FOOTER -->
  <?php  include('../view/footer_include.view.php') ?>
</body>
</html>
