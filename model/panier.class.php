<?php
  require_once("../model/article.class.php");
  require_once("../model/DAO.class.php");
  class Panier {
    private $articles;


    function __construct() {
      $this->articles = array();
    }

    function getArticles() : array {
        return $this->articles;
    }

    function addJeuPanier(int $ref, int $quantite) : void {
      $alreadyIn = 0;
      for ($i=0; $i < count($this->articles) && !$alreadyIn; $i++) {
        if($this->articles[$i]->ref == $ref){
          $this->articles[$i]->quantite += $quantite;
          $alreadyIn = 1;
        }
      }
      if (!$alreadyIn) {
        $this->articles[] = new Article($ref,$quantite);
      }
    }

    function getTotal() : float {
      $s = 0.0;
      global $dao;
      foreach ($this->articles as $key => $value) {
        $s += $dao->getJeu($value->ref)->prix*$value->quantite;
      }
      return $s;
    }

    public function __sleep()
    {
      return array('articles');
    }
  }
?>
