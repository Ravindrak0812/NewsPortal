<?php
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>News Portal | Contact Us</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>


  <?php include('includes/header.php'); ?>

  <div class="container">

    <?php 
    $pagetype = 'contactus';
    $query = mysqli_query($con, "select PageTitle, Description from tblpages where PageName='$pagetype'");
    while ($row = mysqli_fetch_array($query)) {
    ?>

    <!-- Page Title -->
    <h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle'])?></h1>

    <!-- Contact Details and Google Map -->
    <div class="row">
      <div class="col-lg-12 mb-4">
      <b><marquee style="color:red" behavior="" direction="">Contact Details</marquee></b> 
        <h3>Contact Details</h3>
        <p>
          Jalandhar<br>Punjab, India<br>
        </p>
        <p>
          <abbr title="Phone">Phone No:</abbr> 9115344392
        </p>
        <p>
          <abbr title="Email">Email:</abbr> <a href="mailto:ravindrak@gmail.com">ravindrak@gmail.com</a>
        </p>
        <p>
          <abbr title="Hours">Hours:</abbr> Monday - Friday: 9:00 AM to 5:00 PM
        </p>

        <!-- Embedded Google Map -->
        <iframe 
            width="100%" 
            height="300px" 
            frameborder="0" 
            scrolling="no" 
            marginheight="0" 
            marginwidth="0"
            src="https://maps.google.com/maps?q=Jalandhar,%20Punjab,%20India&output=embed">
        </iframe>
      </div>
    </div>

    <?php } ?>

  </div>

  <?php include('includes/footer.php'); ?>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
