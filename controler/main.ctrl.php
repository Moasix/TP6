<?php
//Page d'accueil du site

require_once('../model/DAO.class.php');

/////////////////////////////////
//// RECUPERATION DES DONNEES
/////////////////////////////////

$arrayCategorie  = $dao->getAllCat();
$games = array();
//recherche
if(isset($_GET['search']) && strlen($_GET['search']) >= 5){
  $search = $_GET['search'];
  if(is_int($search)){// si on recherche a partir d'une reference
    $games = $dao->getJeu($ref);
  }else{
    foreach ($dao->getAllJeux() as $key => $value) {
      $substr = substr($value->titre, 0 , strlen($search));
      $lev = levenshtein($substr, $search);
      if($lev <= 3){
        $games[] = $value;
      }
    }
  }
}else{
  $games = $dao->getN(0,10);
}


/////////////////////////////////
//// APPEL A LA VUE
/////////////////////////////////

include_once("../view/main_page.view.php");

 ?>
