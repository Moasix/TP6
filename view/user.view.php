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
    <?php if ($erreur != ""): ?>
      <p id="ERREUR">Erreur : <?=$erreur?>></p>
    <?php endif; ?>
      <form class="" action="../controler/connexion.ctrl.php" method="post">
        <fieldset>
        <legend>Modification compte</legend>
          <input type="hidden" name="act" value="mod">
          nom : <br>
          <input type="text" required name="nom" value="<?=$user->nom?>"><br>
          prenom : <br>
          <input type="text" required name="prenom" value="<?=$user->prenom?>"><br>
          email :<br>
          <input type="email" required name="email" value="<?=$user->email?>"><br>
          mot de passe :<br>
          <input type="password" required minlengh = 8 name="password" value=""><br>
          confirmation du mot de passe : <br>
          <input type="password" required name="passwordVerif" value=""><br>
          <input type="submit" value="Terminer">
        </fieldset>
      </form>
      <p>
        <form class="" action="../controler/connexion.ctrl.php" method="get">
          <input type="submit" name="deco" value="Deconnexion">
        </form>
      </p>
  </div>

  <!-- FOOTER -->
  <?php  include('../view/footer_include.view.php') ?>
</body>
</html>
