<!DOCTYPE html>
<html>
<head>
	<title>Top right</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1>Product Detail: </h1>
	<form action="../controller/add_cart.php" method="post" target="botrightframe">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Product Name</th>
	      <th scope="col">Price ($)</th>
	      <th scope="col">In Stock</th>	
	      <th scope="col">Unit Quantity</th>	
	      <th scope="col">Quantity</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row" src="<?php echo $proid ?>">
	      	<input type="text" name="id" value="<?php if(isset($proid)) {echo $proid;}; ?>" size="3" readonly>
	      </th>
	      <td >
	      	<input type="text" name="name" value="<?php if(isset($proname)) {echo $proname;}; ?>" readonly>
	      </td>
	      <td >
	      	<input type="text" name="pri" value="<?php if(isset($price)) {echo $price;}; ?>" size="2" readonly>
	      </td>
	      <td >
	      	<input type="text" value="<?php if(isset($instock)) {echo $instock;}; ?>" size="2" readonly>
	      </td>
	      <td >
	      	<input required type="text" id="uniq" name="uniq" value="<?php if(isset($unit_q)) {echo $unit_q;}; ?>" size="7" readonly>
	      </td>
	      <td >
	      	<input required type="number" id="quantity" name="quan" min="0" size="2" >
	      </td>
	    </tr>
	  </tbody>													
	</table>
	<input type="submit" name="submit" value="Add to Cart" class="btn btn-primary">

	</form>

</body>
</html>