<?php

	include("../functions.php");
	$info = new News();
	$tested = "";

	// get post id
	$postId = $_GET['id'];
	
	if ($info->deleteNews($postId)) {
		echo "news deleted";
	}else{
		echo "deletion failed";
	}
	



?>