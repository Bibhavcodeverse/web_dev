<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="NABEEL SHAMSI">
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

                <li class="nav-item active"><a class="nav-link" href="about-us.php">About us</a></li>

                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="team.php">Team</a>
                      <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                      <a class="dropdown-item" href="terms.php">Terms</a>
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
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-1.avif);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>OUR INTRODUCTION! </h4>
              <h2>GET TO KNOW OUR company..</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Our Website Job-A-Licious!</h2>
              <p>Welcome to Job-A-Licious, where we're dedicated to revolutionizing the job search experience.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <a href="team.php">
              <img src="assets/images/about-1-570x350.jpg" alt=""></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Our Mission</h4>
              <p>At Job-A-Licious, our mission is simple: to connect talented individuals with rewarding career opportunities. We believe that finding the perfect job should be an exciting journey, not a daunting task. That's why we've created a platform that makes job searching deliciously delightful.</p>
              
              <h4>Our Vision</h4>
              <p>We envision a world where everyone can pursue a career that they're passionate about. By leveraging the latest technology and innovation, we strive to make the job search process more efficient, transparent, and enjoyable for job seekers and employers alike.</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="motive">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What Sets Us Apart</h2>
            </div>

            <h5>Personalized Approach</h5>

            <p>We understand that every individual is unique, which is why we tailor our services to meet your specific needs and preferences.</p><br>

            <h5>Expertise</h5>

            <p>Our team consists of industry experts who are committed to helping you navigate the job market with confidence and ease.</p><br>

            <h5>Innovation</h5>

            <p>We're constantly exploring new ways to enhance the job search experience through technology and innovation, ensuring that you have access to the latest tools and resources.</p><br>

            <h5>Supportive Community</h5>

            <p> Join our community of job seekers and employers who share your passion for career growth and development. Whether you're a seasoned professional or just starting out, you'll find support and encouragement every step of the way.</p><br>
          </div>
        </div>
      </div>
    </div>

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Who Makes Us Better!</h2>
            </div>

            <a href="team.php"><h5>Our Team</h5></a>

            <p>Behind Job-A-Licious is a team of dedicated professionals who are passionate about helping you achieve your career goals. From our co-founders to our product specialists, each member of our team is committed to providing you with the highest level of service and support.<br><br>Ready to take the next step in your career journey? Contact us today to learn more about how Job-A-Licious can help you find your dream job.</p>

            <p> Our values of integrity, innovation, empowerment, diversity, and customer-centricity drive everything we do. From providing personalized job matching services to fostering an inclusive community where everyone feels valued, we are committed to making the job search process not only efficient but also enjoyable.<br><br> Over the years, we've received industry recognition for our innovative solutions and have helped countless individuals embark on fulfilling career journeys. As we look to the future, we remain focused on continuous improvement, listening to our users' feedback, and expanding our services to better serve our growing community. Join us on this exciting journey and discover how Job-A-Licious can help you unlock your full career potential."</p>
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
