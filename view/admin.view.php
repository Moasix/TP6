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
  <h2>ADMIN</h2>
  <div id="MAIN_CONTAINER">
    <?php if(isset($user) && ($user->type == 1)){ ?>
      <p>peg de l'admin admin</p>
      <form class="" action="../controler/connexion.ctrl.php" method="get">
        <input type="submit" name="deco" value="Deconnexion">
      </form>
    <?php }else{ ?>
      <p>forbidden</p>
    <?php } ?>
  </div>

  <!-- FOOTER -->
  <?php  include('../view/footer_include.view.php') ?>
</body>
</html>
