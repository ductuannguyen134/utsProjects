<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION['data'])){

	$_SESSION['data'] = array();
}
$data = $_POST;

$_SESSION['data'][$data['carID']] = $data;

