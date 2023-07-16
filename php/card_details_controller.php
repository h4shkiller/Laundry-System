<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'laundry'); 
    
    $CardHolderName="";
    $CardHolderNumber="";
    $ExpireDate="";
    $CVV="";
    $ID=0;
    $update=false;

    if (isset($_POST['save'])) {
        $CardHolderName = $_POST['CardHolderName'];
        $CardHolderNumber = mysqli_real_escape_string($db,md5($_POST['CardHolderNumber']));
        $ExpireDate = $_POST['ExpireDate'];
        $CVV = mysqli_real_escape_string($db,md5($_POST['CVV']));

		mysqli_query($db, "INSERT INTO payment (CardHolderName,CardNumber,ExpireDate,CVV) VALUES ('$CardHolderName', '$CardHolderNumber','$ExpireDate',' $CVV')"); 
		$_SESSION['message'] = " saved"; 
		header('location: card.php');
	}


    if (isset($_POST['update'])) {
       $ID = $_POST['ID'];
       $CardHolderName = $_POST['CardHolderName'];
       $CardHolderNumber = $_POST['CardrNumber'];
       $ExpireDate = $_POST['ExpireDate'];
       $CVV = $_POST['CVV'];

    
        mysqli_query($db, "UPDATE payment SET CardHolderName='$CardHolderName',  CardNumber='$CardHolderNumber' , ExpireDate= '$ExpireDate', CVV='$CVV' WHERE ID=$ID");
        $_SESSION['message'] = "updated!"; 
        header('location: card.php');
    }
    
    if (isset($_GET['del'])) {
        $ID = $_GET['del'];
        mysqli_query($db, "DELETE FROM payment WHERE ID=$ID");
        $_SESSION['message'] = "deleted!"; 
        header('location: card.php');
    }   
    