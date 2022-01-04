<?php
session_start();


$server="localhost";
$username="root";
$password="";
$dbname="callidus";

$conn = mysqli_connect($server , $username , $password , $dbname);

 $userid=$_POST['username'];
 $pass=$_POST['password'];
 $type=$_POST['type'];

$query="select type from signup1 where userid='$userid' AND password='$pass' AND type='$type'";
$query1="select name from signup1 where userid='$userid' AND password='$pass' AND type='$type'";
$run= mysqli_query($conn,$query) or die(mysqli_error($conn));
$run1= mysqli_query($conn,$query1) or die(mysqli_error($conn));



$count=mysqli_num_rows($run);
$count1=mysqli_num_rows($run1);

if($count==1 && $count1==1)
{
   if($type=='Admin')
    {
        $_SESSION['user']=$userid;
        header("location:admin.html");
    }
    if($type=='Student')
    {  
         $_SESSION['sname']=$name;
        $_SESSION['user']=$userid;
        header("location:student.php");
    }
    if($type=='Faculty')
    {
        $_SESSION['user']=$userid;
        header("location:teacher.php");
    }
}
else
{
   //Bootsrap alert--Unsuccessful Login
}

// if($count1==1)
// {
  
//     if($type=='Student')
//     {   $_SESSION['sname']=$name;
//         // $_SESSION['user']=$userid;
//         // header("location:student.php");
//     }
    
// }
// else
// {
//    //Bootsrap alert--Unsuccessful Login
// }

?>


   







