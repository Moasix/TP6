<?php
//Page d'accueil du site
session_start();
require_once('../model/DAO.class.php');

/////////////////////////////////
//// RECUPERATION DES DONNEES
/////////////////////////////////

$arrayCategorie  = $dao->getAllCat();
$games = array();

//recherche
if(isset($_GET['search']) && strlen($_GET['search']) >= 3){
  $search = $_GET['search'];
    foreach ($dao->getAllJeux() as $key => $value) {
      $substr = substr($value->titre, 0 , strlen($search));
      $lev = levenshtein($substr, $search);
      if($lev <= 2){
        $games[] = $value;
      }
    }
    include_once("../view/main_page.view.php");
}
//categorie
else if(isset($_GET['cat'])){
  $categorie = $dao->getCat($_GET['cat']);
  $games = $dao->getNCat($categorie,0,10);
  include_once("../view/categorie.view.php");
}
//jeu
else if(isset($_GET['ref'])){
  $jeu = $dao->getJeu($_GET['ref']);
  include_once("../view/jeu.view.php");
}
else {
  $games = $dao->getNjeu(0,10);
  include_once("../view/main_page.view.php");
}


/////////////////////////////////
//// APPEL A LA VUE
/////////////////////////////////

 ?>
