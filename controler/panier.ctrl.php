<?php
//Page d'accueil du site
require_once('../model/panier.class.php');
require_once('../model/DAO.class.php');
session_start();
/////////////////////////////////
//// RECUPERATION DES DONNEES
/////////////////////////////////
$arrayCategorie  = $dao->getAllCat();
$games = array();

if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}

if(isset($_GET['commande'])){
  $message = 'Commande validée';
}else if(isset($_GET['erreurCommande'])){
  $message = 'Impossible de commander : Aucun article dans le panier';
}

if(isset($_GET['empty'])){
  unset($_SESSION['panier']);
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

if(isset($_GET['commander'])){
  print"aaaaaaaa";

  if($panier->getTotal() != 0){
    if(isset($_SESSION['user'])){
      $user = $_SESSION['user'];
      header("Location: ../controler/panier.ctrl.php?commande&empty");
      exit();
    }else{
      header("Location: ../controler/connexion.ctrl.php");
      exit();
    }
  }else{
    header("Location: ../controler/panier.ctrl.php?erreurCommande");
    exit();
  }
}

include_once("../view/panier.view.php");
?>
