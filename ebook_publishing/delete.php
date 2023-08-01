 <?php
/* include "db.php";

$id = $_GET['id'];
$sql = "DELETE FROM `data_storage` WHERE `id` = $id";
$result = mysqli_query($con,$sql);

if($result){
    if(mysqli_affected_rows($con) > 0){
        header("Location: dashboard.php?msg=Record Deleted.");
    }
    else{
        echo "Failed to delete record" . mysqli_error($con);
    }
    
}
else{
    echo "Failed" . mysqli_error($con);
} */



include "db.php";

$id = $_GET['id'];

// Retrieve the file name from the database
$sql1 = "SELECT `book_id` FROM data_storage WHERE id = $id";
$result1 = mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($result1);
$filename = $row['book_id'];

// Delete the file from the directory
$file_path = "uploads/" . $filename;  // Update the file path 
if (file_exists($file_path)) {
    if (unlink($file_path)) {
        // File deleted successfully
        // Delete the row from the database
        $sql2 = "DELETE FROM `data_storage` WHERE `id` = $id";
        $result2 = mysqli_query($con, $sql2);
        if ($result2) {
            if (mysqli_affected_rows($con) > 0) {
                header("Location: dashboard.php?msg=Record and file deleted.");
            } else {
                echo "Failed to delete record." . mysqli_error($con);
            }
        } else {
            echo "Failed to delete record." . mysqli_error($con);
        }
    } else {
        echo "Failed to delete file.";
    }
} else {
    echo "File does not exist.";
}



?> 