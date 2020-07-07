<?php
//start session to retrieve data
session_start();

//assign email receiver
$to = $_POST['email'];

//assign email subject
$subject = "Thank you for shopping with Online Grocery Store!";

//define email content
$mes = "Thank you for shopping with us!";

//add more details to the email content
foreach($_SESSION['items'] as $products){
	
	$mes = $mes."\n\nYour orders are: \nProduct ID: ".$products[0]."\nProduct Name: ".$products[1]."\nUnit Quantity: ".$products[2]."\nPrice: $".$products[3]."\nQuantity: ".$products[4]."\n";
	// echo $mes;
}

$mes = $mes."\nYour order is being processed and will be delivered to ".$_POST['address'].", ".$_POST['suburb'].", ".$_POST['state']." ".$_POST['postcode'].", ".$_POST['country'].". \nWe will inform you when the order is ready to be dispatched. \n\nKind regards,\n\nNguyen Duc Tuan - 13011212";

//email
mail($to, $subject, $mes);
echo "Thank you for shopping with us! We will send an email about your order shortly.";

//clear all sessions
session_destroy();