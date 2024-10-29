
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="padding-right:200px; margin:10px" class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
                <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.php">About</a>
            </li>
                 <li class="nav-item">
              <a class="nav-link" href="index.php">News</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="contact-us.php">Contact us</a>
            </li>
    <li class="nav-item">
              <a class="nav-link" href="admin/">Admin</a>
            </li>
  
          </ul>
        </div>
      </div>
    
      <?php if (isset($_SESSION['user'])): ?>
            <div class="user-info">
                <span style="color:white">Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</span>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        <?php else: ?>
            <div class="login-register">
                <a style="padding-right:10px "  href="login.php">Login</a>
                <a href="signup.php">Signup</a>
            </div>
        <?php endif; ?>
        
    </nav>
  