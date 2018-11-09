<?php

    require_once("../model/Categorie.class.php");
    require_once("../model/Jeu.class.php");
    require_once("../model/user.class.php");

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

        //renvoie une 'array' de toutes les categories
        function getAllCat() : array {
            $b = $this->db->query("SELECT * FROM categorie");
            $array = $b->fetchAll(PDO::FETCH_CLASS, 'Categorie');
            return $array;
        }

        //renvoie la categorie correspondant à l'id en entrée
        function getCat(int $id) : Categorie {
            $b = $this->db->query("SELECT * FROM categorie where id = $id");
            $array = $b->fetchAll(PDO::FETCH_CLASS, 'Categorie');
            return $array[0];
        }

        //retourne $n jeux à partir de $ref
        function getNjeu(int $ref,int $n) : array {
            $b = $this->db->query("SELECT * FROM jeux where ref >= $ref order by ref LIMIT $n");
            $array = $b->fetchAll(PDO::FETCH_CLASS, 'Jeu');
            return $array;

        }

        //selectionne un jeu
        function getJeu(int $ref) : Jeu {
          $b = $this->db->query("SELECT * FROM jeux where ref = $ref");
          $array = $b->fetchAll(PDO::FETCH_CLASS, 'Jeu');
          return $array[0];
        }
        //retourne $n jeu ayant $cat comme categorie à partir de $ref
        function getNCat(Categorie $cat, int $ref,int $n) : array {
            $b = $this->db->query("SELECT * FROM jeux where ref >= $ref and categorie = $cat->id order by ref LIMIT $n");
            $array = $b->fetchAll(PDO::FETCH_CLASS, 'Jeu');
            return $array;
        }
        //retourne tous les jeux
        function getAllJeux() : array {
          $b = $this->db->query("SELECT * FROM jeux");
          $array = $b->fetchAll(PDO::FETCH_CLASS, 'Jeu');
          return $array;
        }


////////////////////////////utilisateurs


        function getIdUser(string $email, string $password ) : Int {
          $b = $this->db->query("SELECT id, password FROM users where email == '$email'");
          $res = $b->Fetch(PDO::FETCH_ASSOC);
          if(!empty($res) && password_verify($password , $res['password'])){
            return($res['id']);
          }else{
            return -1;
          }
        }
        function emailDispo(string $email) : bool {
          $b = $this->db->query("SELECT * FROM users where email == '$email'");
          $res = $b->Fetch(PDO::FETCH_ASSOC);
          return (empty($res));
        }

        function getUser(int $id) : User {
          $b = $this->db->query("SELECT * FROM users where id == $id");
          $array = $b->fetchAll(PDO::FETCH_CLASS, 'User');
          return $array[0];
        }

        function addUser(User $user) {
          $id = $this->db->query("SELECT id FROM users order by id desc limit 1")->fetch(PDO::FETCH_ASSOC)['id']+1;
          $sql = "INSERT INTO users (id,email,password,type,nom,prenom) VALUES (?,?,?,?,?,?)";
          $stmt = $this->db->prepare($sql);
          $stmt->execute([$is,$user->email,$user->password,0,$user->nom,$user->prenom]);
        }

        function modUser(User $user) {
          $this->db->exec("UPDATE users set email = '$user->email', password = '$user->password',nom = '$user->nom', prenom = '$user->prenom' WHERE id == $user->id");
        }


    }

    ?>
