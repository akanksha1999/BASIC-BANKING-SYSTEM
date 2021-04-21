<!DOCTYPE html>
<html lang="en">

<head>
	<title>Banking App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="icon.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico|Titillium+Web&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="custom.css">
	<script src="https://kit.fontawesome.com/b8552f8654.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet " href="./css/styles1.css">
</head>

<body>
	<?php
	$conn = mysqli_connect('localhost', 'id16644100_akanksha', 'Ganesha1999@', 'id16644100_schema1', '3306');
	if (mysqli_connect_errno()) {
		echo "failed to connect to MySql";
	}
	?>
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a style="font-family:David;text-align:left;" class="navbar-brand" href="#home"><big>@akanksha_chouhan</big></a>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="Accounts.php" target="parent"><span class="glyphicon glyphicon-user"></span> Account Holders</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main>
		<?php
		$sender_id = mysqli_real_escape_string($conn, $_POST['sender_Id']);
		$receiver_id = mysqli_real_escape_string($conn, $_POST['receiver_Id']);
		$amount_transfered = mysqli_real_escape_string($conn, $_POST['amount']);
		$query1 = "SELECT NAME FROM  `accounts` WHERE ID=$sender_id";
		$result1 = mysqli_query($conn, $query1);
		if ($result1->num_rows > 0) {
			while ($row1 = $result1->fetch_assoc()) {
				$sender_name = $row1["NAME"];
			}
		}
		$query2 = "SELECT NAME FROM  `accounts` WHERE ID=$receiver_id";
		$result2 = mysqli_query($conn, $query2);
		if ($result2->num_rows > 0) {
			while ($row2 = $result2->fetch_assoc()) {
				$receiver_name = $row2["NAME"];
			}
		}
		$query3 = "SELECT CURRENT_BALANCE FROM `accounts` WHERE ID=$sender_id";
		$result3 = mysqli_query($conn, $query3);
		if ($result3->num_rows > 0) {
			while ($row3 = $result3->fetch_assoc()) {
				$sender_balance = $row3["CURRENT_BALANCE"];
			}
		}
		$query4 = "SELECT CURRENT_BALANCE FROM  `accounts` WHERE ID=$receiver_id";
		$result4 = mysqli_query($conn, $query4);
		if ($result4->num_rows > 0) {
			while ($row4 = $result4->fetch_assoc()) {
				$receiver_balance = $row4["CURRENT_BALANCE"];
			}
		}
		try {
			if ($sender_balance - $amount_transfered >= 0) {
				if ($amount_transfered >= 0) {
					$query6 = "UPDATE `accounts` SET CURRENT_BALANCE=$sender_balance-$amount_transfered WHERE ID=$sender_id";
					$result6 = mysqli_query($conn, $query6);
				}
			} else {
				throw new Exception("Insufficient balance");
			}
			if ($amount_transfered >= 0) {
				$query7 = "UPDATE `accounts` SET CURRENT_BALANCE=$receiver_balance+$amount_transfered WHERE ID=$receiver_id";
				$result7 = mysqli_query($conn, $query7);
				$query8 = "INSERT INTO `transactions`(SENDER_ID,SENDER_NAME,RECEIVER_ID,RECEIVER_NAME,AMOUNT) VALUES('$sender_id','$sender_name',$receiver_id,'$receiver_name',$amount_transfered)";
				$result8 = mysqli_query($conn, $query8);
			}
			$conn->commit();
		} catch (Exception $e) {
			$conn->rollback();
			'Message: ' . $e->getMessage();
		}
		$query5 = "SELECT * FROM `transactions`";
		$result5 = mysqli_query($conn, $query5);
		if ($result5->num_rows > 0) {
		?>
			<h1 class="hdtop">TRANSACTION HISTORY</h1>
			<table class="tb">
				<tr class="tprow">
					<th class='col1'> SENDER ID</th>
					<th class="col2">SENDER NAME</th>
					<th class="col3">RECEIVER ID</th>
					<th class="col4">RECEIVER NAME</th>
					<th class="col5">AMOUNT</th>
					<th class="col5">TRANSACTION TIME</th>
				</tr>
				<?php
				while ($row5 = $result5->fetch_assoc()) {
				?>
					<tr>
						<td class="disp"><?php echo $row5["SENDER_ID"] ?></td>
						<td class="disp"><?php echo $row5["SENDER_NAME"] ?></td>
						<td class="disp"><?php echo $row5["RECEIVER_ID"] ?></td>
						<td class="disp"><?php echo $row5["RECEIVER_NAME"] ?></td>
						<td class="disp"><?php echo $row5["AMOUNT"] ?></td>
						<td class="disp"><?php echo $row5["TRANSACTION_TIME"] ?></td>
					<?php } ?>
			</table>
		<?php
		} else {
			echo "0 results";
		}
		mysqli_close($conn);
		?>
	</main>
</body>

</html>