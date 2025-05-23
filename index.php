<?php
//Démarre la session si ça n'est pas déja fait
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//include '/db/databaseConnection.php';

//En-tête de page
include 'views/head.php';

//Nom de la page actuelle
$page = (isset($_GET["page"]) ? $_GET["page"] : "");

if ($page == "" || $page == "dash") {
    include 'views/dash.php';
}
else if ($page == "budget") {
    include 'views/budget.php';
}
else if ($page == "settings") {
    include 'views/settings.php';
}
else if ($page == "trans") {
    include 'views/trans.php';
}
else if ($page == "payments") {
    include 'views/payments.php';
}
else if ($page == "savings") {
    include 'views/savings.php';
}

?>