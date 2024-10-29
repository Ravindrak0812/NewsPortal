<?php
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="About News Portal - Learn more about us">
  <meta name="author" content="">

  <title>News Portal | About Us</title>


  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <?php include('includes/header.php'); ?>

  <div class="container">

    <?php 
    $pagetype = 'aboutus';
    $query = mysqli_query($con, "SELECT PageTitle, Description FROM tblpages WHERE PageName='$pagetype'");
    while ($row = mysqli_fetch_array($query)) {
    ?>


    <h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle']); ?></h1>
    <b><marquee style="color:red" behavior="" direction="">About US  </marquee></b> 
  
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

    <div class="row">
      <div class="col-lg-12">
        <p><?php echo nl2br($row['Description']); ?></p>
      </div>
    </div>

    <?php } ?>

  </div>


  <?php include('includes/footer.php'); ?>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
