<?php
 if(!isset($_SESSION)){
    session_start();
}
if(empty($_SESSION['data'])){
	echo "
		<script>
			alert('Your cart is empty!');
			location.href='showCart.php';
		</script>
	"; 
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
    <a class="navbar-brand" href="index.php">
        Hertz-UTS
    </a>
    <h1 style="color: white;">Car Rental Center</h1>
    <button class="btn btn-primary" onclick='carRes()'>
        Car Reservation
    </button>
</nav><br>
<h3 style="text-align: center;">Check Out</h3><br>
<div class="container" style="background-color: white">
	<br><h5>Customer Details and Payment</h5>
	<h6>Please fill in your details. <strong>*</strong> indicates required field.</h6>
<form action="booking.php" method="post"><br>
  <div class="form-group row">
    <label for="firstName" class="col-sm-2 col-form-label">First Name:* </label>
    <div class="col-sm-10">
      <input required type="text" name="fname" class="form-control" id="inputfname" placeholder="First Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputlname" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" name="lname" id="inputlname" placeholder="Last Name">
    </div>
  </div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input required type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
    <div class="form-group row">
    <label for="firstAddress" class="col-sm-2 col-form-label">Address Line 1 *: </label>
    <div class="col-sm-10">
      <input required type="add1" name="add1" class="form-control" id="add1" placeholder="Address Line 1">
    </div>
  </div>
    <div class="form-group row">
    <label for="secondAddress" class="col-sm-2 col-form-label">Address Line 2 *: </label>
    <div class="col-sm-10">
      <input type="add2" name="add2" class="form-control" id="add2" placeholder="Address Line 2">
    </div>
  </div>
    <div class="form-group row">
    <label for="city" class="col-sm-2 col-form-label">City</label>
    <div class="col-sm-10">
      <input required  type="city" name="city" class="form-control" id="city" placeholder="City">
    </div>
  </div>
    <div class="form-group row">
    <label for="state" class="col-sm-2 col-form-label">State</label>
    <div class="col-sm-10">
 		<select type="text" class="form-control" required name="state">
 			<option selected>New South Wales</option>
 			<option>Western Australia</option>
 			<option>Queensland</option>
 			<option>South Australia</option>
 			<option>Victoria</option>
 			<option>Tasmania</option>
 		</select>
    </div>
  </div>
    <div class="form-group row">
    <label for="postcode" class="col-sm-2 col-form-label">PostCode</label>
    <div class="col-sm-10">
      <input required type="text" name="postcode" class="form-control" id="postcode" placeholder="PostCode">
    </div>
  </div>
      <div class="form-group row">
    <label for="payType" class="col-sm-2 col-form-label">Payment Type: *</label>
    <div class="col-sm-10">
 		<select type="text" class="form-control" required name="paymentType">
 			<option selected>VISA</option>
 			<option>Mastercard</option>
 			<option>Pay Pal</option>
 			<option>Bpay</option>
 			<option>Direct Deposit</option>
 		</select>
    </div><br><br>
    <h5 class="container"><br>You are required to pay $
    	<?php
    		$total_price = array();
    		$rentDays = $_POST['rentDays'];
    		$_SESSION['days'] = $rentDays;
    		foreach($_SESSION['data'] as $car){
    			$id = $car['carID'];
    			$ppd = (int)$car['pricePerDay'];
    			$num = $rentDays[$id];
    			$price = $ppd * $num;
    			array_push($total_price,$price);
    		}
    		$sum = array_sum($total_price);
    		$_SESSION['totalPrice'] = $sum;
    		echo $sum;
    	?>
    </h5>
  <div class="col-12 text-right">
      <a href='index.php' class="btn btn-primary">Continue Selection</a>
      <button type="submit" class="btn btn-primary">Booking</button>
  </div> <br><br>
</form>
<br>
</div>
<script type="text/javascript">
	function carRes(){
	location.href = "showCart.php";	
	return true;
}
</script>
</body>
</html>

