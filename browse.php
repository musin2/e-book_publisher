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

      <!-- navigation-->

<!--PHP-->
<?php
require('db.php');
//include("auth_session.php");
session_start();
?>



      <!--Search-->
<!-- <div class="input-group ps-5">
    <div id="navbar-search-autocomplete" class="form-outline">
      <input type="search" id="search" class="form-control" />
      <label class="form-label" for="search">Search</label>
    </div>
    <button type="button" >
      <i class="fas fa-search"></i>
    </button>
  </div>
</div> -->

<form method="post" action="">
      <div class="input-group search-container">
        <input type="search" class="form-control col-5" id="searchAnything" name="searchAnything"placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <button class="btn btn-lg button" type="submit" name="searchbtn" >search</button> 
      </div>
      </form>
<!--Search-->
      

<!--Category filter-->    <!-- CHANGE TO LIST (LIST OF CHECKBOXES) -->
<!-- <div class="side_panel">              
  <h3 class="pl-1">Filter by Category</h3>
  
  <div class="form-check">
    <input type="checkbox" class="form-check-input" name="Action & Adventure" value="Action & Adventure" id="action&adventure1"> 
    <label class="form-check-label" for="action&adventure1">Action & Adventure</label>
  </div>
  

  <div class="form-check">
    <input type="checkbox" class="form-check-input" name="Biography & Autobiography" value="Biography & Autobiography" id="biography&autobiography1"> 
    <label class="form-check-label" for="biography&autobiography1">Biography &<br> Autobiography</label>
  </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="category" value="classics" id="classics"> 
      <label class="form-check-label" for="classics">Classics</label> 
  </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="category" value="comics" id="comics">
      <label class="form-check-label" for="comics">Comics / <br>Visual storytelling</label>
  </div>

<div class="form-check">
<input type="checkbox" class="form-check-input" name="category" value="cookbook" id="cookbook"> 
<label class="form-check-label" for="cookbook">Cookbook</label>
</div>

<div class="form-check">
<input type="checkbox" class="form-check-input" name="category" value="crime&mystery" id="crime&mystery"> 
<label class="form-check-label" for="crime&mystery">Crime &<br> Mystery</label>
</div>

<div class="form-check">
<input type="checkbox" class="form-check-input" name="category" value="drama" id="drama"> 
<label class="form-check-label" for="drama">Drama</label>
</div>

<div class="form-check">
<input type="checkbox" class="form-check-input" name="category" value="fantasy" id="fantasy"> 
<label class="form-check-label" for="fantasy">Fantasy</label>
</div>

<div class="form-check">
<input type="checkbox" class="form-check-input" name="category" value="horror" id="horror"> 
<label class="form-check-label" for="horror">Horror</label>
</div>

<div class="form-check">
<input type="checkbox" class="form-check-input" name="category" value="humour&satire" id="humour&satire"> 
<label class="form-check-label" for="humour&satire">Humour &<br> Satire</label>
</div>

<div class="form-check">
<input type="checkbox" class="form-check-input" name="category" value="poetry" id="poetry"> 
<label class="form-check-label" for="poetry">Poetry</label>
</div>

<div class="form-check">
<input type="checkbox" class="form-check-input" name="category" value="romance" id="romance"> 
<label class="form-check-label" for="romance">Romance</label>
</div>

<div class="form-check">
<input type="checkbox" class="form-check-input" name="category" value="sci-fi" id="sci-fi"> 
<label class="form-check-label" for="sci-fi">Science Fiction/<br>Sci-Fi</label>
</div>

<div class="form-check">
<input type="checkbox" class="form-check-input" name="category" value="self-help" id="self-help"> 
<label class="form-check-label" for="self-help">Self Help</label>
</div>

<div class="form-check">
<input type="checkbox" class="form-check-input" name="category" value="short-story" id="short-story"> 
<label class="form-check-label" for="short-story">Short Story</label>
</div>

<div class="form-check">
  <input type="checkbox" class="form-check-input" name="category" value="thriller" id="thriller"> 
  <label class="form-check-label" for="thriller">Thriller</label>
  </div>

  
</div> -->


<!-- <div class="book-list">
   The e-books will be displayed here 
</div> -->

<!--Book cards-->

<!-- <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Book Title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Read</a>
    </div>
  </div> -->


  <!--<div class='card-deck col-auto p-4' >-->  <!-- style="width: 650px;" -->
  <div id="divlist" class="row">
  <?php
  $searchError ="";


 if(isset ($_POST['searchbtn']))
 {

  if(!empty($_REQUEST['searchAnything'])){
    $search=$_REQUEST["searchAnything"];
    $sqlS = "SELECT * FROM data_storage where `username` like '%$search%' or book_name like '%$search%' or book_category like '%$search%' "; //display books similar to search term
    $results = mysqli_query($con,$sqlS);

    if(mysqli_num_rows($results) == 0) {
      echo "<div class='container'><h3> No results found.</h3></div>";
  } else {
    while($rowS = mysqli_fetch_assoc($results)){
      $pdfname= $rowS["book_id"];
      $_SESSION['book_id'] = $pdfname;
     
        
        echo "<div class='col-sm-3' > 
                <div class='card my-1  embed-responsive'>
                  <img class='img-thumbnail card-img-top' style='width: 300px; height: 310px;' src='data:image/jpeg;base64," .base64_encode($rowS["book_cover"]) . "' alt='Card image '> <!--DISPLAY IMAGE FROM BLOB FORMAT TO JPEG--> <!--image size-->
                    <div class='card-body'>
                      <h5 class='card-title'>" . $rowS["book_name"] . "</h5>
                      <p class='card-text m-0'>" . $rowS["username"] . "</p>
                      <p class='card-text m-0'><small class='text-muted'>" . $rowS["book_category"] . "</small></p>
                      <a href='readpdf.php' class='btn btn-outline-dark'>Read</a>
                      
                      
                    </div>
                 </div>
                 </div>
        
        ";
      } }
      

      } else {echo "<div class='container'><h2>No Data Found</h2> <br><a class='btn btn-lg button' href='browse.php' role='button'>Clear</a> </div> ";} //if search bar is empty
    
        
    
    }
  else{
    //read all book rows
    $sql = "SELECT * FROM data_storage ";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
      $pdfname= $row["book_id"];
      $_SESSION['book_id'] = $pdfname;
     
        
        echo "<div class='col-md-3' > 
                <div class='card my-1  embed-responsive'>
                  <img class='img-thumbnail card-img-top' style='width: 300px; height: 310px;' src='data:image/jpeg;base64," .base64_encode($row["book_cover"]) . "' alt='Card image '> <!--DISPLAY IMAGE FROM BLOB FORMAT TO JPEG--> <!--image size-->
                    <div class='card-body'>
                      <h5 class='card-title'>" . $row["book_name"] . "</h5>
                      <p class='card-text m-0'>" . $row["username"] . "</p>
                      <p class='card-text m-0'><small class='text-muted'>" . $row["book_category"] . "</small></p>
                      <a href='readpdf.php' class='btn btn-outline-dark'>Read</a>
                      
                      
                    </div>
                 </div>
                 </div>
        
        ";
      }

        }
 
    ?>
    </div>

    <!-- <a href='uploads/" . $row["book_id"] . "' class='btn btn-outline-dark'>Read</a>   -->
    <!-- </div> -->




 <!--  <div class="card-deck p-4">
    <div class="card">
      <img class="card-img-top" src="..." alt="Card image cap">  
      <div class="card-body">
        <h5 class="card-title">Book title</h5>
        <p class="card-text">Author</p>
        <p class="card-text"><small class="text-muted">L</small></p>
        <a href="#" class="btn btn-outline-dark">Read</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Book title</h5>
        <p class="card-text">Author</p>
        <p class="card-text"><small class="text-muted">L</small></p>
        <a href="#" class="btn btn-outline-dark">Read</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Book title</h5>
        <p class="card-text">Author</p>
        <p class="card-text"><small class="text-muted">L</small></p>
        <a href="#" class="btn btn-outline-dark">Read</a>
      </div>
    </div>
  </div> -->

<!-- div class="col mb-5">
    <div class="card h-100 "> -->
        <!-- Product image-->
        <!-- <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." /> -->
        <!-- Product details-->
       <!--  <div class="card-body p-4">
            <div class="text-center"> -->
                <!-- Product name-->
                <!-- <h5 class="fw-bolder">Book Title</h5> -->
                <!-- Product price-->
               <!--  Author username
            </div>
        </div> -->
        <!-- Product actions-->
        <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Read Book</a></div>
        </div>
    </div>
</div> -->










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
<script src="js/functions.js"></script>
   </body>
</html>

