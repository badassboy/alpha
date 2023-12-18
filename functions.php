<?php
session_start();
include("database.php");


class News {

	// register admin
	public function registerAdmin($email,$password)
	{

		$dbh = DB();
		$join_date = date("m.d.y");
		$stmt = $dbh->prepare("SELECT * FROM admin WHERE email = ?");
		$stmt->execute([$email]);
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		if ($user >  0) {
			return false;
		}else {


			$hashed = password_hash($password,PASSWORD_BCRYPT);
			$stmt = $dbh->prepare("INSERT INTO admin(email,password) VALUES(?,?)");
			$stmt->execute([$email,$hashed]);
			$inserted = $stmt->rowCount();
			if ($inserted>0) {
				return true;
			}else {
				return $dbh->errorInfo();
			}
			
		}

	}

	// admin login
	public function loginAdmin($email,$password)
	{

		$dbh = DB();
		$stmt = $dbh->prepare("SELECT id,email,password FROM admin WHERE email = ?");

		$stmt->execute([$email]);
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach ($data as $row) {

			$user_password = $row['password'];
	if (password_verify($password, $user_password)) {
		$_SESSION['id'] = $row['id'];
		return $_SESSION['id'];
	}else{
		return false;
	}

		
		}

	}

	// post news
public function addNews($title,$category,$sector,$short_desc,$fullDesc,$file_name){
		$dbh = DB();
		$current_date = date("Y/m/d");
		 $path = "pics/";
		$errors = array();

      $file_name = $_FILES["picture"]['name'];
		     
      $file_size = $_FILES['picture']['size'];

      $file_tmp = $_FILES['picture']['tmp_name'];
      $file_type = $_FILES['picture']['type'];
		     

  $test_file = $path.basename($_FILES["picture"]["name"]);
  $file_ext = pathinfo($test_file, PATHINFO_EXTENSION);

  $extensions= array("jpeg","jpg","png","gif");

  if(in_array($file_ext,$extensions) === false){
     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
  }

  if($file_size > 4097152) {
     $errors[]='File size must be exactly 2MB';
  }

      if (empty($errors)==true) {

   	if (move_uploaded_file($file_tmp, "pics/".$file_name)) {

$stmt = $dbh->prepare("INSERT INTO news(title,category,sector,news_date,short_desc,full_desc,picture) VALUES(?,?,?,?,?,?,?)");

$stmt->execute([$title,$category,$sector,$current_date, $short_desc,$fullDesc,"pics/".$file_name]);

		$added = $stmt->rowCount();
		if ($added>0) {
			return true;
		}else{
			return $dbh->errorInfo();
		}
	}

      		
      	}

      	
      }

      //fetch headlines news
	public function headingNews(){
		$dbs = DB();
$stmt = $dbs->prepare("SELECT * FROM news WHERE category = 'headline'");
		$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $data;		

	}

//fetch featured news
	public function featuredNews(){
		$dbs = DB();
$stmt = $dbs->prepare("SELECT * FROM news WHERE category = 'featured'");
		$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $data;		

	}

	//fetch latest news
	public function latestNews(){
		$dbs = DB();
$stmt = $dbs->prepare("SELECT * FROM news WHERE category = 'latest'");
		$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $data;		

	}




	//fetch trending news
	public function trendingNews(){
		$dbs = DB();
$stmt = $dbs->prepare("SELECT * FROM news WHERE category = 'trending'");
		$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $data;		

	}



	//fetch trending news
	public function detailedNews($id){
		$dbs = DB();
$stmt = $dbs->prepare("SELECT * FROM news WHERE newsId = ?");
		$stmt->execute([$id]);
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $data;		

	}

	// business news
	public function businessNews(){
		$dbs = DB();
$stmt = $dbs->prepare("SELECT * FROM news WHERE sector = 'business'");
		$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $data;		

	}

	public function sportsNews(){
		$dbs = DB();
$stmt = $dbs->prepare("SELECT * FROM news WHERE sector = 'sports'");
		$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $data;		

	}

	public function politicsNews(){
		$dbs = DB();
$stmt = $dbs->prepare("SELECT * FROM news WHERE sector = 'politics'");
		$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $data;		

	}

	public function educationNews(){
		$dbs = DB();
$stmt = $dbs->prepare("SELECT * FROM news WHERE sector = 'education'");
		$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $data;		

	}

	public function entertainmentNews(){
		$dbs = DB();
$stmt = $dbs->prepare("SELECT * FROM news WHERE sector = 'entertainment'");
		$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $data;		

	}

	// admin section
	// get all news
	public function allNews(){
		$dbs = DB();
$stmt = $dbs->prepare("SELECT * FROM news");
		$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $data;		

	}

	// delete news
	public function deleteNews($id){
		$dbs = DB();
$stmt = $dbs->prepare("DELETE FROM news WHERE newsId=?");
		$stmt->execute([$id]);
		if ($stmt->rowCount()>0) {
			return true;
		}else{
			return false;
		}
	}




	
	


	// delete news

	// edit news
	public function updateAdminPassword($oldpwd,$password,$email){
		$password = password_hash($password, PASSWORD_BCRYPT);
		$oldpassword =$oldpwd;
		if (!($oldpassword==$_SESSION['adimn_pass'])) {
			$messg="Old Password Is Incorect";
			return $messg;
		}
		$dbh = DB();
		$stmt = $dbh->prepare("UPDATE church_admin SET password = ? WHERE email = ?");
		$statuz=$stmt->execute([$password,$email]);
		$count = $stmt->rowCount();
		if ($count ==1) {
			return true;
		}else {
			return false;
		}

	}

}


?>