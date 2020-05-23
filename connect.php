<?php
   $name = $_POST['name'];
   $gender= $_POST['gender'];
   $email= $_POST['email'];
  $department= $_POST['department'];

   $conn = new mysqli('localhost','root','','form');
if($conn->connect_error )
{
    die('connetion failed:'.$conn->connect_error);
}
else{
$stmt = $conn->prepare("insert into search(name,gender,email,department) values(?,?,?,?)");
$stmt->bind_param("ssss",$name,$gender,$email,$department);
$stmt->execute();
header("Location: ../Mess/Home.php?signupsucc");
$stmt->close();
$conn->close();
}
?>
