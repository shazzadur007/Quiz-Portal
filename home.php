<?php
include("users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
// $profile->cat_show();
// print_r($profile->cat);
// print_r($profile->data);


?>
<!DOCTYPE html>
<html  lang="en-US">
  <head>

    <title>Quiz Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="home.css" type="text/css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
   .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       
       color: black;
       text-align: center;
    }
    </style>

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
                            <ul class="nav navbar-nav navbar-right">
                              <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                              <li><a data-toggle="tab" href="#menu1">Profile</a></li>
                                                       
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
            <p><a a data-toggle="tab"href="#home">Home</a></p>
            <p><a a data-toggle="tab" href="#menu1">Profile</a></p>
            <p><a a data-toggle="tab" href="#">About</a></p>
          </div>
          <div class="col-sm-8 text-left">
            <div class="tab-content">

                    <div id="home" class="tab-pane fade in active"><br><br>
                
                     
                      <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Start Quiz</button></center>
                       
                       <div class="col-sm-4"></div>
                       
                         <div class="col-sm-4"><br>
                         <div id="select" class="tab-pane fade">

                            <form method="post" action="qus_show.php">
                            <select class="form-control" id="" name="cat">
                            <option selected disabled>Select Category</option>
                             <?php
                              $profile->cat_shows();
                              foreach($profile->cat as $category)
                              { ?> 
                                  <option value="<?php echo $category['id'];?>"><?php  echo $category['cat_name'];?> </option>
                                  
                                  <?php }?>
                            </select>
                            <br>
                            <center><input type="submit" value="Submit" class="btn btn-primary" /> </center>
                            </form>
                          </div>
                          </div>

                      </div>

                    <div id="menu1" class="tab-pane fade">
                      
                    
                     <center>
                          <?php 
                            foreach($profile->data as $prof)
                            { ?>
                              <img src="img/<?php echo $prof['image']; ?>" alt="" width="150px" height="150px"/><br>
                              <h2> Welcome <?php echo $prof['username']; ?></h2><br>
                              <h3> Your email: </h3>
                                <p><?php echo $prof['email']; ?></P>
                         <?php }

                          ?>
                          </center> 
                         

                       
                      </div>


                  </div>
                </div>
            
          </div>
          <div class="col-sm-2 sidenav">

           <!--  <div class="well">
              <p>ADS</p>
            </div>
            <div class="well">
              <p>ADS</p>
            </div> -->
          </div>
        </div>
      </div>
      <div class="footer">
        <p>copyright &copy Shazzadur Rahman. All Rights Reserved.</p>
      </div>

</body>

</html>
