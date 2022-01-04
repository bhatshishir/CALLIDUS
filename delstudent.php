<?php
session_start();
$server="localhost";
$username="root";
$password="";
$dbname="callidus";

$conn = mysqli_connect($server , $username , $password , $dbname);

$username=$_POST['username'];

$query="delete from signup1 where userid='$username'";

$run= mysqli_query($conn,$query) or die(mysqli_error($conn));

if($run)
{
    header("location:admin.html");
}
else
{
    //Bootsrap alert
}

?>