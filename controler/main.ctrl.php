<?php
require_once('../model/DAO.class.php');
$arrayCategorie  = $dao->getAllCat();
$games = $dao->getN(0,10);
include_once("../view/main_page.view.php");

 ?>
