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


<!--PHP-->
<?php
require('db.php');
include("auth_session.php");
//$username = $_SESSION['username'] ;
?>




<h3 style="float: left;">Update E-book details</h3>
<?php
$b_id = $_GET['id'];
$sql = "SELECT * FROM data_storage WHERE id = '$b_id' LIMIT 1";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
 $_SESSION['b_id'] = $b_id;

?>
<!--Update form-->  
<div class="form-container upload-container">
<form action="editaction.php?id=<?php echo $b_id; ?>" method="post" enctype="multipart/form-data">
  <div class="form-row">
     <div class="col">       <!--input-group row mb-3 form group align-items-center col-7-->
      <label for="username1" class="form-label">Username</label>
      <input type="text" class="form-control" id="username1"
       name="username" value="<?php echo $row['username'] ?>" aria-describedby="username1" required disabled>
      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    <div class=" col">
      <label for="bookname" class="form-label">Book Title</label>
      <input type="text" class="form-control" id="bookname" value="<?php echo $row['book_name'] ?>" name="bookname" required>
    </div>
  </div>
  
    
 <!--    <div class="form-group mt-2">    
        <label for="b_file" class="mr-2 form-label">Book file(.pdf)</label>  
        <input class="form-control " type="file" id="b_file" name="b_file" required disabled>
      </div> -->

    <!--   <div class="form-group mt-2">
        <label for="b_cover" class="mr-2 form-label">Book cover image(.png/jpeg/jpg)</label>
        <input class="form-control" type="file" id="b_cover" name="b_cover" required disabled>
      </div> -->
    

      <div class="col-7  space-top ">
        <label for="book-category" class="form-label">Book category</label>
      <select class="custom-select mb-3 col-7 " data-live-search="true" aria-label="category select" id="book-category"  name="book-category"  required>   <!--form-select -->
        <option selected value="<?php echo $row['book_category'] ?>"><?php echo $row['book_category'] ?></option> 
        <option value="Action & Adventure">Action & Adventure</option>
        <option value="Biography & Autobiography">Biography & Autobiography</option>
        <option value="Classics">Classics</option>
        <option value="Comics / Visual storytelling">Comics / Visual storytelling</option>
        <option value="Cookbook">Cookbook</option>
        <option value="Crime & Mystery">Crime & Mystery</option>
        <option value="Drama">Drama</option>
        <option value="Fantasy">Fantasy</option>
        <option value="Horror">Horror</option>
        <option value="Humour & Satire">Humour & Satire</option>
        <option value="Poetry">Poetry</option>
        <option value="Romance">Romance</option>
        <option value="Science Fiction/Sci-Fi">Science Fiction/Sci-Fi</option>
        <option value="Self Help">Self Help</option>
        <option value="Short Story">Short Story</option>
        <option value="Thriller">Thriller</option>
      </select>
    </div>

     <button type="submit" name="submit">Update Details</button>  
  </form>
</div>



       <!--Footer-->
  <footer>
    <div class="content">
      <p>Copyright &copy; 2023</p>
      
    </div>
  </footer>
      
    <!--Optional JavaScript -->

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


   </body>
</html>


