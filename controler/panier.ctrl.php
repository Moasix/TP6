<?php
//Page d'accueil du site
session_start();
require_once('../model/panier.class.php');
require_once('../model/DAO.class.php');



/////////////////////////////////
//// RECUPERATION DES DONNEES
/////////////////////////////////
$arrayCategorie  = $dao->getAllCat();
$games = array();


if(isset($_GET['empty'])){
  session_destroy();
  session_start();
}

if(isset($_SESSION['panier'])){
  $panier = unserialize($_SESSION['panier']);
}else{
  $panier = new Panier();
}


if(isset($_GET['act'])){
  if($_GET['act']=='add'){ //ajouter un article
    if (isset($_GET['qtt'])){
      $quantite = $_GET['qtt'];
    }else{
      $quantite = 1;
    }
    $panier->addJeuPanier($_GET['ref'], $quantite);
  }else if($_GET['act']=='sup'){ // supprimer un article
    $panier->supprimerJeu($_GET['ref']);
  }
  elseif ($_GET['act']=='rem') { //quantite --
    $panier->getArticles()[$_GET['ref']]->quantite --;
  }

  $_SESSION['panier'] = serialize($panier);
  header('Location: '.$_SERVER['PHP_SELF']);
  exit();
}

$_SESSION['panier'] = serialize($panier);


include_once("../view/panier.view.php");
?>
