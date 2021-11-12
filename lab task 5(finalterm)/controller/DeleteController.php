<?php 

require_once '../model/model.php';

if (deleteProducts($_GET['id'])) {
	echo "delete successfully!!";
    header('Location: ../showAllProducts.php');
}

 ?>