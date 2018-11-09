<?php
require_once("../model/DAO.class.php");
class User {
  public $id;
  public $email;
  public $password;
  public $type;
  public $nom;
  public $prenom;

  public function __sleep()
  {
    return array('id','email','password','type','nom','prenom');
  }

  }

  ?>
