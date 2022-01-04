<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['user']; ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="student.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <script>
        history.pushState(null, null, null);
        window.addEventListener('popstate', function () {        //to disable back button after logout.
            history.pushState(null, null, null);
        });
      </script>
      
      <style>
  #forum{
    text-align: center;
    /* margin: 13px; */
    /* border: 1px solid purple; */
    padding: 20px;
    /* margin-top:27px; */
}

.forumsection{
    border:1px solid black;
    width: 100%;
    /* height: 420px; */
    background-color: beige;
    display: flex;
    align-items: center;
    justify-content: center;
}

.forumcontent{
width:93%;
height:200px;
border: 1px solid grey;
border-radius: 10px;
margin-top: 5px;
margin-bottom: 5px;
box-shadow: 0px 0px 15px 0px #b0aeae;
box-shadow: inset 0px 0px 5px 0px #b0aeae;
-webkit-box-shadow: inset 0px 0px 13px 0px #b0aeae;
}

.forumcontent:hover{
box-shadow: 0px 0px 15px 0px #b0aeae;
transition-duration:0.5s;
}


.user{
margin: 16px;
margin-left: 37px;
margin: 16px;
margin-left: 37px;
font-size: 21px;
font-weight: 400;
border-bottom: 1px solid grey;
}

.content{
margin: 37px;
}
</style>
</head>
<body>
    <div class="main">
        <!-- <div class="header">
            <h1 class="title">CALLIDUS</h1> 
            <div class="logo">
                <div class="logobox"></div>
            </div>

            
            
        </div> -->
    
        <div class="container1" >
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom " style="background-color: #D5E5F2;">
              <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
              </a>
        
              <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 " >
                <li><a href="student.php" class="nav-link px-4 link-dark">Dashboard</a></li>
                <li><a href="review.html" class="nav-link px-4 link-dark" id="mynav">Review</a></li>
                <li><a href="forum.html" class="nav-link px-4 link-dark" id="mynav">Forum</a></li>
                <li><a href="#" class="nav-link px-4 link-dark" id="mynav">About</a></li>
              </ul>
        
              <div class="dropdown text-end"  style="padding-right:20%;">
              
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./images/user.png" alt="mdo" width="42" height="42" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="./index.html">Sign out</a></li>
                </ul>
                <h6 style="display:flex;float:right;"><?php echo $_SESSION['user']; ?></h6>
              </div>
             
            </header>
          </div>

        <div class="card-section">
            <div><h4 style="opacity: 0.8;text-align: center;"> COURSE OVERVIEW</h4></div>
            <div class="b-example-divider"></div>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100 bg-light shadow p-1" id="card">
                <img src="./images/physics.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Physics <a href="course.php" class="btn btn-primary" style="float: right;">View Course</a></h5>
                  
                  
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 bg-light shadow p-1" id="card">
                <img src="./images/chemistry.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Chemistry <a href="course.php" class="btn btn-primary" style="float: right;">View Course</a> </h5>
                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 bg-light shadow p-1" id="card">
                <img src="./images/biology.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Biology <a href="course.php" class="btn btn-primary" style="float: right;">View Course</a></h5>
                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 bg-light shadow p-1" id="card">
                <img src="./images/math.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mathematics <a href="course.php" class="btn btn-primary" style="float: right;">View Course</a></h5>
                  
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-light shadow p-1" id="card">
                  <img src="./images/computer.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Computer Science <a href="course.php" class="btn btn-primary" style="float: right;">View Course</a></h5>
                
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-light shadow p-1" id="card">
                  <img src="./images/socialscience.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Social Science <a href="course.php" class="btn btn-primary" style="float: right;">View Course</a></h5>
                
                  </div>
                </div>
              </div>
              
              <?php
              // Include the database configuration file
              include 'upload_db_con.php';

              // Get images from the database
              $query = "SELECT * FROM course ORDER BY uploaded_on DESC";
              $run= mysqli_query($conn,$query) or die(mysqli_error($conn));
              $count=mysqli_num_rows($run);
              if($count > 0){
                while($row=mysqli_fetch_assoc($run)){
                  $imageURL = 'uploadimg/'.$row["file_name"];
                  $cname=$row["cname"];
              ?>
              <div class="col">
                <div class="card h-100 bg-light shadow p-1" id="card">
                  <img src="<?php echo $imageURL; ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cname; ?> <a href="course.php" class="btn btn-primary" style="float: right;">View Course</a></h5>
                    
                  </div>
                </div>
              </div>
              <?php }
                }else{ ?>
                 
              <?php } ?>
              <!-- <div class="col">
                <div class="card h-100 bg-light shadow p-1">
                  <img src="socialscience.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Geography <a href="#" class="btn btn-primary" style="float: right;">View Course</a></h5>
                
                  </div>
                </div>
              </div> -->
          </div>
          
        </div>

    
    
    <h5 id="forum">Forum</h5>
        <div class="forumsection">
          <?php
      
      $server="localhost";
      $username="root";
      $password="";
      $dbname="callidus";
      $conn = mysqli_connect($server , $username , $password , $dbname);
      
       $query="select * from forum";
      
       $run= mysqli_query($conn,$query) or die(mysqli_error($conn));
      
       while($rows=mysqli_fetch_assoc($run))
       {
       ?>
       <div class="forumcontent">
       <p class="user"><?php echo $rows['namex']; ?></p>
       <p class="content"><?php echo $rows['content']; ?></p>
       </div>
       <?php
       }
       ?>
          </div>

      </div>

</body>





</html>