<?php
if(isset($_Post["sellcreate"]))
	{header("Location:SellerDetails.php");}
?><!DOCTYPE html>
<html lang="en">
<head>
<title> Welocme to BookIO</title>
      <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Conpatible " content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/style.css">
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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BookIO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  	<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	</nav>
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
        <a class="nav-link" href="Map">Map</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<h1 class="h1"> SELL YOUR BOOK</h1>
</nav>
<br>
<div class="container">
  <div class="row">
  <div class="sell">
    <div class="col">
	<form action=" SellerDetails.php" method="post">
		<div class="container">
		<div class="row"> 
		<div class= "col-col-sm-3">
		<br>
		
		<h1 > HOW TO SELL YOUR BOOK ONLINE</h1>
		<br>
		<p>- Sign up</p>
		<p>- Add product</p>
		<p>- Connect to a payment gateway</p>
		<p>- Share payment links with the customer</p>
		<p>- Start selling and collecting payment online </p>
		
		<br>
		<br>
	
		 <hr class="mb-3">
		 <input class="btn btn-primary" type= "submit" name = "sellcreate" value= "SIGN UP" >
		 </div>
		 </div>
		</div>
</form>
</div>
</div>
</div>
</div>
	 <script src="https://ajax.googlepis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js/"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><script>





</body>	  
	  
</html>























