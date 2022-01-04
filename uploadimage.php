<?php
// Include the database configuration file
include 'upload_db_con.php';
$statusMsg = '';

// File upload path
$targetDir = "studupimage/";
$fileName = basename($_FILES["upimg"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$sname = $_POST['sname'];
$cname = $_POST['cname'];
$tname = $_POST['tname'];



if(isset($_POST["submit"]) && !empty($_FILES["upimg"]["name"]))
{
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','txt');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["upimg"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
           // $insert = $db_name->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            $query="INSERT into assignment (sname,cname,taskname,file_name, upload_date) VALUES ('$sname','$cname','$tname','".$fileName."', NOW())";
            $run= mysqli_query($conn,$query) or die(mysqli_error($conn));
            if($run){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header('location:course.php');
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, PDF & txt files are allowed to upload.';
    }
}
else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>