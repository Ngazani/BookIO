<!DOCTYPE html>
<html lang="en">
<head>
<title> Welocme to BookIO</title>
      <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Conpatible " content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/style.css">
</head>
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="Books.php">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="onRoad.php">On Road</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="Sell.php">Sell</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link " href="AboutUS.php">About us</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="Map.php">Map</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<h1 class="h1"> LISTEN TO A BOOK ONLINE AS YOU GO </h1>
</nav>
<br>
<div class="container">
  <div class="row">
    <div class="col">
      <img src="./images/bookone.png" width="300px" height="500px" />
	  <br>
	<p width = "300px">1984 by George Orwell </p> 
	<audio controls>
					<source src=".audio/KendrickLamarTheHeartPart5.mp3"type="audio/ogg">
					<source src="uploads/<?php echo $s['song_mp3']; ?>" type="audio/mpeg">
	</audio> 
	 
    </div>
	<div class="col">
	 
    </div>
	<div class="col">
    </div>
    <div class="col">
      <img src="./images/booktwo.png" width="300px" height="500px"  />
    </div>
	<div class="col">
    </div>
	<div class="col">
    </div>
    <div class="col">
      <img src="./images/bookthree.png" width="300px" height="500px"  />
    </div>
	<div class="col">
    </div>
	<div class="col">
    </div>
	<div class="col">
    </div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" ">
	<div class="col">
    <h1 class="h1"> OTHER CATEGORIES </h1> 
    </div>
	</nav>
  </div>
	 <script src="https://ajax.googlepis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js/"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><script>


</body>	  
	  
</html>























