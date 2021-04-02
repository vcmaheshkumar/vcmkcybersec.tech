<?php
$server = "sql109.epizy.com";
$username = "epiz_27187058";
$password = "XdVuybGYQVSfJ";
$dbname = "epiz_27187058_vcstech";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty('type') && !empty('platform') && !empty('compact') && !empty('method') && !empty('screen') && !empty('login') && !empty('feature') && !empty('language') && !empty('requirement') && !empty('adminplatform') && !empty('additional') && !empty('vendorapp')){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $type = $_POST['type'];
    $platform = $_POST['platform'];
    $compact = $_POST['compact'];
    $method = $_POST['method'];
    $screen = $_POST['screen'];
    $login = $_POST['login'];
    $feature = $_POST['feature'];
    $language = $_POST['language'];
    $requirement = $_POST['requirement'];
    $adminplatform = $_POST['adminplatform'];
    $additional = $_POST['additional'];
    $vendorapp = $_POST['vendorapp'];

    $query = "insert into android(name,email,phone,type,platform,compact,method,screen,login,feature,language,requirement,adminplatform,additional,vendorapp) value('$name','$email','$phone','$type','$platform','$compact','$method','$screen','$login','$feature','$language','$requirement','$adminplatform','$additional','$vendorapp')";

    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if ($run) {
      echo "<script>alert('we wil contact you soon with in 24 hours');</script>";
    }
    else {
      echo "<script>alert('Please try after some times');</script>";
    }
  }
  else {
    echo "all fields required";
  }
}
?>
