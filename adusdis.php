<?php include("connection.php"); 
$jk=@$_GET['tae'];
echo $jk;

 $selrest1="SELECT * from tbl_order where user_Id=$jk";
   
   header("location:admin.php?kjk=$selrest1");
 

?>

