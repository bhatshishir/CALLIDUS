<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'callidus');

$sql = "SELECT * FROM myassignment";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['upfile']['name'];
    $sname=$_POST['sname'];
    $cname=$_POST['cname'];
    $tname=$_POST['tname'];

    // destination of the file on the server
    $destination = 'studassign/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['upfile']['tmp_name'];
    $size = $_FILES['upfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','txt'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['upfile']['size'] > 10000000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO myassignment (sname, cname,taskname,file_name, upload_date) VALUES ('$sname','$cname','$tname','$filename',NOW())";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
                header("location:course.php");
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
//download code

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM myassignment WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'studassign/' . $file['file_name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('studassign/' . $file['file_name']));
        readfile('studassign/' . $file['file_name']);

        // Now update downloads count
        // $newCount = $file['downloads'] + 1;
        // $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        // mysqli_query($conn, $updateQuery);
        // exit;
    }

}