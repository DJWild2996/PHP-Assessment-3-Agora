<?php
include_once 'model/connect.php';

session_start();
if (isset($_SESSION['name']) && isset($_SESSION['role']))
{}
?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>BSHome</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="main.css">

	</head>
	
	<body>
    <header>
        <h1>Agora</h1>
        <p>
          <?php
        include_once 'views/bsUserName-view.php';

        ?></br></br> <button class="btn btn-primary"><a href="classes/logout.php">Logout</button></a>
    </header>
    
    
    <aside1>
       <h2>Invite User</h2>
       <div class="container">
				   <button class="btn btn-primary my-5"><a href="addUser.php">Invite New User</button>
           </div></a>
                   </br></br>

                   <h2>Business Details</h2>	
                   <?php
                    include_once 'views/bsInfo-view.php';

                    ?>
                    <form action="classes/logo-upload.php" method="post" enctype="multipart/form-data">
                    <p>Select Business Logo to upload:</p>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="logo">
                    </form>
                    </br>
                    <button class="btn btn-primary my-5"><a href="updateBS.php?updateid='.$businessID.'">Edit Details</button>
				   </div></a>                
    </aside1>
    
    <main>   
        <h2>List of buyers and seller currently linked</h2>
        <div class="container">
        <table class="table table-dark table-hover">
        <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Account Type</th>
      <th scope="col">Edit Account</th>
    </tr>
  </thead>
  <tbody>

  <?php
include_once 'views/bsUsers-view.php';
?>

  </tbody>

</table>
</div>
    </main>
    
    <footer>
    <div class="footer">
	<hr/>
	<p>Daniel Wild BCDE224 Assessment 3 &copy; 2022 Ara Institute of Canterbury Ltd.</p>
</div>
    </footer>
    
   
</body>
	
</html>