<?php
session_start();
require_once('../model/DAO.class.php');

$arrayCategorie  = $dao->getAllCat();
$games = array();
if (isset($_GET['erreur'])) {
  $erreur=$_GET['erreur'];
}else{
  $erreur = "";
}

if(isset($_POST['act'])){
  switch ($_POST['act']) {
    case 'con': //connexion
      $idUser = $dao->getIdUser(htmlentities($_POST['email']),  htmlentities($_POST['password']));
      if($idUser >0){
        $_SESSION['user'] = $dao->getUser($idUser);
        header("Location: ../controler/connexion.ctrl.php");
        exit();
      }
      else{
        header("Location: ../controler/connexion.ctrl.php?erreur=erreurConnexion");
      }
      break;
    case 'ins':
      
      if($dao->emailDispo())

      break;
    case 'mod': //modification
      // code...
      break;
    default:
      // code...
      break;
  }
  //header("Location: ../controler/connexion.ctrl.php");
  //exit();
}


if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
  if ($user->type == 1) {
    include_once("../view/admin.view.php");
  }else {
    include_once("../view/user.view.php");
  }
}else {
  include_once("../view/connexion.view.php");
}

 ?>
