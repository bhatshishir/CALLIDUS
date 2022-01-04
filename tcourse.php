<?php include 'uploadassign.php';
session_start();?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Course</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <style>
   

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.wrapper{
  height: 100%;
  width: 300px;
  position: relative;
}
.wrapper .menu-btn{
  position: absolute;
  left: 20px;
  top: 10px;
  background: #4a4a4a;
  color: #fff;
  height: 45px;
  width: 45px;
  z-index: 9999;
  border: 1px solid #333;
  border-radius: 5px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}
#btn:checked ~ .menu-btn{
  left: 247px;
}
.wrapper .menu-btn i{
  position: absolute;
  
  font-size: 23px;
  transition: all 0.3s ease;
}
.wrapper .menu-btn i.fa-times{
  opacity: 0;
}
#btn:checked ~ .menu-btn i.fa-times{
  opacity: 1;
  transform: rotate(-180deg);
}
#btn:checked ~ .menu-btn i.fa-bars{
  opacity: 0;
  transform: rotate(180deg);
}
#sidebar{
  position: fixed;
  background: #404040;
  height: 100%;
  width: 270px;
  overflow: hidden;
  left: -270px;
  transition: all 0.3s ease;
}
#btn:checked ~ #sidebar{
  left: 0;
}
#sidebar .title{
  line-height: 65px;
  text-align: center;
  background: #333;
  font-size: 25px;
  font-weight: 600;
  color: #f2f2f2;
  border-bottom: 1px solid #222;
}
#sidebar .list-items{
  position: relative;
  background: #404040;
  width: 100%;
  height: 100%;
  list-style: none;
}
#sidebar .list-items li{
  padding-left: 40px;
  line-height: 50px;
  border-top: 1px solid rgba(255,255,255,0.1);
  border-bottom: 1px solid #333;
  transition: all 0.3s ease;
}
#sidebar .list-items li:hover{
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  box-shadow: 0 0px 10px 3px #222;
}
#sidebar .list-items li:first-child{
  border-top: none;
}
#sidebar .list-items li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  height: 100%;
  width: 100%;
  display: block;
}
#sidebar .list-items li a i{
  margin-right: 20px;
}
#sidebar .list-items .icons{
  width: 100%;
  height: 40px;
  text-align: center;
  position: absolute;
  bottom: 100px;
  line-height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}
#sidebar .list-items .icons a{
  height: 100%;
  width: 40px;
  display: block;
  margin: 0 5px;
  font-size: 18px;
  color: #f2f2f2;
  background: #4a4a4a;
  border-radius: 5px;
  border: 1px solid #383838;
  transition: all 0.3s ease;
}
#sidebar .list-items .icons a:hover{
  background: #404040;
}
.list-items .icons a:first-child{
  margin-left: 0px;
}

#subd{
  text-align: center;
    /* border-bottom: 1px solid black; */
    /* margin: 26px; */
    padding: 10px;
    background: #f6f6f6;
}

.viewassignments{
  /* border:1px solid black; */
  height:456px;
  width:100%;
}
.viewassignments h5{
  text-align: center;
    /* margin: 13px; */
    /* border: 1px solid purple; */
    padding: 6px;
}

.viewassignments .view{
  /* border:1px solid black; */
  width:100%;
  height:420px;
  background-color: beige;
  display: flex;
  align-items: center;
  justify-content: center;
}

.uploadassignments{
  /* border:1px solid black; */
  width:100%;
  height:456px;
}

.uploadassignments h5{
  text-align: center;
    /* margin: 13px; */
    /* border: 1px solid purple; */
    padding: 20px;
}

.uploadassignments .view{
  /* border:1px solid black; */
  width:100%;
  height:420px;
  background-color: beige;
  display: flex;
  align-items: center;
  justify-content: center;
}

#mynav:hover{
    color:#002FA7;
    font-size: 110%;
}




      </style>

   </head>
   <body>
      <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar">
            <div class="title">
               Student
            </div>
            <ul class="list-items">
               <li><a href="teacher.php"><i class="fas "></i>Home</a></li>
               <li><a href="#"><i class="fas "></i>Uploads</a></li>
               <li><a href="#"><i class="fas "></i>Assignments</a></li>
               <li><a href="#review"><i class="fas "></i>Review</a></li>
            </ul>
         </nav>
      </div>
      
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="./images/calliduslogo"/></svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 " >
                <li><a href="teacher.php" class="nav-link px-4 link-dark" id="mynav">Dashboard</a></li>
                <li><a href="#review" class="nav-link px-4 link-dark" id="mynav">Review</a></li>
                <li><a href="forum.html" class="nav-link px-4 link-dark" id="mynav">Forum</a></li>
                <li><a href="#" class="nav-link px-4 link-dark" id="mynav">About</a></li>
        </ul>
  
        <!-- <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li id="user">Course</li>
        </ul> -->

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
        </div>
  
        <!-- <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2">Logout</button>
        </div> -->
      </header>

      <div class="dashtitle">
        <h4 id="subd">Subject Dashboard</h4>
      </div>
      <div class="dashboard"></div>
      <div class="viewassignments">
      <h5>Upload Study Materials</h5>
      <div class="view">

      <a href="#" class="btn btn-primary card-button-insert" data-bs-toggle="modal" data-bs-target="#uploadimage">Upload material</a>

        <div class="modal fade" id="uploadimage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <form id="modalform1" action="#uploadmaterial.php" method="post" enctype="multipart/form-data">
                <!-- <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-4" id="c_name" name="sname" placeholder="Course Name">
                  <label for="c_name">Student Name</label>
                </div> -->
                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-4" id="c_name" name="cname" placeholder="Course Name">
                  <label for="c_name">Course Name</label>
                </div>
                <!-- <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-4" id="c_name" name="tname" placeholder="Course Name">
                  <label for="c_name">Task Name</label>
                </div> -->
                <!-- <div class="form-floating mb-3">
                  <input type="file" class="form-control rounded-4" id="img" >
                  <label for="img">Image</label>
                </div> -->
                <small style="opacity: 0.8;font-weight:600;padding-left: 14px;">Upload Image</small>
                <div class="input-group mb-4">
                  <input type="file" class="form-control" id="img" name="upfile">
                   <!-- name="upimg" -->
                </div>
                <!-- <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-4" id="target" placeholder="Target Page">
                  <label for="target">Target Page</label>
                </div> -->
                <!-- <button class="w-100 mb-2 btn btn-md rounded-4 btn-primary" type="submit">Add Course</button> -->
                <input type="submit" class="btn btn-primary w-25" value="Add" name="submit"></input>
                
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetform()">Close</button>
             
             
            </div>
          </div>
        </div>
      </div>

      </div>
      </div>

      <div class="uploadassignments">
      <h5>View Assignments</h5>
      <div class="view">
        <!-- <form action="uploadassign.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="upfile"> <br>
          <button type="submit" name="upload">upload</button>
        </form> -->
        
        <div class="row"> 
        <?php 
             
              include 'upload_db_con.php';
              
              
              $query = "SELECT * FROM myassignment ";
              $run= mysqli_query($conn,$query) or die(mysqli_error($conn));
              $count=mysqli_num_rows($run);
              if($count > 0){
                while($row=mysqli_fetch_array($run, MYSQLI_ASSOC)){
                 
                 
                  $filename = $row['file_name'];
                  $sname=$row['sname'];
                 $cname=$row['cname'];
                 $tname=$row['taskname'];
                 $upload_date=$row['upload_date'];
              
        ?>

        <?php 
        // foreach ($files as $file): 
        ?>
          
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $sname ?></h5>
                    <p class="card-text"><?php echo $cname ?></p>
                    <p class="card-text"><?php echo $tname ?></p>
                    <small style="opacity:0.7;float:right;"><?php echo $upload_date ?></small>

                    <a href="tcourse.php?file_id=<?php echo $row['id']; ?>">Download</a>
                </div>
              </div>
             </div>
             
        
        <?php 
        // endforeach;
                }
             
              }
        ?>
        </div>



              

      </div>
      </div>

   </body>
</html>