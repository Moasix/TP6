<?php
require_once('../model/DAO.class.php');
$games = $dao->firstN(10);
include_once("../view/main_page.view.php");

 ?>
