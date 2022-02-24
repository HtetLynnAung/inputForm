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
		<div class="row mt-5">
			<div class="col-lg-6 p-3 mt-3">
				<img src="img.jpg" class="img-fluid">
				<label class="over-pic">contact us</label> 
			</div>
			<div class="col-lg-6 p-4 mt-5">
			   <form method="POST" action="showData.php">  
			   	<div class="mb-3">
		             	<label class="form-label">Your <span class="txt-color"> Name<span></label>  
		             	<input type="text" name="name" class="form-control" required />  
	             	</div>  
	             	<div class="mb-3">
		             	<label class="form-label">Your <span class="txt-color">Email</span></label>  
		             	<input type="text" name="email" class="form-control" required />  	             	
	             	</div>
	             	<div class="mb-4">
		             	<label class="form-label">Your <span class="txt-color">Message</span></label>  
		             	<input type="text" name="message" class="form-control" required />  
	               </div>  
	             	<div class="mb-3">
	             		<button type="submit" name="submit" class="btn form-control">Send</button> 
	             	</div>	             	
	        </form> 
			</div>
		</div>  
	         
	   	</div> 


	   	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	   	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
	</body>
</html>