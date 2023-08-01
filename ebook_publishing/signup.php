<!DOCTYPE html>
<html lang="en">
   <head>

  <!--Bootstrap properties and css styles-->
    <title>E-book Bublisher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image" href="images/logo/logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--fin-->
   </head>

   <body>

    <!--Navigation bar-->
    <!-- <img class="navbrand" src="images/logo/logo.png" alt="logo" style="width:80px; height: 90px;"> -->
    <nav class="navbar navbar-custom navbar-expand-md navbar-inverse navbar-fixed-top">
        <div class="container-fluid">


          <a class="navbar-brand" href="login.php">
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
                <!-- <a class="dropdown-item" href="upload.php">Upload eBook</a> -->
                <a class="dropdown-item" href="login.php">Login</a>
                <!-- <a class="dropdown-item" href="logout.php">Log Out</a> -->
                <!-- <a class="dropdown-item" href="***">Others</a> -->
            </li>
         
            </li>
          </ul> 
          
        </div>
      </nav>  
      
<!--PHP-->      
 <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");

        $check = "SELECT * FROM `users` WHERE `email` = '$email' OR `username` = '$username' ";
        $rst = mysqli_query($con,$check);
        $checkdata = mysqli_fetch_array($rst,MYSQLI_NUM); 

        if(!empty($checkdata)){
            echo "<h3 class='m-4'>Username or Email Already Exists</h3>";

        }
        else {

              $query    = "INSERT into `users` (username, password, email, create_datetime)
                          VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
              $result   = mysqli_query($con, $query);
              if ($result) {
                  echo "<div class='form container'>
                        <h3>You are registered successfully.</h3><br/>
                        <p class='link'>Click here to <a class='btn btn-lg button' href='login.php'>Login</a></p>
                        </div>";
              } else {
                  echo "<div class='form'>
                        <h3>Required fields are missing.</h3><br/>
                        <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                        </div>";
              }
            }
    }else {
      ?>
          <div class="form-container container sign-in-container">
    <form action="" method="post" name="signin">                   <!-------------------------------------------------------------->
        <h2>Sign up</h2>
       
        <input type="text" placeholder="Username" name="username" required/>
        <input type="email" placeholder="Email" name="email" required />
        <input type="password" placeholder="Password" name="password" required/>
        <!--<a href="#">Forgot your password?</a>-->
        <button>Sign up</button>

        <br>
        <br>
        
    <h4>Already have an account?</h4>
    <a class="btn btn-lg button" href="login.php" role="button">Log in</a> 

        
    </form>
            </div>

      <?php
          }
      ?>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>