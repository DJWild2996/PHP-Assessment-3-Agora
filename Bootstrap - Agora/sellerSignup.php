<?php
include_once 'model/connect.php';
include_once 'classes/signup-seller.php';
session_start();  

?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Compelte Signup</title>
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
		
                   
    </aside1>
    
    <main>   
         <h2>Complete filling in Your Info</h2>
		 <p>You have been invited by email to sign up as a seller or Buyer by your business, Please update your personal info and create a new password for your account.</p>
				<div class="container">
          <form method="post">
				   <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="User Name" name="userName">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="first Name" name="firstName">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="Last Name" name="lastName">
				   </div>
				   <div class="form-group">
				   	 <input type="email" class="form-control" placeholder="User's Email" name="email">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="phone" name="phone">
				   </div>
           <div class="form-group">
				   	 <input type="password" class="form-control" placeholder="password" name="password">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="DOB" name="DOB">
				   </div>
				   <button type="submit" class="btn btn-primary" name="update">Complet Signup</button>

    </main>
    
    <footer>
        <ul>
         
        </ul>
    </footer>
    
   
</body>
	
</html>