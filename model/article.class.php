<?php
class Article {
  public $ref;
  public $quantite;


  function __construct(int $r, int $q) {
    $this->ref = $r;
    $this->quantite = $q;
  }

}
?>
