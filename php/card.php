<?php error_reporting(E_ERROR | E_PARSE); ?>
<?php  include('php_code.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$ID = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM payment WHERE ID=$ID");

		if ($record->num_rows == 1 ) {
			$n = mysqli_fetch_array($record);
			$CardHolderName = $n['CardHolderName'];
			$CardHolderNumber = $n['CardNumber'];
            $ExpireDate = $n['ExpireDate'];
            $CVV = $n['CVV'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create and update</title>
    <link rel="stylesheet" type="text/css" href="../CSS/card_details_style.css">
    
</head>
<body>
    <?php if (isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>

    <?php $results = mysqli_query($db, "SELECT * FROM payment"); ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>CardNumber</th>
                <th>Expire Date</th>
                <th>CVV</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['CardHolderName']; ?></td>
                <td><?php echo $row['CardNumber']; ?></td>
                <td><?php echo $row['ExpireDate']; ?></td>
                <td><?php echo $row['CVV']; ?></td>
                <td>
                    <a href="card.php?edit=<?php echo $row['ID']; ?>" class="edit_btn" >Edit</a>
                </td>
                <td>
                    <a href="php_code.php?del=<?php echo $row['ID']; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>



	<form method="post" action="php_code.php" >
		<div class="input-group">
            <input type="hidden" name="ID" value="<?php echo $ID; ?>">
			<label>Name</label>
			<input type="text" name="CardHolderName" value="<?php echo $CardHolderName; ?>">
		</div>
		<div class="input-group">
			<label>Number</label>
			<input type="text" name="CardHolderNumber" value="<?php echo $CardHolderNumber; ?>">
		</div>

        <div class="input-group">
			<label>Expire Date</label>
			<input type="date" name="ExpireDate" value="<?php echo $ExpireDate; ?>">
		</div>

        <div class="input-group">
			<label>CVV</label>
			<input type="text" name="CVV" value="<?php echo $CVV; ?>">
		</div>

		<div class="input-group">
            <?php if ($update == true): ?>
                <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
            <?php else: ?>
                <button class="btn" type="submit" name="save" >Save</button>
                
            <?php endif ?>
		</div>
	</form>

 
    
   
</body>
</html>