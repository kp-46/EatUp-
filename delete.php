<?php include("connection.php");


   


	@$id1=$_GET['del'];

	
		
		$sql="delete from tbl_cart where autoId=$id1";

		if(@mysqli_query($conn,$sql))
		{
			
			// Function call   
			//	function_alert("Item Deleted");  
			header("location:cart_subdom.php?v=kp");
		}
		else
		{
			echo"Failed";
		}		
?>