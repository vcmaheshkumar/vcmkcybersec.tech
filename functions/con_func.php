<?php
$server = "sql109.epizy.com";
$username = "epiz_27187058";
$password = "XdVuybGYQVSfJ";
$dbname = "epiz_27187058_vcstech";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty('checkbox') && !empty('message')){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkbox = $_POST['checkbox'];
    $message = $_POST['message'];

    $query = "insert into contact(name,email,phone,checkbox,message) value('$name','$email','$phone','$checkbox','$message')";

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
