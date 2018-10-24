
<?php
require_once('../model/DAO.class.php');
$arrayCategorie = $dao->getAllCat();
?>

<html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Juk Zik</title>
      <link rel="stylesheet" type="text/css" href="../view/stylemain_page.css" />
    </head>
    <body>

<?php  include('../view/header_include.view.php') ?>



      <h1>Jukebox</h1>



    </body>
</html>
