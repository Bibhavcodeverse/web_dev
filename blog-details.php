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
              <h4><i class="fa fa-user"></i>  Kimberli Lowe-MacAuley &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> 12/04/2024 10:30   &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 567</h4>
              <h2>Top Jobs That Require No Experience and How to Land One</h2>
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
                <h2>What Are “No Experience Jobs”?</h2>
              </div>
            </div>

            <div class="col-md-8">
                <p>The term “entry-level” means different things in different industries. And sometimes, the meaning can vary between recruiters. Finding an entry-level role can be frustrating until you understand which ones align with your experience level.<br>

                <br>

                Let’s unpack that a bit. Some employers use “entry-level” to describe an entry point to a career. That entry point requires foundational knowledge and a bit of experience. Then, there are the “no experience” roles that might align better with your expectations—jobs that actually mean no industry-specific knowledge or skills are required.</p>

                <br>

                <h5>6 Top Jobs With No Experience Needed.</h5>

                <br><br>

                <p>The following industries are excellent for professionals looking for full-time or part-time jobs with no experience.<br><br>

                  <big><b>1. Administrative Jobs.</b></big> <br>
                  Many administrative positions offer significant flexibility. Policies vary from company to company, but an administrative job’s flexibility might let you set up shop anywhere—on the sidelines of your child’s soccer game or at the local coffee house. An added advantage? The skills you’ll acquire are transferable and will pave the way for career growth.<br><br>


                  <big><b>2. Call Center Jobs.</b></big> <br>
                  Call center workers likely need to commit to specific working hours to help companies ensure adequate phone coverage throughout operating hours. Most companies also require a quiet, distraction-free work environment to provide an excellent customer experience. With robust potential for career growth, you could progress from problem-solving customer issues to leading a team or managing quality assurance.<br><br>
                  <big><b>3. Customer Service Jobs.</big></b> <br>
                  The beauty of customer service roles lies in their flexibility. Many companies support traveling or working overseas. You’ll have the chance to fit work into your life, rather than adjusting your life around work. Throughout your career, cultivate key skills, like problem-solving and communication, and leverage them to move into leadership roles down the road.<br><br>

                  <big><b>4. Data Entry Jobs.</b></big> <br>
                  Data entry roles often offer flexible schedules, and whether you want to balance side gig or pursue a full-time job, growth opportunities are abundant. Data entry jobs sharpen your attention to detail and proficiency in data management systems, creating potential progression into data analysis roles.<br><br>

                  <big><b>5. Sales Jobs.</b></big> <br>
                  While the sales industry has traditionally included some roles that support remote work, the growth in ecommerce has made working outside of a traditional office even more prevalent. When you need to work around your other commitments, sales should get a second glance. Hone critical skills, such as negotiation, communication, and customer engagement, for managerial or executive roles.<br><br>

                  <big><b>6. Writing Jobs.</b></big> <br>
                  These roles often support work-from-anywhere opportunities, which is perfect when you’re seeking inspiration beyond the office. As you level up your skills, you might grow into editing, content management, or publishing roles.<br></p>
            </div>

            <div class="col-md-4">
              <div class="left-content">
                <h4>Finding Your Next Job With No Experience.</h4>

                <br>
                
                <p>Don’t allow a lack of direct experience hold you back from a better work situation. You bring valuable experience to the table with your nontraditional background. <br><br> Your fresh perspective might be exactly what a hiring manager is looking for. Give them a chance to see how you can fit into their team.</p>
                
                <p>If you're ready to launch your search for a job with no experience requirements, we can help!</p>
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
