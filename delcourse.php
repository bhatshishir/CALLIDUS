<?php
session_start();
$server="localhost";
$username="root";
$password="";
$dbname="callidus";

$conn = mysqli_connect($server , $username , $password , $dbname);

$c_name=$_POST['coursename'];

$query="delete from course where cname='$c_name'";

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