<?php
include_once 'model/connect.php';
include_once 'classes/update-item.php';
session_start();

?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Test</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="main.css">

	</head>
	
	<body>
    <header>
        <h1>Agora</h1>
        
    </header>
    
    
    <aside1>
       <h2>Go Back</h2>
       <div class="container">
				   <button class="btn btn-primary my-5"><a href="sellerHome.php" class="text-light">Return</button>
           </div></a>	
		
                   
    </aside1>
    
    <main>   
         <h2>Update User Info</h2>	
				<div class="container">
          <form method="post">
				   <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="productName" name="productName">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="category" name="category">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="buyNowPrice" name="buyNowPrice">
				   </div>

				   <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="dateListed" name="dateListed">
				   </div>
				   <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="closingDate" name="closingDate">
				   </div>

				   <button type="submit" class="btn btn-primary" name="update">Update</button>

    </main>
    
    <footer>
        <ul>
         
        </ul>
    </footer>
    
   
</body>
	
</html>