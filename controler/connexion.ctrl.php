<?php
require_once('../model/DAO.class.php');
require_once('../model/user.class.php');
session_start();


$arrayCategorie  = $dao->getAllCat();
$games = array();
if (isset($_GET['erreur'])) {
  switch ($_GET['erreur']) {
    case 'erreurPassword':
      $erreur = "Erreur : les mots de passe ne correspondent pas"
      break;
    case 'erreurConnexion':
      $erreur = "Erreur : Mauvais identifiants"
      break;
    case 'erreurEmail':
      $erreur = "Erreur : adresse email déja utilisée"
      break;
    default :
      break;
  }
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
      if($idUser > 0){
        $_SESSION['user'] = $dao->getUser($idUser);
        if(isset($_GET['commande'])){
          header("Location: ../controler/panier.ctrl.php?commande&empty");
        } else{
          header("Location: ../controler/connexion.ctrl.php");
        }
        exit();
      }
      else{
        if(isset($_GET['commande'])){
          header("Location: ../controler/connexion.ctrl.php?erreur=erreurConnexion&commande&empty");
        } else{
          header("Location: ../controler/connexion.ctrl.php?erreur=erreurConnexion");
        }
        exit();
      }
      break;

    case 'ins': //Inscription
      if($dao->emailDispo($_POST['email'])){
        if ($_POST['password'] == $_POST['passwordVerif']) {
          $user = new User;
          $user->email = htmlentities($_POST['email']);
          $user->password = password_hash(htmlentities($_POST['password']), PASSWORD_DEFAULT);
          $user->nom = htmlentities($_POST['nom']);
          $user->prenom = htmlentities($_POST['prenom']);
          $dao->addUser($user);
          $idUser = $dao->getIdUser(htmlentities($_POST['email']),  htmlentities($_POST['password']));
          if($idUser > 0){
            $_SESSION['user'] = $dao->getUser($idUser);
            if(isset($_GET['commande'])){
              header("Location: ../controler/panier.ctrl.php?commande&empty");
            } else{
              header("Location: ../controler/connexion.ctrl.php");
            }
            exit();
          }
        }else{
          if(isset($_GET['commande'])){
            header("Location: ../controler/connexion.ctrl.php?erreur=erreurPassword&commande");
          } else{
            header("Location: ../controler/connexion.ctrl.php?erreur=erreurPassword");
          }
          exit();
        }
      }else {
        if(isset($_GET['commande'])){
          header("Location: ../controler/connexion.ctrl.php?erreur=erreurEmail&commande");
        } else{
          header("Location: ../controler/connexion.ctrl.php?erreur=erreurEmail");
        }
        exit();
      }

      break;
    case 'mod': //modification
        if($_POST['email'] == $_SESSION['user']->email || $dao->emailDispo($_POST['email'])){
          if ($_POST['password'] == $_POST['passwordVerif']) {
            $user = new User;
            $user->id = $_SESSION['user']->id;
            if($_POST['password'] != ""){
              $user->password = password_hash(htmlentities($_POST['password']), PASSWORD_DEFAULT);
            }else{
              $user->password = $_SESSION['password'];
            }
            $user->email = htmlentities($_POST['email']);
            $user->nom = htmlentities($_POST['nom']);
            $user->prenom = htmlentities($_POST['prenom']);
            $dao->modUser($user);
            $_SESSION['user'] = $dao->getUser($_SESSION['user']->id);
            header("Location: ../controler/connexion.ctrl.php");
            exit();
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
      break;
  }
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
