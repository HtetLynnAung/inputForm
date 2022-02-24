<?php
require_once 'database/init.php';

$conn = new mysqli('localhost','root', '', 'tbl_posts');



if(isset($_POST['submit'])){

	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$query = "INSERT INTO user_info(name,email,message) values('$name','$email','$message') ";

		$sql = mysqli_query($conn,$query) ;


		if ($sql) {
		 	header('Location: showData.php');
		 }
		// else{
		// 	echo "someting went wrong"; 
		// }
	}
	else
	{	
		header('Location: index.php');
		//echo"all fields required.";
	}
}


$getallPosts = $user->getPosts();


?>



<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test database</title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="main.css">
 	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row mt-2"><label class="txt-color big-font">Inserted data</label></div>
			<div class="row mt-5">

				<?php
					foreach ($getallPosts as $value) {										
				?>
				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card" style="width: 18rem;">
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item"><?php echo $value['name']; ?></li>
					    <li class="list-group-item"><?php echo $value['email']; ?></li>
					    <li class="list-group-item"><?php echo $value['message']; ?></li>
					  </ul>
					</div>
				</div>
				<?php } ?>
			</div>  
	         
	   	</div> 


	   	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	   	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 

</html>