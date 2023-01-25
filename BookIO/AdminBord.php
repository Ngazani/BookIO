<!DOCTYPE html>
<html lang="en">
<head>
<title> Welocme to BookIO</title>
      <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Conpatible " content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" type="img/css" href="css/style.css">
	    <link rel="stylesheet" type="text/css" href="Welcome.css">
</head>
<style>
body{background-image: url('./images/Adminbackground');
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
        <a class="nav-link" href="Map.php">Map</a>
      </li>
	  <li class="nav-item">
       <input class="btn btn-primary" type= "submit" name = "btnLogOut" value= "Log Out" >
      </li>
    </ul>
  </div>
  </nav>
  <br>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <h1 class ="h1">ADMIN DASHBORAD </h1>
	   </nav>
  
  <div class="container">
  <div class="row row-cols-12 row-cols-sm-2 row-cols-md-4">
    <div class="dashBorad" class="col">TESTBOOK</div>
    <div class="dashBorad" class="col">INSERT</div>
    <div class="dashBorad" class="col">UPDATE</div>
    <div class="dashBorad" class="col">DELETE</div>
  </div>
</div>
<br>
<div class="container">
  <div class="row row-cols-12 row-cols-sm-2 row-cols-md-4">
    <div class="dashBorad" class="col"><img src="./images/testbookone.png" width="150px" /></div>
    <div class="dashBorad" class="col"> <input class="btn btn-success" type= "submit" name = "btnLogOut" value= "INSERT" ></div>
    <div class="dashBorad" class="col"><input class="btn btn-warning" type= "submit" name = "btnLogOut" value= "UPDATE" ></div>
    <div class="dashBorad" class="col"><input class="btn btn-danger" type= "submit" name = "btnLogOut" value= "DELETE" ></div>
  </div>
</div>
<br>
<div class="container">
  <div class="row row-cols-12 row-cols-sm-2 row-cols-md-4">
    <div class="dashBorad" class="col"><img src="./images/testbooktwo.png" width="150px" /></div>
    <div class="dashBorad" class="col"><input class="btn btn-success" type= "submit" name = "btnLogOut" value= "INSERT" ></div>
    <div class="dashBorad" class="col"><input class="btn btn-warning" type= "submit" name = "btnLogOut" value= "UPDATE"  ></div>
    <div class="dashBorad" class="col"><input class="btn btn-danger" type= "submit" name = "btnLogOut" value= "DELETE" ></div>
  </div>
</div>
<br>
<div class="container">
  <div class="row row-cols-12 row-cols-sm-2 row-cols-md-4">
    <div class="dashBorad" class="col"><img src="./images/testbookthree.png" width="150px" /></div>
    <div class="dashBorad" class="col"><input class="btn btn-success" type= "submit" name = "btnLogOut" value= "INSERT" ></div>
    <div class="dashBorad" class="col"><input class="btn btn-warning" type= "submit" name = "btnLogOut" value= "UPDATE"></div>
    <div class="dashBorad" class="col"><input class="btn btn-danger" type= "submit" name = "btnLogOut" value= "DELETE" ></div>
  </div>
</div>
</body>
<head>