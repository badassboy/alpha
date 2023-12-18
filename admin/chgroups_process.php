<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require("../functions.php");

$ch = new News();

$title = "";
$category = "";
$sector = "";
$file_name = "";
$shortDesc = "";
$fullDesc = "";

if (isset($_POST['title'])) {
	$title = trim($_POST['title']);
	// echo $title;
	
}

if (isset($_POST['category'])) {
	$category = trim($_POST['category']);
	
}

if (isset($_FILES["picture"])) {
	// var_dump($_FILES);
	$file_name = $_FILES["picture"]['name'];
	// echo $file_name;
	
}

if (isset($_POST['description'])) {
	$shortDesc = $_POST['description'];
	
}

if (isset($_POST['sector'])) {
	$sector = $_POST['sector'];
}

if (isset($_POST['full_desc'])) {
	$fullDesc = $_POST['full_desc'];
	
}

$groups = $ch->addNews($title,$category,$sector,$shortDesc,$fullDesc,$file_name);
if ($groups) {
echo "news created";
}else {
	echo "error occured";
}






?>