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
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/banner-9.jpeg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
            <h4>Catch Up with Our Blog</h4>
              <h2> It's Just a Click Away!</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details.php" class="services-item-image"><img src="assets/images/blog-13.jpeg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details.php">Top Jobs That Require No Experience and How to Land One</a></h4>

                    <p style="margin: 0;"> Kimberli Lowe-MacAuley &nbsp;&nbsp;|&nbsp;&nbsp; 12/04/2024 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 567</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details-2.php" class="services-item-image"><img src="assets/images/blog-14.jpeg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details-2.php">15 Great Work-From-Home Jobs for Moms and Dads</a></h4>

                    <p style="margin: 0;"> Jessica Howington &nbsp;&nbsp;|&nbsp;&nbsp; 12/04/2024 09:30 &nbsp;&nbsp;|&nbsp;&nbsp; 3.9k </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details-3.php" class="services-item-image"><img src="assets/images/blog-15.jpeg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details-3.php">How to Find High-Paying Entry-Level Jobs</a></h4>

                    <p style="margin: 0;"> Kimberli Lowe-MacAuley &nbsp;&nbsp;|&nbsp;&nbsp; 11/04/2024 22:30 &nbsp;&nbsp;|&nbsp;&nbsp; 814</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details-4.php" class="services-item-image"><img src="assets/images/blog-16.jpeg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details-4.php">50 Real Ways to Make Money Online From Home</a></h4>

                    <p style="margin: 0;"> Kimberli Lowe-MacAuley &nbsp;&nbsp;|&nbsp;&nbsp; 11/04/2024 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 1.2k </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details-5.php" class="services-item-image"><img src="assets/images/blog-17.jpeg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details-5.php">How to Conquer Imposter Syndrome to Find Success In Your Job Search and Career</a></h4>

                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 10/04/2024 80:30 &nbsp;&nbsp;|&nbsp;&nbsp; 916 </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details-6.php" class="services-item-image"><img src="assets/images/blog-18.jpeg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details-6.php">10 Fun, Uplifting Remote Jobs That Are Hiring</a></h4>

                    <p style="margin: 0;"> Jessica Howington &nbsp;&nbsp;|&nbsp;&nbsp; 02/04/2024 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 6.4k </p>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <ul class="pages">
                  <li><a href="blog.php">1</a></li>
                  <li><a href="blog-2.php">2</a></li>
                  <li class="active"><a href="blog-3.php">3</a></li>
                  <li><a href="blog-4.php">4</a></li>
                  <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <h5>Some Trending Blogs</h5>
            </div>

            <p><a href="blog-details.php">Top Jobs That Require No Experience and How to Land One.</a></p>
            <p><a href="blog-details-3.php">How to Find High-Paying Entry-Level Jobs.</a></p>
            <p><a href="blog-details-5.php">15 Great Work-From-Home Jobs for Moms and Dads.</a></p>
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