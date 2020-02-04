<?
$dbhost = "localhost";
$dbname = "project";
$username = "root";
$password = "";

$db = mysqli_connect($dbhost, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($db));

function get_auditories_lec() {
    global  $db;
    $auditories = $db->query("SELECT * FROM classes WHERE type = 'Lecture'");
    return $auditories;
}

function get_auditories_prac() {
    global  $db;
    $auditories = $db->query("SELECT * FROM classes WHERE type = 'Practice'");
    return $auditories;
}


