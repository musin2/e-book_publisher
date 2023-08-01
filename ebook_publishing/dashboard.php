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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


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
include("auth_session.php");
$userc= $_SESSION['username'] ;
?>

<div style="margin: 65px; ">                      <!--class="container "-->
<?php
if(isset($_GET['msg'])){
  $msg = $_GET['msg'];
  echo '<div class="alert alert-success alert-dismissible fade show mb-0 mt-n5" role="alert">
  '.$msg.'

</div>';
 
}
?>
<a class="btn btn-lg button" href="upload.php" role="button">Upload E-book</a>
<h4>Your Books</h4> 

<table class="table text center ml-n3">  <!-- table-hover -class -->
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Book Category</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //read all rows with books from the current logged in user
    
    $sql = "SELECT * FROM data_storage WHERE username = '$userc'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        
           echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["book_name"] . "</td>
            <td>" . $row["book_category"] . "</td>
            
            <td>
                <a href='edit.php?id=" . $row["id"] . "' class='link-dark'><i class='bi-pencil-square'></i></a>
                <a href='delete.php?id=" . $row["id"] . "' class='link-dark ml-3' onclick='return confirm(\"Are you sure you want to delete this record?\");'><i class='bi-trash-fill'></i></a>
             </td>
            </tr>";

    }
            ?>
    
   
    <!-- <tr>
            <td>4</td>
            <td>Book 4</td>
            <td>Horror</td>
           
            <td>
                <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="bi-pencil-square"></i></a>
                <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark ml-3"><i class="bi-trash-fill"></i></a>
             </td>
            </tr> -->
  </tbody>
</table>

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