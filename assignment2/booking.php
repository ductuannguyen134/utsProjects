<?php 
if(!isset($_SESSION)){
    session_start();

    $to = $_POST['email'];
    $tp = $_SESSION['totalPrice'];
    $subject = "Thank you for renting cars from Hertz-UTS!";
    $mes = "Thank you for renting cars from Hertz-UTS, the total cost is $" . $tp . "\n\nDetails are follow:";
    foreach($_SESSION['data'] as $car){
    	$model = $car['brand']."-".$car['model']."-".$car['modelYear'];
    	$rentDays = $_SESSION['days'][$car['carID']];
    	$mes = $mes."\n\nModel: ".$model."\nmileage: ".$car['mileage']."\nfuel_type: ".$car['fuelType']."\nseats: ".$car['seats']."\nprice_per_day: ".$car['pricePerDay']."\nrent_days: ".$rentDays."\ndescription: ".$car['description'];
    }
    mail($to, $subject, $mes);
    session_destroy();
}	
?>
<!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hertz-UTS</title>
</head>
<body style="background-color: lightgrey">
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php?destroy=true">
        Hertz-UTS
    </a>
    <h1 style="color: white;">Car Rental Center</h1>
    <button class="btn btn-primary" onclick='carRes()'>
        Car Reservation
    </button>
</nav><br>
<div class="container">
	<h3>Thank you for renting cars on our page! An email will be sent to you shortly!</h3><br>
	<a href="index.php?destroy=true" class="btn btn-primary">Back to home page</a>
</div>
<script type="text/javascript">
	function carRes(){
	location.href = "showCart.php";	
	return true;
}
</script>
</body>
</html>
