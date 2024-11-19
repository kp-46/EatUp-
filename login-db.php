<?php include("connection.php");
	@$myuser = $_POST['txtname'];
	@$mypass = $_POST['txtpass'];
	
	$qry = "select * from tbl_login where user_Name='$myuser' and user_Pass='$mypass'";
	$data=@mysqli_query($conn,$qry);
	$res=@mysqli_fetch_array($data);
	// echo"username: ".$res['user_Name'];
	// echo"pass: ".$res['user_Pass'];
    if($res['user_Id']>0)
    {
        $_SESSION["user_Name"]=$res['user_Name'];
        $_SESSION["user_Pass"]=$res['user_Pass'];
        $_SESSION["user_Id"]=$res['user_Id'];
        header("location:index.php");
        exit;
    }
    else 
    {
//        echo '$("#login_2").modal("show");';
      header("location:index.php?error=invalid");
        exit;
    }
    
           
                                
?>