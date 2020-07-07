<?php
//start session to retrieve data
session_start();

function clear_cart(){
	echo "clear!";
	if(isset($_SESSION['items'])){
		session_destroy();	
	}
	else{
		echo "No session!";
	}
}

function checkout(){
	if(isset($_SESSION['items'])){
		include_once('../view/cusinfo.php');
	}
	else{
		echo "No items to checkout";
	}	
}

//clear cart when the clear button is clicked
if(isset($_POST['clear'])){
	clear_cart();
	header("Location: ../view/botrightframe.php");
}

//proceed to checkout when checkout button is clicked
if(isset($_POST['checkout'])){
	checkout();
}
	
		


