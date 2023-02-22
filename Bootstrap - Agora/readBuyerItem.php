<?php
include_once 'model/connect.php';
session_start(); 

?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>More Product details</title>
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
				   <button class="btn btn-primary my-5"><a href="buyerHome.php" class="text-light">Return</button>
           </div></a>	
		
    </aside1>
    
    <main>   
         <h2>Listing Info</h2>	
		 <?php

		include_once 'classes/read-buyeritem.php';

?>
<button class="btn btn-danger"><a href="classes/buyeritem-bynow.php?deleteid='.$itemID.'">Buy Now</a></button>
    </main>
    
    <footer>
        <ul>
         
        </ul>
    </footer>
    
   
</body>
	
</html>