<?php 

$server = "sql109.epizy.com";
$user = "epiz_27187058";
$pass = "XdVuybGYQVSfJ";
$database = "epiz_27187058_vcstech";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>