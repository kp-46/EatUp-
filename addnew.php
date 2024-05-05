<?php include("connection.php");
@$v = $_GET['v'];
@$id1 = $_POST['SelectedOption'];
@$itemprice = $_POST['item_price'];
@$itemname = $_POST['item_name'];
@$imgn= $_SESSION["uploadImg"];
if(empty($id1))
{ echo $id1;
    header("location:admin.php?msg=error");
    exit;
}
else
{
    //    $_SESSION["uploadImg"]="";
   $sql="INSERT INTO tbl_item(item_image,rest_Id,item_name,item_price) VALUES ('$imgn','$id1','$itemname','$itemprice')";
  // $sqll=" INSERT INTO tbl_item(item_image,item_Id,rest_Id,item_name,item_price) VALUES ('$imgn','100','$id1','$itemname','$itemprice')";
  /* echo $imgn;
   echo $id1;
   echo $itemprice;
   echo $itemname;

  $kp=@mysqli_query($conn,$sql);
  if($kp){
  echo "done";}
   exit;*/
    if (@mysqli_query($conn,$sql))
    {
        header("location:admin.php?msg=add");
    }
   
}
if(@$v==1)
{
    header("location:cart.php");
}
?>