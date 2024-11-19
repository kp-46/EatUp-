<?php include("connection.php");
    $autoId=$_GET['autoId'];
    $qty=$_GET['qty'];
    $sql="UPDATE tbl_cart SET qty = '".$qty."' WHERE autoId = '".$autoId."' ";
    @mysqli_query($conn,$sql);
    header("location:cart_subdom.php");
	exit;	
?>