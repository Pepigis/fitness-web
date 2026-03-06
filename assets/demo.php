<?php
include "Db.php";

define('_DB_HOST', 'localhost');
define('_DB_NAME', 'cernyjo1');
define('_DB_USER', 'cernyjo1');
define('_DB_PASSWORD', 'Ew12345678!');


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    Db::connect(_DB_HOST, _DB_NAME, _DB_USER, _DB_PASSWORD);
} catch (Exception $ex) {
    echo "Chyba připojení k databázi: " . $ex->getMessage();
    exit;
}

$allRecords = Db::queryAll('SELECT * FROM project_courses');
foreach ($allRecords as $record) {
    echo('ID: ' . $record['id'] . ', Param1: ' . $record['title'] . "\n");
}

?>