<?php
include_once 'model/connect.php';
include_once 'classes/update-bsuser.php';
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
         <h2>Update User Info</h2>	
				<div class="container">
          <form method="post">
				   <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="User Name" name="userName" value=<?php echo $userName;?>>
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="first Name" name="firstName" value=<?php echo $first;?>>
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="Last Name" name="lastName" value=<?php echo $last;?>>
				   </div>
				   <div class="form-group">
				   	 <input type="email" class="form-control" placeholder="User's Email" name="email" value=<?php echo $mail;?>>
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="phone" name="phone" value=<?php echo $number;?>>
				   </div>
           <div class="form-group">
				   	 <input type="password" class="form-control" placeholder="password" name="password">
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="DOB" name="DOB" value=<?php echo $DOB;?>>
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="role" name="role" value=<?php echo $role;?>>
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="location" name="location" value=<?php echo $location;?>>
				   </div>
           <div class="form-group">
				   	 <input type="text" class="form-control" placeholder="admin" name="admin" value=<?php echo $admin;?>>
				   </div>
				   <div class="form-group">
		   <select name="accountType"> 
				<option value="2">Buyer</option>
				<option value="3">Seller</option>
			</select>

				   <button type="submit" class="btn btn-primary" name="update">Update</button>

    </main>
    
    <footer>
        <ul>
         
        </ul>
    </footer>
    
   
</body>
	
</html>