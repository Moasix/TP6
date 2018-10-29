<header>

  <div id="ContainerHeader">

    <div>
      <a href="../controler/main.ctrl.php">  <img src="../view/images/adibou_master_race.gif" alt="Logo de PC Master Race"></a>
    </div>

    <div>
      <img src="../view/images/search.svg" alt="rechercher un jeu vidéo en particulier">
      <input type="text" name="search" value="" placeholder="abricot" >
    </div>

    <div>
      <a href="#">  <img src="../view/images/panier.svg" alt="Panier Utilisateur"></a>
    </div>

  </div>
  <nav>
    <ul>
      <?php foreach ($arrayCategorie as $indiceCat => $valueCat) { ?>
        <li><a href="../controler/categorie.ctrl.php?cat=<?=$valueCat->id?>"><?= $valueCat->nom ?></a></li>
      <?php } ?>
    </ul>
  </nav>

</header>
