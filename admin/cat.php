<?php
extract($_POST);
include("admin.php");
$cat_in= new users;
$category=htmlentities($cat_name);
$array=[$category];
// $answer=array_search($category,$array);
// if ($cat_name!=$category) {
	$query="insert into category values ('','$category')";
	 if($cat_in->cat($query))
		{
			$cat_in->url("category_insertion.php?msg=run");
			// echo "data insert successfully";
		}

	
// }




?>