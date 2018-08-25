
<!DOCTYPE HTML>
<html  lang="en-US">
<head>
	<title>Quiz Portal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="form.css" type="text/css">
 	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container -fluid">
		<div class="row">
			<div class="col-12">
				<h1 style="text-align:center; font-size:40px; color:#2d4c5f;"><b>Quiz Portal</b></h1>
			</div>
		</div>

		<div class="row">
			<div class="col">
							
			</div>

			<div class="col">
				<br><div style="text-align:center; border-style:dotted;color:#2d4c5f;">
					<?php 
						if(isset($_GET['run'])&& $_GET['run']=="success")
						{
							echo "Your registration successfully done</mark>";
						} 
						elseif (isset($_GET['run'])  && $_GET['run']=="failed") 
						{
							echo "Your email or password is not correct";
						}

						?>
				</div>
				
				<h3 style="text-align:center;color:#2d4c5f;"> <br> <b>Login</b> </h3>
							
				<form role="form" action="signin_sub.php" method="post">
				<div class="form-group">
					  		
					<label for="email"> <b>Email: </b></label>
					<input type="email" class="form-control" placeholder="Enter Email" name="email" required>
				</div>
				<div class="form-group">
		     		<label for="pwd"><b>Password:</b></label>
		      		<input type="password" class="form-control" placeholder="Enter password" name="password" required>
		    	</div>
				<div class="form-group form-check">
					<label class="form-check-label">
					<input class="form-check-input" type="checkbox" name="remember"> Remember me
					</label>
				</div>
				<button type="submit" class="btn btn-primary"><b>Submit</b></button> 
							
				</form>
	
				<h4 style="text-align:center;color:#2d4c5f;"> <b>New Here?</b></h4>

				<button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'"> <b>Sign Up</b></button>
				<h4 style="text-align:center;color:#2d4c5f;"> <b>Set Question</b></h4>
					<center><a href="admin/index.php"><input type="submit" class="btn btn-primary" value="Admin"></a></center>					
					

				<div id="id01" class="modal">
					<span onclick="document.getElementById('id01'). style.display='none'" class="close" title="Close Modal">&times;</span>

					<form class="modal-content" method="post" action="signup_sub.php" enctype="multipart/form-data" >
					<div class="container">

						<h1 style="text-align:center;"><b>Sign Up</b></h1>
						<p style="text-align:center;"> Please fill in this form to create an account.</p><hr>
						
						<label for="name"><b>Name</b></label>
						<input type="text" name="name" placeholder="Enter Your Full Name" required>
						<label for="email"><b>Email</b></label>
						<input type="text" placeholder="Enter Email" name="email" required>
						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required >

						<label for="psw-repeat"><b>Repeat Password</b></label>
						<input type="password" placeholder="Repeat Password" name="confirmpassword" required >

						<label><b>Image for your Profile: </b></label><br>
						<input type="file" name="img"/><br>
									      
						<label>
						<br><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
						</label>
						<p>By creating an account you agree to our <a href="#" style="color:white"><b>Terms & Privacy</b></a>.</p>

						<div class="clearfix">
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><b>Cancel</b></button>
							<button type="submit" class="signupbtn"><b>Sign Up</b></button>
						</div>
					</div>
					</form>
				</div>
						<script>
							var modal=document.getElementById('id01');

							window.onclick= function(event)
							{
								if (event.target== modal) 
								{
									modal.style.display="none";
								}
							}
						</script>				
		</div>

		<div class="col">

		
				
	</div>

		
	</div>

</body>
</html>