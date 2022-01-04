<?php
session_start();

$server="localhost";
$username="root";
$password="";
$dbname="callidus";

$conn = mysqli_connect($server , $username , $password , $dbname);

$name=$_SESSION['user'];

$reviewx=$_POST['desc'];
$stars=$_POST['stars'];

$sql="insert into review(namex,content,stars) values ('$name','$reviewx','$stars')";

$run= mysqli_query($conn,$sql) or die(mysqli_error($conn));

if($run){
    header("location:review.html");
    //target page
}
?>