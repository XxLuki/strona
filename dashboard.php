<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: index.php");	exit();
}

if(isset($_GET['logout'])){
    unset($_SESSION['user']);
    header("location: index.php");	exit();
}

$files = glob("./pytania/*.json");
$kurs = $_GET['file'];
//var_dump($_GET);
if ($kurs) {
    error_reporting(E_ALL);
//    display_errors(1);
    $questions = json_decode(file_get_contents("./pytania/$kurs"), true);
//    var_dump(json_last_error_msg(),$questions);
//    var_dump($questions["Program, który umożliwia komunikację między kartą sieciową a systemem operacyjnym, to"]);

}
//var_dump($files); exit();
foreach ($files as $file) {
    printf("<a href='?file=".basename($file)."'>".basename($file)."</a>");
 //basename($file);
}
var_dump($_SESSION);
//$answers = json_decode(file_get_contents("./answ/$"), true);

?>
