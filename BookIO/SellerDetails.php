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
  </nav>
  </div>
  <br>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Books.php">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="OnRoad.php">On Road</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="Sell.php">Sell</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link " href="AboutUs.php">About us</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="Map.php">Map</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<h1 class="h1"> SELL YOUR BOOK</h1>
</nav>
<br>
<div>

</div>

<div class="container">
  <div class="row">
    <div class="col">
	<form action=" AdminBord.php" method="post">
		<div class="container">
		<div class="row"> 
		<div class= "col">
		
		<h1 class="details"> SELLER DETAILS</h1>
		<br>
		  <p class="details" > Please insert your personal information below </p>
		 
		 <input class="form-control" type= "text" name = "studentnumber" required placeholder= "Student Number" >
		 <br>
		 
		 <input class="form-control"  type= "text" name = "firstname" required  placeholder= "Name">
		 <br>
		 <input class="form-control" type= "text" name = "lastname" required placeholder= "Surname" >
		 <br>
		 <input class="form-control" type= "text" name = "email" required placeholder= "Email">
		 <br>
		 <input class="form-control" type= "text" name = "phone" required placeholder= "Phone Number" >
		 <br>
		 <hr class="mb-3">
		 <input class="btn btn-primary" type= "submit" name = "create" value= "SUBMIT" >
		 </div>
		 </div>
		</div>
</form>
</div>
 <div class="can">
<div class="col">
<br>
		<br>
		<br>
		<br>
		<br>

		 <br>
		 <br>
		 <br> <br>
		 <br>
		
		 
<form action=" Sell.php" method="post">

<input class="btn btn-primary" type= "submit" name = "backcreate" value= "CHANCEL" >
</form>
    </div>
</div>	
</div>
</div>
<?php
if(isset($_Post["backcreate"]))
	{header("Location:Sell.php");}
?>

<?php
$conn = mysqli_connect("localhost","root",'',"bookstore1");

     if($conn === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
        
        }

		$studentnumber = $_REQUEST['studentnumber'];
		$firstname 		= $_REQUEST['firstname'];
		$lastname 		= $_REQUEST['lastname'];
		$email		= $_REQUEST['email'];
		$phone 	= $_REQUEST['phone'];

				
		echo  $studentnumber. "" .$firstname  . "" . $lastname . "" .  $email . "" .  $phone ; 
		
	
 $query = "INSERT INTO register VALUES('$studentnumber','$firstname','$lastname','$email','$phone');";
     $result = mysqli_query($conn,$query);
     if($result){
         
         echo "Registration Seccessful";
         
     }
     else{
          echo "Check the form and try again";
		  

     }
	
	mysqli_close($conn);
	
	?>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><script>




</body>
</html>

