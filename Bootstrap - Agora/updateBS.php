<?php
include_once 'model/connect.php';
include_once 'classes/update-bsinfo.php';
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
				   <button class="btn btn-primary my-5"><a href="bsHome.php" class="text-light">Return</button>
           </div></a>	
		
                   
    </aside1>
    
    <main>   
         <h2>Update Business Details</h2>	
				<div class="container">
          <form method="post">
		  			<div class="form-group">
				   	 <input type="text" class="form-control" placeholder="User Name" name="userName">
				   </div>
				   <div class="form-group">
				   	 <input type="password" class="form-control" placeholder="password" name="password">
				   </div>
				   <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="business Name" name="businessName">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="business Email" name="businessEmail">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="business Phone" name="businessPhone">
				   </div>
				   <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="business Info" name="businessInfo">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="street Number" name="streetNumber">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="street Name" name="streetName">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="suburb" name="suburb">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="city" name="city">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="postcode" name="postcode">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="additionalLocations" name="additionalLocations">
				   </div>
           </div>

				   <button type="submit" class="btn btn-primary" name="update">Update</button>

    </main>
    
    <footer>
        <ul>
         
        </ul>
    </footer>
    
   
</body>
	
</html>