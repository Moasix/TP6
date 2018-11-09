<?php
  require_once("../model/article.class.php");
  require_once("../model/DAO.class.php");
  class Panier {
    private $articles;


    function __construct() {
      $this->articles = array();
    }

    function getArticles() : array {
        $res = array();
        foreach ($this->articles as $key => $value) {
          if($value->quantite > 0){
            $res[$key] = $value;
          }
        }
        return $res;
    }

    function addJeuPanier(int $ref, int $quantite = 1) {
      if (array_key_exists($ref, $this->articles)) {
        if($quantite == 1){
            $this->articles[$ref]->quantite ++;
        }else{
            $this->articles[$ref]->quantite = $quantite;
        }
      } else{
        $this->articles[$ref] = new Article($ref,$quantite);
      }

    }

    function getTotal() : float {
      $s = 0.0;
      global $dao;
      foreach ($this->getArticles() as $key => $value) {
        $s += $dao->getJeu($value->ref)->prix*$value->quantite;
      }
      return $s;
    }


    public function __sleep()
    {
      return array('articles');
    }

    function supprimerJeu(int $ref) {
      $this->articles[$ref]->quantite = 0;
    }
  }
?>
