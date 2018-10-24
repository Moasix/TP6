<?php
require_once('../model/DAO.class.php');
$arrayCategorie  = $dao->getAllCat();
$jeu = $dao->getJeu($_GET['ref']);
include_once("../view/jeu.view.php");
 ?>
