<?php
//start session to retrieve data input by user
session_start();

function add_to_cart(){
	if($_POST['quan'] != "" && $_POST['quan'] != "0"){
	if(!isset($_SESSION['items'])){
		//create session for the input
		$_SESSION['items'] = array();	
	}

	//set input data to variables
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['pri'];
	$quan = $_POST['quan'];
	$uniq = $_POST['uniq'];
	$int = (int)$quan;

	$price = $int * $price;

	$items = array($id,$name,$uniq,$price,$quan);

	//push all input to session
	array_push($_SESSION['items'], $items);

	//calculate total price
 	$total_price = array();
 	foreach($_SESSION as $products){
 		foreach($products as $item){
 			array_push($total_price, $item[3]);
 			$sum = array_sum ($total_price);
 		}
 	}

 	//return view to the bottom right frame
	include_once("../view/botrightframe.php");
	}
	else{
 		echo "Quantity cannot be empty!";
 	};

 	
}

//if the Add button is clicked, add the orders from the top right frame to the bottom right frame
if(isset($_POST['submit'])){
	add_to_cart();
}



