<?php
//import database model connected to rerun
include'..\model\model.php';
$d = new model;

//retrieve the ID of product selected by user
$product_id = $_GET['product_id'];

//query the database to list the details of product choosen by user
$sql = "SELECT * FROM products WHERE product_id = '$product_id'";
$result = $d->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$proid = $row["product_id"];
    	$proname = $row["product_name"];
    	$price = $row["unit_price"];
    	$instock = $row["in_stock"];
    	$unit_q = $row["unit_quantity"];

        //return the data to top right frame view
    	include_once("../view/toprightframe.php");
    }
} else {
    //if database is not connected
    echo "0 results";
}

