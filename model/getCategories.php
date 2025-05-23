<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include '../db/db_connect.php';


$db = connectDB();
$query = $db->prepare("SELECT * FROM categories");

if ($query->execute()) {
  $tab = $query->fetchAll();
  echo json_encode($tab);
}
else {
  echo json_encode(1);
}
?>