 <?php include("connection.php");
$id = $_GET['del'];


$sql="select item_Id,rest_Id,item_name,item_price from tbl_item where item_Id=$id";


$val = @mysqli_query($conn,$sql);


if(@mysqli_num_rows($val)>0)
{

    while($row=@mysqli_fetch_array($val))
    {
        $row1=$row["item_Id"];
        $row2=$row["rest_Id"];
        $row3=$row["item_name"];
        $row4=$row["item_price"];
        

        $sql1="insert into tbl_cart (`rest_Id`,`id`, `name`, `price`, `user_Id`, `qty`) values ('$row2','$row1','$row3','$row4','".$_SESSION["user_Id"]."',1)";
        @mysqli_query($conn,$sql1);
    }    
}
header("location:cart_subdom.php?del=$id");
exit;
?>