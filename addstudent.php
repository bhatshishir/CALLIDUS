<?php
session_start();
$server="localhost";
$username="root";
$password="";
$dbname="callidus";

$conn = mysqli_connect($server , $username , $password , $dbname);

$name=$_POST['sname'];
$username=$_POST['userid'];
$password=$_POST['pass'];
$type=$_POST['type'];


$query="insert into signup1(name,userid,password,type) values ('$name','$username','$password','$type')";

$run= mysqli_query($conn,$query) or die(mysqli_error($conn));

if($run)
{
    header("location:admin.html");
}
else
{
    //Bootstrap alert!
}

?>