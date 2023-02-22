<?php
include_once 'model/connect.php';

session_start();
if (isset($_SESSION['name']) && isset($_SESSION['role']))
{}
?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Seller Home</title>
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
      

        ?></br></br> <button class="btn btn-primary"><a href="classes/logout.php">Logout</button></a>
    </header>
    
    
    <aside1>
       <h2>Create New Listing</h2>
       <div class="container">
				   <button class="btn btn-primary my-5"><a href="addItem.php">Create Listing</button>
           </div></a>
                   </br></br>

                   <h2>Your details</h2>	
                   <?php
                    include_once 'views/sellerInfo-view.php';

                    ?>
                    
                    <button class="btn btn-primary my-5"><a href="updateSeller.php?updateid='.$userID.'">Edit Details</button>
                    </div></a>
                    
                    <h2>Business Details</h2>	
                   <?php
                    include_once 'views/bsInfo-view.php';

                    ?>
    </aside1>
    
    <main>   
        <h2>List of Products</h2>
        <div class="container">
        <table class="table table-dark table-hover">
        <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Date Listed</th>
      <th scope="col">Closing Date</th>
      <th scope="col">Image</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  <?php
include_once 'views/selleritem-view.php';
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