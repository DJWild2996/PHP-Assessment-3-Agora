<?php
include_once 'model/connect.php';
include_once 'classes/add-bsuser.php';
session_start();

?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Add New user</title>
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
         <h2>Invite User</h2>	
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
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="role" name="role">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="location" name="location">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="admin" name="admin">
				   </div>
           <div class="form-group">
		   <select name="accountType"> 
				<option value="2">Buyer</option>
				<option value="3">Seller</option>
			</select>
				   </div>
           </div>

				   <button type="submit" class="btn btn-primary" name="invite">Create User</button>

    </main>
    
    <footer>
        <ul>
         
        </ul>
    </footer>
    
   
</body>
	
</html>