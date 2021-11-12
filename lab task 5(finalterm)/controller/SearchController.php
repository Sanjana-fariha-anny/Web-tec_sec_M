<?php

require_once '../model/model.php';

if (isset($_POST['SearchProducts'])) {
	
		//echo $_POST['Product_name']." found";

    try {
    	
    	$allSearchedProducts = SearchProducts($_POST['Product_name']);
    	//echo $allSearchedProducts['Name'];
    	//require_once '../SearchAllProducts.php';
    	echo $_POST['Product_name']." found";

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}