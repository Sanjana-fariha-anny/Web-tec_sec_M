<?php  
require_once '../model/model.php';


if (isset($_POST['saveProduct'])) {
	$data['Name'] = $_POST['Name'];
	$data['BuyingPrice'] = $_POST['BuyingPrice'];
	$data['SellingPrice'] = $_POST['SellingPrice'];
	if(empty($_POST['Display'])){
		$data['Display'] = "No";
	}
	else{
		$data['Display'] = $_POST['Display'];
	}

  if (addProducts($data)) {
  	echo 'Successfully added!!';
  } else {
  	echo 'There is a problem';
  }
	//$var = "Successfully added!!!\n\n"."Product name : ".$_POST['Name']; 
    	//echo $var;
} else {
	echo 'You are not allowed to access this page.';
}

?>