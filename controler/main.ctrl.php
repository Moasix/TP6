<?php
//Page d'accueil du site

require_once('../model/DAO.class.php');

/////////////////////////////////
//// RECUPERATION DES DONNEES
/////////////////////////////////

$arrayCategorie  = $dao->getAllCat();
$games = $dao->getN(0,10);

/////////////////////////////////
//// APPEL A LA VUE
/////////////////////////////////

include_once("../view/main_page.view.php");

 ?>
