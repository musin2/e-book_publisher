<?php
//require("browse.php");
require('db.php');
//include("auth_session.php");
session_start();

$pdfname = $_SESSION['book_id'] ;
 $fileread = "uploads/$pdfname";
// Header content type
//header("Content-type: application/pdf");
//header('Content-Disposition: inline; filename="' .$fileread. '"');
//header("Content-Length: " . filesize($fileread)); 

// Send the file to the browser.
//readfile($fileread);


/* echo "<iframe src='<?php echo $fileread; ?>' width='90%' height='500px'>
</iframe>"; */

?>
<!DOCTYPE html>
<html lang="en">
    <head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image" href="images/logo/logo.png" />
    </head>
<!--Navigation bar-->
    <!--<img class="navbrand" src="images/logo/logo.png" alt="logo" style="width:80px; height: 90px;"> -->
    <nav class="navbar navbar-custom navbar-expand-md navbar-inverse navbar-fixed-top">
        <div class="container-fluid">


          <a class="navbar-brand" href="index.html">
         E-book Publisher
        </a>
        
          <ul class="nav navbar-nav">
           <li class="nav-item">
            <a class="nav-link" href="index.html" style="color: white">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="browse.php" style="color: white">Browse</a>
          </li> 
          <!-- <li class="nav-item">
            <a class="nav-link" href="***" style="color: white">About</a>
          </li> -->
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                User
              </a>
              <div class="dropdown-menu "  aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="upload.php">Upload eBook</a>
                <a class="dropdown-item" href="login.php">Login</a>
                <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                <a class="dropdown-item" href="logout.php">Log Out</a>
                <!-- <a class="dropdown-item" href="***">Others</a> -->
            </li>
         
            </li>
          </ul>
          
        </div>
      </nav>    
      <!-- navigation-->

      <a href="<?php echo $fileread; ?>">Click here if the e-book is not available</a> 
<iframe class="pl-4" src="<?php echo $fileread; ?>" width="90%" height="580px">
</iframe>
<!-- <iframe src="http://docs.google.com/gview?url=<?php echo $fileread; ?>&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe> -->
  <!-- <p>Secondary option for mobile users</p> -->
  <!-- <object width="900" height="900" data="https://docs.google.com/gview?embedded=true&url=<?php echo $fileread; ?>"></object> -->
</html>