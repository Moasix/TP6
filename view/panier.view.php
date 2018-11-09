<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PC Master Race</title>
  <link rel="stylesheet" type="text/css" href="../view/stylepanier.css" />
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
        <div>
          <p>Quantité :</p>
          <form class="" action="../controler/panier.ctrl.php" method="get">
            <input type="hidden" name="ref" value="<?=$jeu->ref?>">
            <input type="hidden" name="act" value="add">
            <input type="number" name="qtt" value="<?=$value->quantite?>" min="0">
          </form>
          <a href="../controler/panier.ctrl.php?act=add&ref=<?=$jeu->ref?>">
            <img src="../view/images/plus.png" alt="+">
          </a>
          <a href="../controler/panier.ctrl.php?act=rem&ref=<?=$jeu->ref?>">
            <img src="../view/images/moins.png" alt="-">
          </a>
          <a href="../controler/panier.ctrl.php?act=sup&ref=<?=$jeu->ref?>">
            <img src="../view/images/supprimer.png" alt="supprimer">
          </a>
        </div>
      </article>
    <?php } ?>
  </div>

  <div id="Achat">
    <p>Total : <?=$panier->getTotal()?>€</p>
    <p>
      <form class="" action="../controler/panier.ctrl.php" method="get">
        <button type="submit" name="empty">vider le panier</button>
      </form>
    </p>
  </div>

  <!-- FOOTER -->
  <?php  include('../view/footer_include.view.php') ?>
</body>
</html>
