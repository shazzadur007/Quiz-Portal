<?php
include("admin.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
      <title>Admin</title>
      <meta charset="utf-8">
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
                            <a class="navbar-brand"  href="#"><img src="logo.png" hspace="30" height="30px" width="150px" ></a>
                          </div>
                          <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                              <li class="active"><a data-toggle="tab" href="#home">Admin</a></li>
                            
                                                       
                              <li><a href="logout.php">Logout</a></li>
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
            <center><h1><b>Admin</b></h1></center><br>
             <?php 
                            foreach($profile->data as $prof)
                            { ?>
                              
                              <h3> Welcome <b><?php echo $prof['username']; ?></b></h3><br>
                              
                         <?php }

                          ?>
          </div>
          <div class="col-sm-8 ">
          
          
          <br><form role="form" action="cat.php" method="post">
            <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Enter Your Category" required  ><br><br>
            <button type="submit" class="btn btn-default">Submit</button>
          </form><br><br><br>
           <!-- <div style="text-align:center; border-style:dotted;color:#2d4c5f;"> -->
                    <?php
                      
                    if(isset($_GET['msg']) && !empty($_GET['msg']))
                    { ?>
                      <h4>Category insert successfully</h4>
                      
                    
                    <form role="form" action="admin_question.php" >
                      <button type="submit" class="btn btn-default">Insert Question </button>

                      </form>

                     <?php }
                     
                    ?>
          <!-- </div> -->
          
         


        
          </div>
          <div class="col-sm-2 sidenav">

          </div>

        </div>
      </div>

</body>
</html>