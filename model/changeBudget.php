<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include '../db/db_connect.php';


$year = (isset($_POST["year"]) ? $_POST["year"] : "");
$month = (isset($_POST["month"]) ? $_POST["month"] : "");
$idCategory = (isset($_POST["idCategory"]) ? $_POST["idCategory"] : "");
$newAmount = (isset($_POST["newAmount"]) ? $_POST["newAmount"] : "");

$db = connectDB();

$check = $db->prepare("SELECT * FROM `budget` WHERE `year` = ? AND `month` = ? AND `idCategory` = ?");
$check->bindParam(1, $year);
$check->bindParam(2, $month);
$check->bindParam(3, $idCategory);

if ($check->execute()) {
  $tab = $check->fetchAll();
  if (empty($tab)) {
    $add = $db->prepare("INSERT INTO `budget` (`year`, `month`,`amount`, `idCategory`) VALUES (?,?,?,?)");
    $add->bindParam(1, $year);
    $add->bindParam(2, $month);
    $add->bindParam(3, $newAmount);
    $add->bindParam(4, $idCategory);

    if ($add->execute()) {
        echo json_encode(true);
    }
    else {
      echo json_encode(false);
    }
  }
  else {
    $upd = $db->prepare("UPDATE `budget` SET `amount` = ? WHERE `year` = ? AND `month` = ? AND `idCategory` = ?");
    $upd->bindParam(1, $newAmount);
    $upd->bindParam(2, $year);
    $upd->bindParam(3, $month);
    $upd->bindParam(4, $idCategory);

    if ($upd->execute()) {
      echo json_encode(true);
    }
    else {
      echo json_encode(false);
    }
  }
}
else {
  echo json_encode(false);
}



?>
