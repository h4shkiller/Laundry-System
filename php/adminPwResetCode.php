<?php

require 'connect.php';

session_start();
$staff_id = $_SESSION['staff_id'];

if(isset($_POST['ConPw'])){

    $oldAdminPw = $_POST['OldAdPw'];
    $newAdminPw = $_POST['NewAdPw'];
    $confirmPw = $_POST['ConPw'];

    $changeApw = mysqli_query($db, "SELECT * FROM admin_account WHERE staff_id = '$staff_id'");

    $nChangeApw = mysqli_fetch_array($changeApw);

    $Apwd = $nChangeApw['a_password'];

    if($Apwd == $oldAdminPw)
    {

        if($newAdminPw == $confirmPw)
        {

            $updateAdpwd = mysqli_query($db,"UPDATE admin_account SET a_password = '$newAdminPw' WHERE staff_id = '$staff_id'");
            echo "<script>alert('Admin password updated successfully!'); window.location='admin_Psw_reset.php'</script>";
        }
        else
        {

            echo "<script>alert('New password and confirm password not matched!'); window.location='admin_Psw_reset.php'</script>";
        }
    }
    else{

        echo "<script>alert('Password doesnot exist!'); window.location='admin_Psw_reset.php'</script>";
    }



}



?>
    


