

<?php

session_start();
$db_name = "laundry";
$mysqli = new mysqli("localhost", "root", "", $db_name) or die(mysqli_error($mysqli));

		$id="";
		$description="";
		$image="";
		$price="";

if (isset($_POST['save']))
{
    $description = $_POST['description'];
    $image = $_POST['image'];
	$price = $_POST['price'];


$mysqli->query("INSERT INTO product(description,image,price) VALUES('$description', '$image', '$price')") or
        die($mysqli->error);
		echo '<script>alert("successfully!! updated")</script>';
	echo '<script>window.location="Admin.php"</script>';
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM product WHERE id=$id") or die($mysqli->error());
	echo '<script>alert("Product details has been removed")</script>';
	echo '<script>window.location="Admin.php"</script>';
}
?>