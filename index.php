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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="jobs.php">Jobs</a></li>

                <li class="nav-item"><a class="nav-link" href="about-us.php">About us</a></li>

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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <b>
            <h4 style="font-family: 'Times New Roman', Times, serif;">Find your Relevant Job Today!</h4>
            <h2 style="font-family: 'Times New Roman', Times, serif;"><marquee width="100%" direction="left" behavior="scroll" scrollamount="15">The Future of Work is Here...</marquee></h2></b>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <b>
            <h4 style="font-family: 'Times New Roman', Times, serif;">No More Wait for Job!</h4>
            <h2 style="font-family: 'Times New Roman', Times, serif;"><marquee width="100%" direction="left" behavior="scroll" scrollamount="15">Jobs Tailored to Your Ambitions...</marquee></h2></b>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <b>
            <h4 style="font-family: 'Times New Roman', Times, serif;">All growth depends upon Activity!</h4>
            <h2 style="font-family: 'Times New Roman', Times, serif;"><marquee width="100%" direction="left" behavior="scroll" scrollamount="15">Your Path to Career Success Starts Here...</marquee></h2></b>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products" style="background-color: aliceblue;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <center><h2 style="font-family: 'Times New Roman', Times, serif;"><b><u>Featured Jobs</u></b></h2></center>
              <a href="jobs.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="job-details-home1.php"><img src="assets/images/job-1.jpg" alt=""></a>
              <div class="down-content">
                <a href="job-details-home1.php"><h4>Sales Customer Executive</h4></a>

                <h6>₹60,000</h6>

                <h4><small><i class="fa fa-briefcase"></i> Sales/Marketing Jobs <br> <strong><i class="fa fa-building"></i> PIC Limited</strong></small></h4>

                <small>
                     <strong title="Posted on"><i class="fa fa-calendar"></i> 15-03-2024</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Type"><i class="fa fa-file"></i> Full-Time</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                     <strong title="Location"><i class="fa fa-map-marker"></i> Connaught-Palace,New Delhi</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="job-details-home2.php"><img src="assets/images/job-2.jpg" alt=""></a>
              <div class="down-content">
                <a href="job-details-home2.php"><h4>Senior Data Analyst</h4></a>

                <h6>₹80,000</h6>

                <h4><small><i class="fa fa-briefcase"></i> IT/Technology Jobs <br> <strong><i class="fa fa-building"></i> InflowSis Tech Limited</strong></small></h4>

                <small>
                     <strong title="Posted on"><i class="fa fa-calendar"></i> 12-03-2024</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Type"><i class="fa fa-file"></i> Full-Time</strong> &nbsp;&nbsp;&nbsp;&nbsp;<br>
                     <strong title="Location"><i class="fa fa-map-marker"></i> Sector-18,Noida</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="job-details-home3.php"><img src="assets/images/job-3.jpg" alt=""></a>
              <div class="down-content">
                <a href="job-details-home3.php"><h4>Communication Assistant</h4></a>

                <h6>₹20,000</h6>

                <h4><small><i class="fa fa-briefcase"></i> Communicaton/Consultant Jobs <br> <strong><i class="fa fa-building"></i> Aasmaan Ki Udaan NGO</strong></small></h4>

                <small>
                     <strong title="Posted on"><i class="fa fa-calendar"></i> 10-02-2024</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;<br>
                     <strong title="Location"><i class="fa fa-map-marker"></i> Botanical Garden,New Delhi</strong>
                </small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  
    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <center><h2 style="font-family: 'Times New Roman', Times, serif; color: black;"><b><u>Latest Blog Posts</u></b></h2></center>

              <a href="blog.php">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="blog-details-3.php" class="services-item-image"><img src="assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="blog-details-3.php"><b>20 Companies hiring that don't list a College Degree as a Requirement.</b></a></h4>

                <p style="margin: 0;"> Nikhil Sharma &nbsp;&nbsp;|&nbsp;&nbsp; 12/03/2024 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; Senior Sales Manager
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="blog-details-5.php" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="blog-details-5.php"><b>Great Places to Work: 100+ Companies that have best Environment.</b></a></h4>

                <p style="margin: 0;"> Nabeel Shamsi &nbsp;&nbsp;|&nbsp;&nbsp; 11/03/2024 22:30 &nbsp;&nbsp;|&nbsp;&nbsp; Data Scientist</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="blog-details-4.php" class="services-item-image"><img src="assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="blog-details-4.php"><b>40 Remote Compaines with a 4-day Workweek.</b></a></h4>

                <p style="margin: 0;"> Salman Khan &nbsp;&nbsp;|&nbsp;&nbsp; 10/03/2024 1:30 &nbsp;&nbsp;|&nbsp;&nbsp; HR Manager</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="happy-clients" style="background-color: rgb(214, 236, 237);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <center><h2 style="font-family: 'Times New Roman', Times, serif; color: black;"><b><u>Happy Clients</u></b></h2></center>

              <a href="testimonials.php">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Sanjay Singhania</h4>
                  <p class="n-m"><em>"Job-A-Licious is a great platform finding a relevant job and career growth. <br>Thank You"</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Harshita Tripathi</h4>
                  <p class="n-m"><em>"It is a great platform where you meet your requirements with the possible and most suitable workrole."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Amit Shah</h4>
                  <p class="n-m"><em>"A person need the best and most appropriate workrole for him/her, it;s the most suitable platform for it."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John Moxly</h4>
                  <p class="n-m"><em>"All the managing and process is so simple, that i don't find any difficulty for finding and applying for a job."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Shahid Khan</h4>
                  <p class="n-m"><em>"The best company with the best salary package is to be found here only,<br> Thank you."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Anjali Singh</h4>
                  <p class="n-m"><em>"From so long, i was willing to work as a Fashion Designer and unable to find an appropriate job, but Job-A-Licious helps me to do so."</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features" style="background-color: rgb(244, 233, 218);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <center><h2 style="font-family: 'Times New Roman', Times, serif; color: black;"><b><u>About Us</u></b></h2></center>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p style="color: black; font-family: Verdana, Geneva, Tahoma, sans-serif;"><b>Job-A-Licious</b>is a platform managed by <a href="team.php"> Our Team </a> with a motive that we're dedicated to revolutionizing the job search experience. Our mission is to connect talented individuals with rewarding career opportunities while providing comprehensive support and guidance every step of the way. With a commitment to innovation and excellence, we strive to empower job seekers and employers alike, fostering a dynamic and thriving professional community. Join us on our mission to shape the future of work."</p>
              <ul class="featured-list">
                <li><a href="team.php">"Great Job takes time on Job-A-Licious"<br><b>CEO-Dr Karan Gupta</b></a></li>
                <li><a href="team.php">"All you need is Job-A-Licious"<br><b>Founder-Nabeel Shamsi<b></b></a></li>
                <li><a href="team.php">"Meet your expectations with Job-A-Licious"<br><b>Developer-Abhishek Yadav</b></a></li>
                <li><a href="team.php">"Job Hunt Ends Here – Your Dream Job Awaits!"<br><b>Manager-Bibhav Kumar</b></a></li>
              </ul>
              <a href="about-us.php" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="right-image">
              
              <a href="team.php"><img style="border: 4px solid black;" src="assets/images/about-1-570x350.jpg"></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content" style="background-color: rgb(180, 180, 180);">
              <div class="row">
                <div class="col-md-8">
                  <h4>Have questions, feedback, or inquiries? </h4>
                  <p> We're here to help! Reach out to our dedicated support team for assistance with any aspect of our platform. Whether you're a job seeker looking for guidance or an employer seeking partnership opportunities, we welcome your communication. Your input is invaluable to us as we continuously strive to enhance your experience with <b>Job-A-Licious</b>. Get in touch today and let's start a conversation!"</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.php" class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container"> 
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2024 Developer-CODEWEAVERS</p>
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