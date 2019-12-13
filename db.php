<?
$dbhost = "localhost";
$dbname = "project";
$username = "root";
$password = "";

$db = new PDO("mysql:host = $dbhost; dbname = $dbname", $username, $password);

function get_auditories() {
    global  $db;
    $auditories = $db->query("SELECT * FROM classes");
    return $auditories;
}


