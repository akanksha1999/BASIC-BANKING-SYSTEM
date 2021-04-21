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
    <?php include "/css/styles1.css" ?>
  </style>
</head>
<body>
  <?php
  $conn = mysqli_connect('localhost', 'id16644100_akanksha', 'Ganesha1999@', 'id16644100_schema1', '3306');
  if ($conn) {
    echo "connection successful";
  } else {
    echo "failed to connect to mysql";
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
  $query = "SELECT * FROM `accounts` WHERE 1 ORDER BY ID";
  $result = mysqli_query($conn, $query);
  if ($result) {
    echo "select query executed successfully";
  }
  if (!empty($result) && $result->num_rows > 0) {
  ?>
    <h1 class="hdtop">ACCOUNT HOLDERS</h1>
    <table class="tb">
      <tr class="tprow">
        <th class='col1'>ID</th>
        <th class="col2">NAME</th>
        <th class="col3">EMAIL</th>
        <th class="col4">CURRENT BALANCE</th>
        <th class="col5">DETAILS</th>
      </tr>
      <?php
      while ($row = $result->fetch_assoc()) {
      ?>
        <form action="userAccount.php" method="post">
          <tr>
            <td class="disp"><input class="hideit" name="senderId" value=<?php echo $row["ID"] ?> /><?php echo $row["ID"] ?></td>
            <td class="disp"><input class="hideit" name="senderName" value=<?php echo $row["NAME"] ?> /><?php echo $row["NAME"] ?></td>
            <td class="disp"><input class="hideit" name="email" value=<?php echo $row["EMAIL"] ?> /><?php echo $row["EMAIL"] ?></td>
            <td class="disp"><input class="hideit" name="accountBal" value=<?php echo $row["CURRENT_BALANCE"] ?> /><?php echo "Rs" . " " . $row["CURRENT_BALANCE"] ?></td>
            <td class="disp view"><button type="submit" name="submit" value="Submit"><span>view</span></button></td>
          </tr>
        </form>
      <?php } ?>
    </table>
  <?php
  } else {
    echo "0 results";
  }
  mysqli_close($conn);
  ?>
</body>
</html>