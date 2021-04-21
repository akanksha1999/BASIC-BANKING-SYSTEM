<!DOCTYPE html>
<html lang="en">

<head>
  <title>Banking App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="icon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Titillium+Web&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b8552f8654.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet " href="./css/styles.css">
  <style>
    <?php include "./css/styles.css" ?>
  </style>
</head>

<body>
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
    <div id="Home" class="wraper">
      <h1><span class="auto-input"></span></h1>
    </div>
    <script src="typed.js"></script>
    <script>
      var typed = new Typed('.auto-input', {
        strings: ['Welcome to TSF Bank'],
        typeSpeed: 100,
        backSpeed: 50,
        loop: true
      });
    </script>
  </main>
</body>

</html>