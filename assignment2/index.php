<?php
 if(!isset($_SESSION)){
    session_start();
    if(isset($_GET['destroy'])){
    session_destroy();
}
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="cars.js"></script>

 	<title>Hertz-UTS</title>
 </head>
 <body style="background-color: lightgrey">
 	<nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            Hertz-UTS
        </a>
        <h1 style="color: white;">Car Rental Center</h1>
        <button class="btn btn-primary" onclick='carRes()'>
            Car Reservation
        </button>
    </nav>
    <div class="container" style="background-color: white">
    	<div id="carlist" class="row">
    	
    	</div>
	</div>
 </body> 
 </html>