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
  <h2>FORMULAIRE</h2>
  <div id="MAIN_CONTAINER">
    <div>
      <?php if ($erreur != ""): ?>
        <p id="ERREUR">Erreur : <?=$erreur?></p>
      <?php endif; ?>
      <form class="" action="../controler/connexion.ctrl.php" method="post">
        <fieldset>
          <legend>Connexion</legend>
          <input type="hidden" name="act" value="con">
          email :<br>
          <input type="email" required name="email" value=""><br>
          mot de passe :<br>
          <input type="password" required name="password" value=""><br>
          <input type="submit" value="Connexion">
        </fieldset>
      </form>
    </div>
    <div>
      <form class="" action="../controler/connexion.ctrl.php" method="post">
        <fieldset>
        <legend>Inscription</legend>
          <input type="hidden" name="act" value="ins">
          email :<br>
          <input type="email" required name="email" value=""><br>
          mot de passe :<br>
          <input type="password" required name="password" value=""><br>
          confirmation du mot de passe : <br>
          <input type="password" required name="passwordVerif" value=""><br>
          nom : <br>
          <input type="text" required name="nom" value=""><br>
          prenom : <br>
          <input type="text" required name="prenom" value=""><br>
          <input type="submit" value="Terminer">
        </fieldset>
      </form>
    </div>
  </div>

  <!-- FOOTER -->
  <?php  include('../view/footer_include.view.php') ?>
</body>
</html>
