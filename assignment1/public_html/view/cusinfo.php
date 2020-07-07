<!DOCTYPE html>
<html>
<head>
    <title>Bottom right</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h3>Please enter your delivery details as below: </h3>
	<form action="../controller/purchase.php" method="post">
		<label>* indicates required fields</label>
		<div class="form-group">
    		<label for="exampleFirstName">First Name*: </label>
    		<input required type="text" name="fname" class="form-control" id="fname" aria-describedby="fnameHelp" placeholder="Enter Your First Name">
  		</div>
  		<div class="form-group">
    		<label for="exampleLastName">Last Name*: </label>
    		<input required type="text" name="lname" class="form-control" id="lname" aria-describedby="lnameHelp" placeholder="Enter Your Last Name">
  		</div>
  		<div class="form-group">
    		<label for="exampleAddress">Address*: </label>
    		<input required type="text" name="address" class="form-control" id="address" aria-describedby="addressHelp" placeholder="Enter Your Address">
    		<small id="addressHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
  		</div>
  			<div class="form-group">
    		<label for="suburb">Suburb*: </label>
    		<input required type="text" name="suburb" class="form-control" id="suburb" aria-describedby="postcodeHelp" placeholder="Enter Your Suburb">
  		</div>
  		<div class="form-group">
    		<label for="postcode">State*: </label>
    		<input required type="int" name="state" class="form-control" id="state" aria-describedby="stateHelp" placeholder="Enter Your State">
  		</div>
  		<div class="form-group"> 
    		<label for="postcode">Postcode*: </label>
    		<input required type= "int" name="postcode" class="form-control" id="postcode" aria-describedby="postcodeHelp" placeholder="Enter Your PostCode">
  		</div>
  		<div class="form-group">
    		<label for="country">Country*: </label>
    		<input required type="text" name="country" class="form-control" id="country" aria-describedby="countryHelp" placeholder="Enter Your Country">
  		</div> 
  		<div class="form-group">
    		<label for="exampleInputEmail1">Email address</label>
    		<input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  		</div>
  		<button type="submit" name="submit" class="btn btn-primary">Purchase</button>
	</form>
</body>
</html>