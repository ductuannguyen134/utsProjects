<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(isset($_SESSION['data'])){
	$delete_ID = $_GET['del_id'];
	unset($_SESSION['data'][$delete_ID]);
	unset($_SESSION['days'][$delete_ID]);
	include_once('showCart.php');
} else {
	print_r("Fail!");
}

