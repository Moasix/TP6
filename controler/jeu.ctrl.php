<?php
require_once('../model/DAO.class.php');
$games = $dao->getJeu($_GET['ref']);
include_once("../view/jeu.view.php");
 ?>
