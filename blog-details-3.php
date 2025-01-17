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

                <li class="nav-item active"><a class="nav-link" href="blog.php">Blog</a></li>

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
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><i class="fa fa-user"></i> Kimberli Lowe-MacAuley &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> 11/04/2024 22:30   &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 814 </h4>
              <h2>How to Find High-Paying Entry-Level Jobs</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Understanding Entry-Level Jobs</h2>
              </div>
            </div>

            <div class="col-md-8">
                <p>When you’re new to an industry due to a career change or a recent degree, you’re likely going to be starting on the first step of your career ladder. These roles can help you gain the skills you need to build a successful career long-term.<br>

                <br>

                Gaining on-the-job experience helps you build confidence and credibility in ways that a classroom setting can’t fully develop. Requiring minimal professional work experience, entry-level jobs are perfect for industry newcomers. Oftentimes, you’ll see these roles listed with titles that begin with “junior” or “assistant.”</p>

                <br>

                <h5>What Is Considered a High-Paying, Entry-Level Job?</h5>

                <br><br>

                <p>A high-paying, entry-level job offers a salary close to or higher than the median wage for all occupations in the U.S. without requiring prior experience. Some of these jobs may not require a four-year college degree but focus on reasonable on-the-job training requirements and quicker-than-average growth potential.<br><br>

                  <big><b>1. Accounting & Finance Jobs.</b></big> <br>
                  The financial sector offers a wide range of high-paying, entry-level positions, including entry-level accounting, banking, and bookkeeping jobs. To secure a job in the accounting industry, you’ll typically need a bachelor’s degree in finance or economics, and in some cases, professional certifications.<br><br>


                  <big><b>2. Administrative Jobs.</b></big> <br>
                  Administrative roles, such as virtual assistants and executive assistants, play a crucial role in the smooth functioning of businesses and organizations. These positions involve a variety of administrative tasks. Roles vary significantly from industry to industry and even within the same organization.<br><br>

                  <big><b>3. Computer & IT Jobs.</big></b> <br>
                  Computer and IT industries offer some of the highest-paying entry-level jobs, such as database administration, computer security, and technical support jobs. To land a job in one of these fields, you’ll typically need a bachelor’s degree in a related area, such as computer science or knowledge of specific coding languages, along with some experience in relevant projects.<br><br>

                  <big><b>4. Customer Service Jobs.</b></big> <br>
                  Customer service and support roles, such as entry-level customer service representatives, travel consultants, and call center specialists, offer high-paying, entry-level opportunities for those with excellent people skills and the ability to adapt to various situations.<br><br>

                  <big><b>5. Marketing Jobs.</b></big> <br>
                  In the world of marketing and content creation, you’ll find a variety of high-paying, entry-level roles, such as copywriters, email marketing specialists, social media specialists, and marketing assistants. These positions require creativity, excellent communication skills, and the ability to adapt to the ever-changing digital landscape.<br><br>

                  <big><b>6. Software Development Jobs.</b></big> <br>
                  In the world of tech and software development, high-paying, entry-level positions, such as entry-level data analysts,  data scientists, and Java developers, are in high demand. Data scientists are responsible for organizing, analyzing, and interpreting data to gain insights and make informed decisions.<br></p>
            </div>

            <div class="col-md-4">
              <div class="left-content">
                <h4>Finding Jobs That Pay Well With No Experience.</h4>

                <br>
                
                <p>Launching a new career can feel daunting regardless of which path you take to get to the starting point. <br><br> You might hesitate to make a transition you feel is going to limit your financial resources due to a low-paying, entry-level role!</p>
                
                <p>Many professions have entry-level positions that can meet your financial and flexibility needs!</p>
              </div>
            </div>
        </div>

        <br>
        
        <div>
          <img src="assets/images/blog-image-fullscren-1-1920x700.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Leave a Comment</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
            <form action="save_comment.php" method="post" style="width: 70%; margin: auto;">
        <textarea name="message" placeholder="Your comment" style="width: 100%; padding: 15px; margin: 10px 0; box-sizing: border-box; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; height: 150px;"></textarea>
        <button type="submit" style="background-color: #F44336; color: white; border: none; padding: 15px 30px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 10px 0; cursor: pointer; border-radius: 4px;">Submit</button>
    </form>
            </div>
          </div>

          <div class="col-md-4">
              <div class="left-content">

                <p>"Welcome to Job-A-Licious, where career aspirations meet their perfect match! At Job-A-Licious, we specialize in connecting talented individuals with exciting career opportunities across a multitude of industries. Whether you're a seasoned professional seeking new challenges or a fresh graduate eager to dive into the workforce, we're here to make your job search a deliciously rewarding experience. Join us on a journey where every job is not just fulfilling but downright delightful!".</p>

                <br> 

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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="false">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>