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
              <h4><i class="fa fa-user"></i>   Jessica Howington &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> 12/04/2024 09:30   &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 3.4k </h4>
              <h2>15 Great Work-From-Home Jobs for Moms and Dads</h2>
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
                <h2>Great Work-From-Home Jobs</h2>
              </div>
            </div>

            <div class="col-md-8">
                <p>The desire to have a career while being available for children can parlay into seeking an online job that melds a working parent’s schedule with the financial needs of their family. Looking for stay-at-home jobs for moms and dads can be the ideal way to meet obligations at home and in a career.<br>

                <br>

                According to FlexJobs’ survey of working parents, the ability to work flexibly is one of the top contributors to a healthy work-life balance and can be life-changing. The FlexJobs database lists thousands of work-from-home jobs that offer parents the ability to work comfortably from a home office.</p>

                <br>

                <h5>Stay-at-Home Jobs for Moms and Dads.</h5>

                <br><br>

                <p>The following jobs are excellent for old-age groups looking for full-time or part-time jobs with no or some experience.<br><br>

                  <big><b>1. Accounting Clerk.</b></big> <br>
                  Accounting clerks most often maintain financial records, reconcile bank statements, prepare reports, process transactions, and provide clerical support to the accounting department. Bookkeeping, data entry, and word processing skills are often required. Accounting clerks can often find remote roles that may be full-time or even freelance.<br><br>


                  <big><b>2. Customer Service Representative.</b></big> <br>
                  Workers who can take phone calls, respond to inquiries, provide customers with assistance, and complete administrative tasks will be well qualified for this type of role. Call center specialists and chat agents primarily communicate with customers via live chat, phone, and email, so they can work from home with the correct setup and equipment.<br><br>
                  <big><b>3. Data Entry Specialist.</big></b> <br>
                  One of the more popular jobs for stay-at-home moms and dads, data entry jobs can be highly flexible roles that allow you to manage your daily routine with your children by working while they sleep or are at school. Some employers hiring for data entry jobs may require specialized data entry certification and training, but essential skills like typing and sharp attention to detail are skills that many parents already have.<br><br>

                  <big><b>4. Graphic Designer.</b></big> <br>
                  Digital and visual designers can find great roles that allow the job to be done completely from home and often on a flexible schedule. As a graphic designer, you might create logos or ads, help design the look and feel of a website, or create signage, leaflets, or other informational materials.<br><br>

                  <big><b>5. Health Coach.</b></big> <br>
                  Many stay-at-home parents work diligently on their own fitness to stay in shape. Why not use those skills and share them with others? Remote roles in fitness and mental health can be an ideal way to help others live a healthier lifestyle while keeping your own health journey on track.<br><br>

                  <big><b>6. Online Teacher / Tutor.</b></big> <br>
                  As a parent, you’ve likely taught your child to read, tutored them through math assignments, and taught them all of their life skills. Education is most likely part of your daily routine, so why not convert those skills to earn an income working with kids?<br></p>
            </div>

            <div class="col-md-4">
              <div class="left-content">
                <h4>Use Job-A-Licious to Find Great Stay-at-Home Mom Jobs and Stay-at-Home Dad Jobs.</h4>

                <br>
                
                <p>Finding jobs you can do from home can be life-changing for parents. <br><br> Browse top resume examples by job, industry, and experience level from MyPerfectResume, and let FlexJobs support you along the way!</p>
                
                <p>From exclusive access to jobs in over 50 career categories to various perks, members get more, we can help!</p>
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