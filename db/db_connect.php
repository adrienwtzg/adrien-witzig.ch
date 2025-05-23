<?php
//Informations d'authenfication à la base de données
DEFINE('SERVER', 'as1hym.myd.infomaniak.com');
DEFINE('PORT', '');
DEFINE('PSEUDO', 'as1hym_admin');
DEFINE('PWD', '9FoTGNJKnN1Prd!');
DEFINE('DB_NAME', 'as1hym_fd2');

//Fonction de connexion à la base de données
function connectDB() {
    static $db = null;
    if ($db === null) {
        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $db = new PDO("mysql:host=". SERVER .";port=". PORT .";dbname=". DB_NAME, PSEUDO, PWD, $pdo_options);
            $db->exec('SET CHARACTER SET utf8');
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    return $db;
}


?>