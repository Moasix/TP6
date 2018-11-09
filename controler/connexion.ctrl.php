<?php
require_once('../model/DAO.class.php');
require_once('../model/user.class.php');
session_start();


$arrayCategorie  = $dao->getAllCat();
$games = array();
if (isset($_GET['erreur'])) {
  $erreur=$_GET['erreur'];
}else{
  $erreur = "";
}

if(isset($_GET['deco'])){
  unset($_SESSION['user']);
  header("Location: ../controler/main.ctrl.php");
  exit();
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
        exit();
      }
      break;
    case 'ins':

      if($dao->emailDispo($_POST['email'])){
        if ($_POST['password'] == $_POST['passwordVerif']) {
          $user = User();
          $user->email = htmlentities($_POST['email']);
          $user->password = password_hash(htmlentities($_POST['password']));
          $user->nom = htmlentities($_POST['nom']);
          $user->prenom = htmlentities($_POST['prenom']);
          $dao->addUser($user);
        }else{
          header("Location: ../controler/connexion.ctrl.php?erreur=erreurPassword");
          exit();
        }
      }else {
        header("Location: ../controler/connexion.ctrl.php?erreur=erreurEmail");
        exit();
      }

      break;
    case 'mod': //modification
        if($dao->emailDispo($_POST['email'])){
          if ($_POST['password'] == $_POST['passwordVerif']) {
            $user = User();
            $user->email = htmlentities($_POST['email']);
            $user->password = password_hash(htmlentities($_POST['password']));
            $user->nom = htmlentities($_POST['nom']);
            $user->prenom = htmlentities($_POST['prenom']);
            $dao->addUser($user);
          }else{
            header("Location: ../controler/connexion.ctrl.php?erreur=erreurPassword");
            exit();
          }
        }else {
          header("Location: ../controler/connexion.ctrl.php?erreur=erreurEmail");
          exit();
        }
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
