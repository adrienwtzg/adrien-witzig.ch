<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include '../db/db_connect.php';


$name = (isset($_GET["nameCat"]) ? $_GET["nameCat"] : "");
$type = (isset($_GET["typeCat"]) ? $_GET["typeCat"] : "");


$db = connectDB();
$query = $db->prepare("INSERT INTO `categories` (`name`, `type`) VALUES (?,?)");
$query->bindParam(1, $name);
$query->bindParam(2, $type);

if ($query->execute()) {
    echo json_encode(true);
}
else {
  echo json_encode(false);
}
?>
