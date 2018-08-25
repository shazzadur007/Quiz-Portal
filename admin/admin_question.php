<?php
include "..//users.php";
$cat=new users;
$category=$cat->cat_shows();



// print_r($category);

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
         
          </div>
          <div class="col-sm-8 text-left">

           <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main text-left">
               

                <div class="table-responsive">
                  <table class="table table-striped">

                  <div style="text-align:center; border-style:dotted;color:#2d4c5f;">
                    <?php
                    if(isset($_GET['msg']) && !empty($_GET['msg']))
                    {
                      echo "<h4>Question insert successfully</h4>";
                    }
                    
                    ?>
                    </div>
                    <center><h2>Dashboard</h2></center>
                    <form method="post" action="add_quiz.php">
                        <div class="form-group">
                          <label for="text">Question</label>
                          <input type="text" class="form-control" name="qus"  placeholder="Enter question">
                        </div>

                        <div class="form-group">
                          <label for="text">option-1</label>
                          <input type="text" class="form-control"  name="op1"  placeholder="Enter option-1">
                        </div>
                        <div class="form-group">
                          <label for="text">option-2</label>
                          <input type="text" class="form-control" name="op2"  placeholder="Enter option-2">
                        </div>
                        
                        <div class="form-group">
                          <label for="text">option-3</label>
                          <input type="text" class="form-control"  name="op3"  placeholder="Enter option-3">
                        </div>
                        
                        <div class="form-group">
                          <label for="text">option-4</label>
                          <input type="text" class="form-control"  name="op4" id="email" placeholder="Enter option-4">
                        </div>
                        <div class="form-group">
                          <label for="text">answer</label>
                          <input type="text" class="form-control" name="ans" id="email" placeholder="Enter answer">
                        </div>
                          <div class="form-group">
                             
                             <select class="form-control" id="sel1" name="cat">
                             
                              <option selected disabled>choose category</option>
                              <?php
                              foreach($category as $c)
                              {
                                echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
                              }
                              
                              ?>                
                            </select>
                          </div>
                        <button type="submit" class="btn btn-default">Submit</button><br>
                </form>
                            </tbody>
                </table>

            </div>
            </div>
        </div>
      </div>
   
  </body>
</html>
