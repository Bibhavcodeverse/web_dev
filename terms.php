<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>JOB-A-LICIOUS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>job-<em>a-licious</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="jobs.php">Jobs</a></li>

                <li class="nav-item"><a class="nav-link" href="about-us.php">About us</a></li>

                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="team.php">Team</a>
                      <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                      <a class="dropdown-item active" href="terms.php">Terms</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <li class="nav-item"><?php if (isset($_SESSION['username'])) {  ?>
                  <div class="logout">
                    <a href="logout.php" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a>
                  </div>
                  <?php } 
                  else { ?>
                    <a id = "login"  href="register.php" class="nav-link"><i class="fa fa-sign-in"></i> Login</a>
                  <?php } ?>
                  
                </li>
                  
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/banner-3.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Terms and Conditions! </h4>
              <h2>Read Them – They Come in Handy!</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Terms and Conditions</h2><br>
              <p>Welcome to Job-A-Licious! These terms and conditions govern your use of our website and services. By accessing or using our website, you agree to be bound by these terms and conditions. Please read them carefully.</p>
            </div>

            <h5>Acceptance of Terms</h5>

            <p>By using our website, you agree to abide by these terms and conditions. If you do not agree with any of these terms, please do not use our website.</p>

            <br>
            <br>

            <h5>Accuracy of Information</h5>

            <p>You agree to provide accurate and complete information when using our services. We reserve the right to suspend or terminate your account if we believe that the information provided is inaccurate or incomplete.</p>
            
            <br>
            <br>

            <h5>Intellectual Property</h5>

            <p>All content provided on our website, including text, graphics, logos, and images, is the property of Job-A-Licious and is protected by copyright laws. You may not reproduce, distribute, or use any content from our website without our prior written consent.</p>
        
            <br>
            <br>

            <h5>Use of Services</h5>

            <p>Our services are intended for personal, non-commercial use only. You agree not to use our website for any unlawful or unauthorized purpose.</p>
            
            <br>
            <br>

            <h5>Privacy Policy</h5>

            <p>Your use of our website is also governed by our Privacy Policy, which outlines how we collect, use, and disclose your personal information. Please review our Privacy Policy here.</p>

            <br>
            <br>
            
            <h5>Limitation of Liability</h5>

            <p>Job-A-Licious shall not be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in any way connected with the use of our website.</p>

            <br>
            <br>
            
            <h5>Modification of Terms</h5>

            <p>We reserve the right to modify or update these terms and conditions at any time without prior notice. It is your responsibility to review these terms periodically for changes.</p>

            <br>
            <br>
            
            <h5>Termination of Services</h5>

            <p>Job-A-Licious reserves the right to terminate or suspend your access to our website at any time for any reason without prior notice.</p>

            <br>
            <br>
            
            <h5>Governing Law</h5>

            <p>These terms and conditions shall be governed by and construed in accordance with the laws of India/Delhi Act. Any disputes arising out of or in connection with these terms shall be subject to the exclusive jurisdiction of the courts of Karkarduma Court.</p>

            <br>
            <br>
            
            <h5>Contact Information</h5>

            <p>If you have any questions or concerns about these terms and conditions, please contact us at 000998654789/nblshms695@gmail.com.</p>

          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2024 Developer-TEAM CODEWEAVERS</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>

  </body>

</html>
