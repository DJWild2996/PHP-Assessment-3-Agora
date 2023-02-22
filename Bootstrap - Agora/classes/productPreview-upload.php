<?php
$servername = "localhost";
$username = "root";
$password = "Bestintheworld";
$dbname = "Agora";

$id=$_GET['updateid'];


// Check if image file is a actual image or fake image
if(isset($_POST["logo"])) {
    $filename = $_FILES["previewUpload"]["name"];
    $tempname = $_FILES["previewUpload"]["tmp_name"];
    $show = "../images/" . $filename;
    $folder = "./images/" . $filename;


    $conn = new mysqli($servername, $username, $password, $dbname);
 
    // Get all the submitted data from the form
    $sql = "update item set imagePath='$folder' where itemID = '$id'";
 
    // Execute query
    mysqli_query($conn, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $show)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
    echo "<img src=".$show.">";
}
?>
<h2>Go Back</h2>
       <div class="container">
				   <button class="btn btn-primary my-5"><a href="../sellerHome.php" class="text-light">Return</button>
