<?php

include("users.php");
$register= new users;
extract($_POST);

$img_name=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name, "img/".$img_name);
$query= "insert into users values ('','$name','$email','$password','$img_name')";

if($register->users($query))
{
	$register->url("index.php?run=success");
}

?>