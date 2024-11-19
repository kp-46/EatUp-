<?php include("connection.php");
        @$id= $_SESSION['user_Id']; 
		@$fname = $_POST['txtfname'];
		@$lname = $_POST['txtlname'];
		@$email = $_POST['txtmail'];
		@$con = $_POST['txtcon'];
		@$add = $_POST['txtadd'];
        @$upd = $_POST['up'];
            
        if($upd=="go")
        {
          //echo $upd;
            $update = "UPDATE tbl_order SET Fname='$fname' , Lname='$lname' , Telephone='$con' , Email='$email' , Address1='$add' where user_Id='".$_SESSION["user_Id"]."'";

            @mysqli_query($conn,$update);
            header("location:cart2.php");
        }
        else
        {
            

$ins = "INSERT INTO tbl_order 
VALUES ('$id','$fname', '$lname','$con', '$email','$add')";

    @mysqli_query($conn, $ins);
    header("location:cart2.php");      
}
?>