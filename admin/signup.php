<?php

include("admin.php");
$register= new users;
extract($_POST);


$query= "insert into admin values ('','$name','$email','$password')";

if($register->users($query))
{
	$register->url("index.php?run=success");
}

?>