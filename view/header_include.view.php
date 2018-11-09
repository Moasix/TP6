<header>

  <div id="ContainerHeader">

    <div>
      <a href="../controler/main.ctrl.php">  <img src="../view/images/pcMasterRace.png" alt="Logo de PC Master Race"></a>
      <h1>PC MASTER RACE</h1>
    </div>

    <div>

        <form action="../controler/main.ctrl.php">
          <input type="text" placeholder="Rechercher" name="search">
          <button type="submit"><img src="../view/images/recherche.svg" alt="Rechercher un jeu"></button>
        </form>

    </div>
    <div class="">
      <?php if (!isset($user)) { ?>
        <a href="../controler/connexion.ctrl.php">connexion</a>
      <?php } else {?>
        <a href="../controler/connexion.ctrl.php">Mon compte</a>
      <?php } ?>
        <a href="../controler/panier.ctrl.php">  <img src="../view/images/panier.svg" alt="Panier Utilisateur"></a>
    </div>

  </div>
  <nav>
    <ul>
      <?php
       foreach ($arrayCategorie as $indiceCat => $valueCat) { ?>
        <li><a href="../controler/main.ctrl.php?cat=<?=$valueCat->id?>"><?= $valueCat->nom ?></a></li>
      <?php } ?>
    </ul>
  </nav>

</header>
