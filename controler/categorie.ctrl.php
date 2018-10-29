<?php
//Page

require_once('../model/DAO.class.php');

/////////////////////////////////
//// RECUPERATION DES DONNEES
/////////////////////////////////

$arrayCategorie  = $dao->getAllCat();
$categorie = $dao->getCat($_GET['cat']);
$games = $dao->getNCat($categorie,0,10);



/////////////////////////////////
//// APPEL A LA VUE
/////////////////////////////////

include_once("../view/categorie.view.php");

 ?>
