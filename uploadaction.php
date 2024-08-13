<?php
 require('db.php');
 session_start();
 $usernamec = $_SESSION['username'] ;

 if(isset($_POST['submit'])){

  
    $file =  $_FILES['b_file'];

    $fileName = $_FILES['b_file']['name']; //to get file details
    $fileTmpName = $_FILES['b_file']['tmp_name'];
    $fileSize = $_FILES['b_file']['size'];
    $fileError = $_FILES['b_file']['error'];
    $fileType = $_FILES['b_file']['type'];

    $fileExt = explode('.',$fileName); //split file name to get file extention after full stop eg .jpeg
    $fileActualExt = strtolower(end($fileExt));   //change the extension to lowercase

    $allowed = "pdf";

    $imgName = $_FILES['b_cover']['name']; //to get image details
    $imgTmpName = $_FILES['b_cover']['tmp_name'];
    $imgSize = $_FILES['b_cover']['size'];
    $imgError = $_FILES['b_cover']['error'];
    $imgType = $_FILES['b_cover']['type'];

    $imgExt = explode('.',$imgName); //split file name to get file extention after full stop eg .jpeg
    $imgActualExt = strtolower(end($imgExt));   //change the extension to lowercase

    $allowedExt = array("jpg","jpeg","png");

    $book_name = $_POST['bookname'];
      $author = $_POST['username'];
      $book_category = $_POST['book-category'];
        $book_name = stripslashes($_REQUEST['bookname']);    // remove backslashes
        $book_name = mysqli_real_escape_string($con, $book_name);
        $author = stripslashes($_REQUEST['username']);    // remove backslashes
        $author = mysqli_real_escape_string($con, $author);
        $book_category = stripslashes($_REQUEST['book-category']);    // remove backslashes
        $book_category = mysqli_real_escape_string($con, $book_category);


    //validating and moving the book file
    if($fileActualExt == $allowed) {              //possible vulnerability (===)
      if($fileError===0){
          if($fileSize<300000000){   // if file size is less than 500MB
            $fileNameNew = uniqid('',true).".".$fileActualExt;  //create a unique name for the file
            $targetDestination = 'uploads/'.$fileNameNew;   // file destination with the new unique file name (in 'uploads folder')
              move_uploaded_file($fileTmpName,$targetDestination);


              if(in_array($imgActualExt,$allowedExt)) {
                if($imgError===0){
                  if($imgSize<15000000){                                       // if image size is less than 15MB
                    $imgNameNew = uniqid('',true).".".$imgActualExt;     //create a unique name for the file
                    
                    
                    if($usernamec == $author){
          

                      $img_data = addslashes(file_get_contents($_FILES['b_cover']['tmp_name']));   //get image data
                      $query = " INSERT into `data_storage` (book_name,username,book_id,book_cover,img_id,book_category) values('$book_name','$author','$fileNameNew','$img_data','$imgNameNew','$book_category')";  //add values to database
                        mysqli_query($con,$query);
                        header("Location:dashboard.php?msg=Upload Successful");

           

                    } else {
                     echo "Wrong username entered!";
                     echo "   Go back to previous page";
                     echo "<p><a class='btn btn-lg button' href='upload.php' role='button'>Back to upload page</a></p> ";
                    }
        
                    

        
                  } else { echo "Size of the image is too big"; echo "  Go back to previous page";
                    echo "<p><a class='btn btn-lg button' href='upload.php' role='button'>Back to upload page</a></p> "; }
        
                } else {
                  echo "An error was encountered when uploading your image! Try again.";
                  echo "  Go back to previous page";
                     echo "<p><a class='btn btn-lg button' href='upload.php' role='button'>Back to upload page</a></p> ";
                  } 
        
              } else {
              echo "Book cover image is in the wrong format!";
              echo "  Go back to previous page";
                     echo "<p><a class='btn btn-lg button' href='upload.php' role='button'>Back to upload page</a></p> ";
              } 
        




        } else { echo "Size of the file is too big <p><a class='btn btn-lg button' href='upload.php' role='button'>Back to upload page</a></p> "; }

     } else {
     echo "An error was encountered when uploading your file! Try again. <p><a class='btn btn-lg button' href='upload.php' role='button'>Back to upload page</a></p> ";
      } 

      } else {
      echo "Book file is in the wrong format! <p><a class='btn btn-lg button' href='upload.php' role='button'>Back to upload page</a></p> ";
     }


     
            

            
            /* $query2 = " INSERT into `data_storage` (book_cover,img_id) values('$img_data','$imgNameNew')";  //add new unique name to database
            mysqli_query($con,$query2);

            $query3 = " INSERT into `data_storage` (book_name,username,book_category) values('$book_name','$author','$book_category')";  //add new unique name to database
           mysqli_query($con,$query3);
           header("Location:dashboard.php?uploadsuccessful"); */


    //$book_cover = $_FILES['b_cover'];

/* $imgtargetDestination = 'uploads/'.$imgNameNew;         // file destination with the new unique file name (in 'uploads folder')
            move_uploaded_file($fileTmpName,$targetDestination); */

      //validating and moving the book cover image file
      /* if(in_array($imgActualExt,$allowedExt)) {
        if($imgError===0){
          if($imgSize<15000000){                                       // if image size is less than 15MB
            $imgNameNew = uniqid('',true).".".$imgActualExt;     //create a unique name for the file
            
            

            echo "cover & img_id uploaded!";

          } else { echo "Size of the image is too big"; }

        } else {
          echo "An error was encountered when uploading your image! Try again.";
          } 

      } else {
      echo "Book cover image is in the wrong format!";
      } */


      
        /* if($usernamec == $author){
          
           
           

         } else {
          echo "Wrong username entered!";
         } */


         


    }

    /////// check if form username = session username ($username)

      /*  //the directory to upload to
        $targetDir = "uploads/";
        //the file being upload
        $targetFile = $targetDir.basename($_FILES['file']['name']);
        //select the file type - file extension
        $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
        //valid file extensions we will allow
      $extensions_arr= array("jpg","jpeg","png");
      //checking the extension of our uploaded file
      if(in_array($fileType,$extensions_arr)){
        // Insert record
        $query = " INSERT into `files` (`filename`) values('$fileName')";
        mysqli_query($conn,$query);
        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'],$targetDir.$fileName);
      } else echo " wrong file type ";
      }  */


?>