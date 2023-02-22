<?php
$servername = "localhost";
$username = "root";
$password = "Bestintheworld";
$dbname = "Agora";

// Check if image file is a actual image or fake image
if(isset($_POST["logo"])) {
    $filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];
    $show = "../logo-uploads/" . $filename;
    $folder = "./logo-uploads/" . $filename;

    $conn = new mysqli($servername, $username, $password, $dbname);
 
    // Get all the submitted data from the form
    $sql = "update business set  imagePath='$folder' where businessID = 1";
 
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
				   <button class="btn btn-primary my-5"><a href="../bsHome.php" class="text-light">Return</button>
