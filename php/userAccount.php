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
  <style>
    <?php include "./css/styles1.css" ?>
  </style>
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
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="Accounts.php" target="_parent"><span class="glyphicon glyphicon-user"></span> Account Holders</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <?php
  $id = mysqli_real_escape_string($conn, $_POST['senderId']);
  $query = "SELECT * FROM `accounts` where ID=" . $id;
  $result = mysqli_query($conn, $query);
  if ($result->num_rows > 0) {
  ?>
    <h1 class="hdtop">ACCOUNT HOLDER DETAILS</h1>
    <form action="history.php" method="post">
      <table class="tb">
        <tr class="tprow">
          <th class='col1'>ID</th>
          <th class="col2">NAME</th>
          <th class="col3">EMAIL</th>
          <th class="col4">CURRENT BALANCE</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
          <tr>
            <td class="disp1"><input class="hideit" name="sender_Id" value=<?php echo $row["ID"] ?> /><?php echo $row["ID"] ?></td>
            <td class="disp1"><?php echo $row["NAME"] ?></td>
            <td class="disp1"><?php echo $row["EMAIL"] ?></td>
            <td class="disp1"><?php echo "Rs" . " " . $row["CURRENT_BALANCE"] ?></td>
          </tr>
        <?php } ?>
      </table>

    <?php
  } else {
    echo "0 results";
  }
    ?>
    <div class="transfersection">
      <button type="submit" class="transfer">Transfer Money</button>
    </div>
    <label class="selectreceiverhead">SELECT &nbsp; RECEIVER:</label>
    <br>
    <select name="receiver_Id" id="receiver">
      <?php
      $query1 = "SELECT * FROM `accounts` where ID !=" . $id;
      $result1 = mysqli_query($conn, $query1);
      if ($result1->num_rows > 0) {
        while ($row1 = $result1->fetch_assoc()) {
      ?>
          <option value=<?php echo $row1["ID"] ?>>&nbsp;ID:<?php echo $row1["ID"] ?> | &nbsp;&nbsp;<?php echo $row1["NAME"] ?></option>
      <?php
        }
      }
      ?>
    </select>
    <br><br>
    <input type="number" pattern="^[0-9]+$" class="form-control inn" id="amountTransfered" required="" autocomplete="off" placeholder="₹  Enter Amount" name="amount">
    <div class="container">
      <button type="submit" class="confirmpayment" name="fromUser" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" value=<?php echo $id ?>><span>Confirm Payment</span></button>
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="alert alert-success alert-dismissible">
            <a class="close" data-dismiss="modal" aria-label="close">&times;</a>
            Transaction Successfull !!!
          </div>
        </div>
      </div>
    </div>
    </form>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>