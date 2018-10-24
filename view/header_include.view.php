    <header>
      <div>
        <a href="#">  <img src="../view/images/adibou_master_race.gif" alt="Logo de PC Master Race"></a>
        <input type="text" name="search" value="" placeholder="abricot" >
        <a href="#">  <img src="../view/images/panier.svg" alt="Panier Utilisateur"></a>
      </div>
      <nav>
        <ul>
          <?php foreach ($arrayCategorie as $indiceCat => $valueCat) { ?>
            <li><a href="#"><?= $valueCat->nom ?></a></li>
          <?php } ?>
        </ul>
      </nav>
    </header>
