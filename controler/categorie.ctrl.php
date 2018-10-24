<?php
require_once('../model/DAO.class.php');
$arrayCategorie  = $dao->getAllCat();
$categorie = $dao->getCat($_GET['cat']);
$games = $dao->getNCat($categorie,0,10);
include_once("../view/main_page.view.php");

 ?>
