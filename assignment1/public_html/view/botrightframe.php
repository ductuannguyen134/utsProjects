<!DOCTYPE html>
<html>
<head>
    <title>Bottom right</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>Check Your Cart:</h1>
<form action="../controller/checkout.php" method="post">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Product Name</th>
	      <th scope="col">Unit Quantity</th>
	      <th scope="col">Price ($)</th>		
	      <th scope="col">Quantity</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  	if(isset($_SESSION['items'])){
	  		echo "<h3>Total Price: $".$sum. "</h3>";
	  		
	  		foreach($_SESSION as $products){
	  			echo "<tr>";
	  				foreach($products as $keys => $values){
	  					echo "<tr>";
	  					foreach($values as $key => $value){
	  						if($key == 0){
		  						echo "<td>";
		  						print_r($value);
		  						echo "</td>";
		  						$del_id = $value;
		  					}
		  					if($key == 1){
		  						echo "<td>";
		  						print_r($value);
		  						echo "</td>";
		  					}
		  					if($key == 2){
		  						echo "<td>";
		  						print_r($value);
		  						echo "</td>";
		  					}
		  					if($key == 3){
		  						echo "<td>";
		  						print_r($value);
		  						echo "</td>";
		  					}
		  					if($key == 4){
		  						echo "<td>";
		  						print_r($value);
		  						echo "</td>";
		  					}
		  				
	  					}
	  				
	  				echo "</tr>";
	  				}	
	  			echo "</tr>";

	  		}	
	  	}	
	  	?>
	  </tbody>													
	</table>
	<input type="submit" name="clear" value="Clear Cart" class="btn btn-danger"><br><br>
	</form>
	<form action="../controller/checkout.php" method="post" target="toprightframe"><input type="submit" name="checkout" value="Check Out" class="btn btn-primary"></form><br><br>
</body>
</html>