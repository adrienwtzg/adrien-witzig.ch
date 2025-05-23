<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include '../db/db_connect.php';

$idCategory = (isset($_GET["idCategory"]) ? $_GET["idCategory"] : "");
$year = (isset($_GET["year"]) ? $_GET["year"] : "");


$db = connectDB();


$qCats = $db->prepare("SELECT * FROM categories");


$qBud = $db->prepare("SELECT * FROM `budget` WHERE `year` = ?");
$qBud->bindParam(1, $year);



if ($qCats->execute()) {
  $cats = $qCats->fetchAll();
  

  if ($qBud->execute()) {
    $buds = $qBud->fetchAll();
    $result = [];
    $c = 0;
    foreach ($cats as $cat) {
      $result[$c][0] = $cat["idCategory"];
      $result[$c][1] = $cat["name"];
      $result[$c][2] = $cat["type"];
      $result[$c][3] = "";
      $result[$c][4] = "";
      $result[$c][5] = "";
      $result[$c][6] = "";
      $result[$c][7] = "";
      $result[$c][8] = "";
      $result[$c][9] = "";
      $result[$c][10] = "";
      $result[$c][11] = "";
      $result[$c][12] = "";
      $result[$c][13] = "";
      $result[$c][14] = "";
      
      foreach ($buds as $bud) {
        if ($bud[4] == $cat["idCategory"]) {
          $result[$c][$bud["month"]+2] = $bud["amount"];
        }


        /*if($bud[4] == $cat["idCategory"]) {
          $result[$c][3] = $bud["idCategory"];
          $result[$c][4] = $bud["year"];
          $result[$c][5] = $bud["month"];
          $result[$c][6] = $bud["amount"];
        }
        else {
          $result[$c][3] = null ;
          $result[$c][4] = null ;
          $result[$c][5] = null ;
          $result[$c][6] = null ;
        }*/
      }
      $c += 1;
    }
    
    echo json_encode($result);

  }
  else {
    echo json_encode(1);
  }
}
else {
  echo json_encode(1);
}
?>