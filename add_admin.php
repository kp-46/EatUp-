<?php include("connection.php");
//@$num=$_GET['num'];
@$usnum=mt_rand(1000,10000);
echo $usnum;
/*if($num=='num')
{      
    $sqlnum="SELECT user_no FROM tbl_admin where user_Id='".$_SESSION["user_Id"]."'";
    @mysqli_query($conn,$sqlnum);
    $usnum= @mysqli_fetch_array($conn,$sqlnum);
    //@$usnum=0;
    
    echo $usnum;
   
    $usnum=$usnum+1;

    echo $usnum;
}*/

 @$dt=date("Y-m-d");
$selins="INSERT INTO tbl_admin(user_Id,id,`name`,price,qty,rest_Id) SELECT user_Id,id,`name`,price,qty,rest_Id from tbl_cart where user_Id='".$_SESSION["user_Id"]."'";
$insdate = "UPDATE tbl_admin SET `date`='$dt' where `date` IS NULL";

 
$val = @mysqli_query($conn,$selins);
@mysqli_query($conn,$insdate);

if($val)
{   
   
   $insusno = "UPDATE tbl_admin SET `user_no`='$usnum' where user_no IS NULL";
   @mysqli_query($conn,$insusno);
    $delcart="DELETE FROM tbl_cart WHERE user_Id='".$_SESSION["user_Id"]."'";
    $val1= @mysqli_query($conn,$delcart);
    header("location:cart_subdom.php");
}
else
{
 echo"NOT TODAY!!!!!";
}

?>