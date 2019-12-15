<?
$dbhost = "localhost";
$dbname = "project";
$username = "root";
$password = "";

$dateDb = mysqli_connect($dbhost, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($dateDb));

if(filter_input_array(INPUT_POST, ['date'])) {
    $date = json_decode(filter_input_array(INPUT_POST, ['date']));
    $currDay = get_text($date->currDay);
    exit();
}