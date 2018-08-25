<?php
include("users.php");
$qus=new  users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat']=$cat;
// echo "<pre>";

// print_r($qus->qus);

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">

  function timeout() 
  {
  		// var hours=Math.floor(timeLeft/3600);
		//var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
		var minute=Math.floor(timeLeft/60);
		var second=timeLeft%60;
		var min=checktime(minute);
		var sec=checktime(second);

		// var hrs=checktime(hours);
		// var mint=checktime(minute);
		// var sec=checktime(second);
		if(timeLeft<=0)
		{
			clearTimeout(tm);
			document.getElementById("form1").submit();
		}
		else
		{

			//document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
			document.getElementById("time").innerHTML=min+":"+sec;
		}
		timeLeft--;
		var tm= setTimeout(function(){timeout()},1000);

  }
  function checktime(msg)
	{
		if(msg<10)
		{
			msg="0"+msg;
		}
		return msg;
	}


  </script>
</head>
<body onload="timeout()" >

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
                              <li ><a data-toggle="tab" href="home.php">Home</a></li>
                              <li class="active"><a data-toggle="tab" href="home.php">Profile</a></li>
                                                      
                              <li><a data-toggle="tab"  href="logout.php">Logout</a></li>
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
            
            <div> <h2>Your time</h2></div>
             <div class="well" id="time">
              <h2>
				  <script type="text/javascript">
				  var timeLeft=1*60;


				  </script>
				  timeout</h2>
            </div>
            
          </div>

          <center><div class="container">
	
		<div class="col-sm-8 text-left">
		 
		  <center><form id="form1" action="answer.php" method="post">
		  <?php 
		  $i=1;

		  foreach($qus->qus as $qust) {?>
		                    
		  <table class="table table-bordered">
		    <thead>
		      <tr class="success">
		        <th><?php echo $i ;?>&nbsp;<?php echo $qust['question'];?></th>
		        
		      </tr>
		    </thead>
		    <tbody>
		    <?php if(isset($qust['ans1'])) {?>
		      <tr class="active">
		        <td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id'];?>" />&nbsp;<?php echo $qust['ans1'];?></td>
		      </tr>
		      <?php }?>

		      <?php if(isset($qust['ans2'])) {?>
		      <tr class="active">
		        <td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id'];?>" />&nbsp;<?php echo $qust['ans2'];?></td>
		      </tr>
		      <?php }?>

		      <?php if(isset($qust['ans3'])) {?>
		      <tr class="active">
		        <td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id'];?>" />&nbsp;<?php echo $qust['ans3'];?></td>
		      </tr>
		      <?php }?>

		      <?php if(isset($qust['ans4'])) {?>
		      <tr class="active">
		        <td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id'];?>" />&nbsp;<?php echo $qust['ans4'];?></td>
		      </tr>
		      <?php }?>
		      <tr class="active">
		        <td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id'];?>" /></td>
		      </tr> 
		      
		    </tbody>
		  </table>
		  <?php $i++;}?> 
		  <center><input type="Submit" value="Submit Quiz" class="btn btn-success" /></center>
		  </form>

		 </div>
		 </center>

	<!--  <div class="footer">
	        <p>copyright &copy Shazzadur Rahman. All Rights Reserved.</p>
	      </div>
			</div> -->
		 <div class="col-sm-4 sidenav">

           
          </div>

</div>
</div>

</body>
</html>
