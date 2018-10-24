<?php

    require_once("../model/Categorie.class.php");
    require_once("../model/Jeu.class.php");

    // Creation de l'unique objet DAO
    $dao = new DAO();


    class DAO {
        private $db;
        private $database = 'sqlite:../data/db/database.db';
        function __construct() {
            try {
                $this->db = new PDO($this->database);
            } catch (\Exception $e) {
                die("erreur de base de donnée:".$e->getMessage());
            }
        }


        function getAllCat() : array {
            $b = $this->db->query("SELECT * FROM categorie");
            $array = $b->fetchAll(PDO::FETCH_CLASS, 'Categorie');
            return $array;
        }

        function firstN(int $n) : array {
            $b = $this->db->query("SELECT * FROM jeux LIMIT $n");
            $array = $b->fetchAll(PDO::FETCH_CLASS, 'Jeu');
            return $array;
        }

        // Acces au n articles à partir de la reférence $ref
        // Cette méthode retourne un tableau contenant n  articles de
        // la base sous la forme d'objets de la classe Article.
        function getN(int $ref,int $n) : array {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////
            $b = $this->db->query("SELECT * FROM article where ref >= $ref  LIMIT $n");
            $array = $b->fetchAll(PDO::FETCH_CLASS, 'Article');
            return $array;

        }

        // Acces à la référence qui suit la référence $ref dans l'ordre des références
        function next(int $ref) : int {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////
            $b = $this->db->query("SELECT ref FROM article where ref > $ref  LIMIT 1");
            $array = $b->fetchAll(PDO::FETCH_ASSOC);
var_dump($array);
            if(count($array) != 0){
              return $array[0]['ref'];
            }else{
              return 0;
            }
        }

        // Acces aux n articles qui précèdent de $n la référence $ref dans l'ordre des références
        function prevN(int $ref,int $n): array {
          $b = $this->db->query("SELECT * FROM article where ref < $ref order by ref desc limit $n");
          $array = $b->fetchAll(PDO::FETCH_CLASS, 'Article');
          $arr1 = $array;
          foreach ($arr1 as $key => $value) {
            $array[$n-$key-1] = $value;
          }
          var_dump($array);
          return $array;
        }



        // Acces à une catégorie
        // Retourne un objet de la classe Categorie connaissant son identifiant
        function getCat(int $id): Categorie {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////////////

            return new Categorie();
        }




        // Acces au n articles à partir de la reférence $ref
        // Retourne une table d'objets de la classe Article
        function getNCateg(int $ref,int $n,string $categorie) : array {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////////////
            return array();
        }

    }

    ?>