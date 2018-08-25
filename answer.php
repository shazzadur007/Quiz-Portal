<?php
include("users.php");
$ans= new users;
$answer=$ans->answer($_POST);
// print_r($_POST)
 ?>

 <!DOCTYPE HTML>
 <html lang="en-US">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<title>Answer</title>
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
                              <li class="active"><a data-toggle="tab" href="home.php">Home</a></li>
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
            <p><a a data-toggle="tab"href="home.php">Home</a></p>
            <p><a a data-toggle="tab" href="home.php">Profile</a></p>
            <p><a a data-toggle="tab" href="#">About</a></p>
          </div>

          <div class="col-sm-8 text-left">
            <div class="tab-content">
            
            <?php
		 		$total_qus= $answer['right']+$answer['wrong']+$answer['no_answer'];
		 		$attempt_qus= $answer['right']+$answer['wrong'];
		 	?>
		 	<center><h2>Your Quiz Results</h2></center>
		 	<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>Total number of question</th>
				        <th style="text-align:center;"><?php echo $total_qus; ?></th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>Attempted Questions</td>
				        <td style="text-align:center;"><?php echo $attempt_qus ;?></td>
				      </tr>
				      <tr>
				        <td>Right Answer</td>
				        <td style="text-align:center;"><?php echo $answer['right'];?></td>
				      </tr>
				      <tr>
				        <td>Wrong Answer</td>
				        <td style="text-align:center;"><?php echo $answer['wrong']; ?></td>
				      </tr>
				      <tr>
				        <td>No Answer</td>
				        <td style="text-align:center;"><?php echo $answer['no_answer'];?></td>
				      </tr>
				      <tr>
				        <td>Your Result</td>
				        <td style="text-align:center;">
				        <?php
				        	$per=($answer['right']*100)/($total_qus);
				        	echo $per."%";

				        ?>

				        </td>
				      </tr>
				    </tbody>
				  </table>
				


            </div>
          </div>
        </div>
       </div>
 </body>
 </html>