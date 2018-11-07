<header>

  <div id="ContainerHeader">

    <div>
      <a href="../controler/main.ctrl.php">  <img src="../view/images/adibou_master_race.gif" alt="Logo de PC Master Race"></a>
    </div>

    <div>
      <!-- <input type="text" name="search" value="" placeholder="abricot" >
      <img src="../view/images/search.svg" alt="Rechercher un jeu vidéo en particulier"> -->

        <form action="../controler/main.ctrl.php">
          <input type="text" placeholder="Rechercher (5 caractères min)" name="search">
          <button type="submit"><img src="../view/images/recherche.svg" alt="Rechercher un jeu"></button>
        </form>


    </div>


    <div>
      <a href="../controler/panier.ctrl.php">  <img src="../view/images/panier.svg" alt="Panier Utilisateur"></a>
    </div>

  </div>
  <nav>
    <!-- <p>COUCOU</p> -->
    <ul>
      <?php
      foreach ($arrayCategorie as $indiceCat => $valueCat) {
        printf("<li><a href=\"../controler/main.ctrl.php=".$valueCat->id."\">".$valueCat->nom."</a></li>");
      }
       ?>

    </ul>
  </nav>

</header>
