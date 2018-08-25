

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                          <div class="navbar-header">
                            <a class="navbar-brand"  href="home.php"><img src="logo.png" hspace="30" height="30px" width="150px" ></a>
                          </div>
                          <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-left">
                              <!-- <li ><a data-toggle="tab" href="home.php">Home</a></li>
                              <li class="active"><a data-toggle="tab" href="home.php">Profile</a></li>
                                                      
                              <li><a data-toggle="tab"  href="logout.php">Logout</a></li> -->

                            </ul>
                          </div>
              </div>
            </nav>
            </div>
        </div>
      </nav>
      <div class="container-fluid text-center">    
        <div class="row content">
          <div class="col-sm-2 sidenav">
          <!--   <p><a a data-toggle="tab"href="#home">Home</a></p>
            <p><a a data-toggle="tab" href="#menu1">Profile</a></p>
            <p><a a data-toggle="tab" href="#">About</a></p> -->
            <center><h1><b>Admin</b></h1></center>
            <center><h2><b>Pannel</b></h2></center>
          </div>
          <div class="col-sm-4 text-left">
          <div class="container">
        <div class="row">
           <div class="col-sm-6">
            <div class="panel panel-info">
                      <div class="panel-heading">Signin Form</div>
            <div class="panel-body">
            <?php
            if(isset($_GET['run'])  && $_GET['run']=="failed")
            {
              echo "<p style='color:red;'>Your email or password is not correct</p>";
            }
            
            
            ?>
                <form role="form" action="signin.php" method="post">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password" required>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                </form>
              </div>
              </div>
            </div>
         
           <div class="col-sm-4">
              <div class="panel panel-info">
                
                <div class="panel-heading">Signup Form</div>
              <div class="panel-body">
              <?php 
              if(isset($_GET['run'])&& $_GET['run']=="success")
              {
                echo "<p style='color:green;'>Your registration successfully done</p>";
                
              } 
              ?>
                <form role="form" method="post" action="signup.php" enctype="multipart/form-data"  >
                  <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                </div>
                
                <button type="submit" class="btn btn-default">Submit</button>
                </form>
              </div>
              </div>
            </div>
     </div>
   </div>
          

          </div>
        </div>
      </div>


</body>
</html>