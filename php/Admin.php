<?php
include("Admin_process.php");
?>
<?php
$db_name = "laundry";
$connection = new mysqli("localhost", "root", "", $db_name) or die(mysqli_error($mysqli));
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Admin Page</title>
   <link rel="stylesheet" href="../css/test10.css?v=<?php echo time(); ?>">
   <link href="../css/hf.css" type="text/css" rel="stylesheet">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
	<body>
	
	<div class="header">
        <img src = "../images/logo.png" class = "logo" >
        

    </div>
    <!--- Navigation Bar -->
    <div class="navbar">
        <ul class="nav">
            
            <li><a href="adlogin.php" style="text-align:right">Logout</a></li>
            
        </ul>
    </div>
</div>
<br>
                    <center><h2 style="border: 2px black;margin: 12px 12px 15px 12px;padding:10px;background-color:#639da9;width:100%;border-radius: 25px;">Admin Page</h2></center>
<br>
	<center>
	<div style="border: 2px black;margin: 12px 12px 15px 12px;padding:10px;background-color:#639da9;width:30%;border-radius: 25px;">
	<form action="Admin.php" method="POST">
                    
					<h3>Add New Item</h3>
                    <div class="">
                        <label>Description:</label>
                        <input type="text" name="description" class="" value="<?php echo $description; ?>">
                    </div>
					<div class="">
                        <label>Image :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="image" class="" value="<?php echo $image; ?>" >
                    </div>
					<div class="">
                        <label>Price :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="price" class="" value="<?php echo $price; ?>">
                    </div>
					<br>
                    <div style="text-align:right;">
                        <button type="submit" class="" name="save" > Save </button>
                    </div>
					
    </form>
	</div>
	</center>
	<?php $query1 = "select * from product order by id asc";
            $result1 = mysqli_query($connection,$query1);
            if(mysqli_num_rows($result1)>0){
                while($row = mysqli_fetch_array($result1)){
                    ?>
					<center>
					<table class="table"  width="100%">
                    
                        <tr style="background-color:#639da9">
                            <th>description</th>
							<th>image</th>
                            <th>price(RS.)</th>
                            <th colspan="2">Action</th>
                        </tr>
                    <?php 
                    while ($row = mysqli_fetch_array($result1)): ?>

                    <tr>
                        <td>  
                            <?php echo $row['description']; ?>
                        </td>
                        <td>
                            <?php echo $row['image']; ?>
                        </td>
						<td>
                            <?php echo $row['price']; ?>
                        </td>
                        <td>
                            
                            <a href="Admin_process.php?delete=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
					</table>
					</center>
					<br><br>
					<?php
                }
            }
        ?>


            <a href = "admin_Psw_reset.php" ><button class = "adminReset">Reset Password</button> </a>
	</body>
</html>
	