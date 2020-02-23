<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../assets/logo.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/animate.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">

    <title>St. James The Greater Parish </title>
    <style type="text/css">
    a, u {
    text-decoration: none;
    }
    </style>
  </head>
  <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top " style="background-color: #f1f1f1" >
        <a class="navbar-brand" href="#"><img src="../assets/logo.jpg" style="border-radius: 90%" width="50px" height="30px"> <span class="navbar-text">St. James The Greater Parish - Integrated Management System</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            
            
          </ul>
          <div class="form-inline mt-2 mt-md-0">
            <span class="navbar-text"><i class="fa fa-user-circle"></i> <?php echo $_SESSION['username']; ?></span>
            <a href="../logout.php" class="navbar-text nav-link"><i class="fa fa-sign-in"></i> Logout</a>
          </div>
        </div>
      </nav>
</header>
<body  style="background-color: #f1f1f1">

<div class="row mt-5">
  <div class="col-md-12 mx-auto mt-4">
    <div class="card">
      <nav class="nav">
        <a class="nav-link active disabled" href="../dashboard/index.php">Overview</a>
        <a class="nav-link " href="../marriage/index.php">Marriage Records</a>
        <a class="nav-link" href="../baptism/index.php">Baptism Records</a>
        <a class="nav-link" href="../death/index.php">Death Records</a>
        <a class="nav-link " href="../confirmation/index.php" >Confirmation Records</a>
        <a class="nav-link text-right" href="../accounts/index.php" > Accounts</a>
      </nav>

    </div>
  </div>
</div>