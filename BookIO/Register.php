<?php
if(isset($_Post["backtologin"]))
	{header("Location:LoginUser.php");}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Welcome</title>
      <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE-edge">
	  <meta name="viewport" content="width=device-width, initial-scale">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="Welcome.css">
 </head> 
 
  <style>
body{background-image: url('./images/background');
no-repeat;
background-repeat:no-repeat;
background-attachment:fixed;
background-size: 100% 100%;
}</style>

<body>

<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BookIO</a>
  
	</nav></div>
<div>
</div>

<div class="container">
  <div class="row">
   <div class="people">
<div class="col">
<br>
<br>
<br>

<h1> NOT INTERESTED</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<form action=" LoginUser.php" method="post">
<input class="btn btn-primary" type= "submit" name = "backtologin" value= "BACK" >
</form>
    </div>
</div>	


    <div class="col">
	<form action=" Register.php" method="post">
		<div class="container">
		<div class="row"> 
		<div class= "col">
		<br>
		<br>
		<br>
		
		<h1 class="details"> SIGN IN TO BookIO</h1>
		
		<br>
		<br>
		<br>
		<br>

		 <p class="details" > Please insert your personal information below </p>
		 
		 
		 <input class="form-control" type= "text" name = "firstname" required placeholder="First Name" >
		 <br>
		 <input class="form-control"  type= "text" name = "lastname" required placeholder="Last Name"  >
		 <br>
		 <input class="form-control" type= "text" name = "email"  required placeholder="Email" >
		 <br>
		 <input class="form-control"  type= "text" name = "studentnumber"  required placeholder="Student Number"  >
		 <br>
		 <input class="form-control"  type= "text" name = "phone"  required placeholder="Phone Number"  >
		 <br>
		 <input class="form-control" type= "text" name = "password"  required placeholder="Password"  >
		 <br>
		 <hr class="mb-3">
		 <input class="btn btn-primary" type= "submit" name = "create" value= "SIGN UP" >
		 </div>
		 </div>
		</div>
</form>
</div>
</div>
</div>


<?php
$conn = mysqli_connect("localhost","root",'',"bookstore1");

     if($conn === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
        
        }

		$firstname 		= $_REQUEST['firstname'];
		$lastname 		= $_REQUEST['lastname'];
		$email		= $_REQUEST['email'];
		$studentnumber = $_REQUEST['studentnumber'];
		$phone 	= $_REQUEST['phone'];
		$password 	= $_REQUEST['password'];
				
		echo $firstname  . "" . $lastname . "" .  $email . "" .  $studentnumber. "" .  $phone. "" .  $password ; 
		
	
 $query = "INSERT INTO register VALUES('$firstname','$lastname','$email','$studentnumber,'$phone','$password);";
     $result = mysqli_query($conn,$query);
     if($result){
         
         echo "Registration Seccessful";
         
     }
     else{
          echo "Check the form and try again";
		  header("Location:Index.php");

     }
	
	mysqli_close($conn);
	
	?>




     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><script>




</body>
</html>























