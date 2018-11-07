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
  if($_GET['act']=='add'){
    if (isset($_GET['quantite'])){
      $quantite = $_GET['quantite'];
    }else{
      $quantite = 1;
    }
    $panier->addJeuPanier($_GET['ref'], $quantite);
  }else if($_GET['act']=='sup'){
    $panier->supprimerJeu($_GET['ref']);
  }
  $_SESSION['panier'] = serialize($panier);
  header('Location: ../../controler/panier.ctrl.php');
  exit();
}

$_SESSION['panier'] = serialize($panier);


include_once("../view/panier.view.php");
?>
