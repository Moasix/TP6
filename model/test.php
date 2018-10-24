<?php       session_start(); ?>
<html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Juk Zik</title>
      <link href="main3.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>

      <h1>test</h1>
      <?php
      require_once(../model/DAO.php);
      

       ?>






      <?php


      if(!isset($_SESSION['texte']){
        $_SESSION['texte'] = "";
      }

print "<p> $_SESSION['texte'] </p>";
       ?>

<a href="../model/test.php">le lien</a>
<input type="text" id="uname" name="name">
<?php
$_SESSION['texte'] = uname





 ?>
    </body>
</html>
