<?php
$server="localhost";
$username="root";
$password="";
$dbname="callidus";

$usernamex=$_POST["username"];
$passwordx=$_POST["password"];
$type= $_POST["type"];

$con=new mysqli($server,$username,$password,$dbname);

if($con->connect_error){
    echo "connection unsuccessfull!";
}


$sql="insert into login(username,password,type) values('$usernamex','$passwordx','$type')";

if($con->query($sql)==TRUE){
    echo "record entered";
}

?>
