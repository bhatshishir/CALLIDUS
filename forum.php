<?php
session_start();

$server="localhost";
$username="root";
$password="";
$dbname="callidus";

$conn = mysqli_connect($server , $username , $password , $dbname);

$name=$_SESSION['user'];

$reviewx=$_POST['desc'];


$sql="insert into forum(namex,content) values ('$name','$reviewx')";

$run= mysqli_query($conn,$sql) or die(mysqli_error($conn));

if($run){
    header("location:forum.html");
    //target page
}
?>