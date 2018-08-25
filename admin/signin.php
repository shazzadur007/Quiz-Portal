<?php
include("admin.php");
$signin=new users;
extract($_POST);
if($signin->signin($email,$password))
{
	$signin->url("category_insertion.php");
}
else{
	$signin->url("index.php?run=failed");
}

?>