<?php
require('db.php');



if(isset($_REQUEST['submit'])){
    $book_name = $_REQUEST['bookname'];
    $book_category = $_REQUEST['book-category'];

    $e_id = $_GET['id'];

    $book_name = stripslashes($_REQUEST['bookname']);    // remove backslashes
    $book_name = mysqli_real_escape_string($con, $book_name);
    $book_category = stripslashes($_REQUEST['book-category']);    // remove backslashes
    $book_category = mysqli_real_escape_string($con, $book_category);

    $sql2 = "UPDATE data_storage SET `book_name`='$book_name', `book_category`='$book_category' WHERE `id` = '$e_id'";
    echo $sql2;

    $result2 = mysqli_query($con,$sql2);

    if(mysqli_affected_rows($con) > 0){
        header("Location: dashboard.php?msg=Record Updated.");
    }
    else{
        echo "Failed to update record" . mysqli_error($con);
    }


}

 /*    if($result2){
        header("Location: dashboard.php?msg=Record Updated");
    }
    else{
        echo "Failed" . mysqli_error($con);
    } */


?>
