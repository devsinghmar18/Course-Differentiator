<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "Course_differentiator";

$conn = mysqli_connect($servername, $username, $password, $database);

$Name = $_POST["name"];
$Username = $_POST["username"]; 
$Email = $_POST["email"];
$Password = $_POST["password"]; 

$sql = "insert into signup(`Name`,`username`,`email`,`password`) values ($Name,$Username,$Email,$Password)";
$result = mysqli_query($conn, $sql);
if($result){
    include 'login.html';
}
else{
    include 'login.html/';
}
?>