<?php
include_once 'model/connect.php';
session_start();
?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Login</title>
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
    <h2>Sign up business</h2>
       <div class="container">
				   <button class="btn btn-primary"><a href="addBusiness.php">Sign Up</button>
           </div></a>
</br>
	<h2>Complete User Sign up</h2>
       <div class="container">
				   <button class="btn btn-primary"><a href="sellerSignup.php">Complete Up</button>
           </div></a>
    </aside1>

	<main>
			<div class="index-login-login">
				<h4>Login</h4>
				<form action="classes/check-login.php" method="post">
				<?php if (isset($_GET['error'])) { ?>
					<div class="alert alert-danger" role="alert">
					<?=$_GET['error']?>
					</div>
					<?php } ?>
					<input type="text" name="uid" placeholder="Username">
					<input type="password" name="pwd" placeholder="Password">
                    <select class="form-select" name="role" aria-label="Default select examples">
                        <option selected value=""></option>
                        <option value="Admin">Business</option>
                        <option value="Buyer">Buyer</option>
                        <option value="Seller">Seller</option>
</select>
					<br>
					<button class="btn btn-primary" type="submit" name="submit">Login</button>
					</form>
</div>
</div>
</section>

</main>
    
    <footer>
        <ul>
         
        </ul>
    </footer>

</body>
</html>