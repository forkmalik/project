<?
$dbhost = "localhost";
$dbname = "project";
$username = "root";
$password = "";

$dateDb = mysqli_connect($dbhost, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($dateDb));

$currDay = (int)$_GET['currDay'];
$currHour = (int)$_GET['currHour'];;
$currMin = (int)$_GET['currMin'];;

echo $currDay;