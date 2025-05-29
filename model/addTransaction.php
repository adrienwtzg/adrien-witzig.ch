<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include '../db/db_connect.php';


$date = (isset($_POST["date"]) ? $_POST["date"] : "");
$idCategory = (isset($_POST["category"]) ? $_POST["category"] : "");
$amount = (isset($_POST["amount"]) ? $_POST["amount"] : "");
$details = (isset($_POST["details"]) ? $_POST["details"] : "");
$next = (isset($_POST["next"]) ? $_POST["next"] : "");


$db = connectDB();
$query = $db->prepare("INSERT INTO `transactions` (`date`, `amount`, `details`, `nextMonth`, `idCategory`) VALUES (?,?,?,?,?)");
$query->bindParam(1, $date);
$query->bindParam(2, $amount);
$query->bindParam(3, $details);
$query->bindParam(4, $next);
$query->bindParam(5, $idCategory);

echo json_encode(true);

if ($query->execute()) {
    echo json_encode(true);
}
else {
  echo json_encode(false);
}
?>
