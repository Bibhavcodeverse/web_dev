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

                <li class="nav-item active"><a class="nav-link" href="jobs.php">Jobs</a></li>

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
                  <?php } ?></li>
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
              <h4>Looking for a job?  </h4>
              <h2>You'll find it here!</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          
            <div class="row">
              <div class="col-md-6">
                <div class="product-item">
                  <a href="job-details.php"><img src="assets/images/sales-1.jpeg" alt=""></a>
                  <div class="down-content">
                    <a href="job-details.php"><h4>Sales Executive</h4></a>

                    <h6>₹50,000 - ₹146,000 monthly*</h6>

                    <h4><small><i class="fa fa-briefcase"></i> Sales / Marketing Jobs <br> <strong><i class="fa fa-building"></i> Adgi Security and Facility &nbsp;&nbsp;&nbsp;&nbsp; Services</strong></small></h4>

                    <small>
                         <strong title="Posted on"><i class="fa fa-calendar"></i> 15-04-2024</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                         <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;<br>
                         <strong title="Location"><i class="fa fa-map-marker"></i> Karol Bagh, New Delhi</strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="job-details-2.php"><img src="assets/images/sales-2.jpeg" alt=""></a>
                  <div class="down-content">
                    <a href="job-details-2.php"><h4>Python Developer</h4></a>

                    <h6>₹30,000 - ₹120,000 monthly</h6>

                    <h4><small><i class="fa fa-briefcase"></i> Language / Developer Jobs <br> <strong><i class="fa fa-building"></i> Odudumo Solutions (Opc) Private Limited</strong></small></h4>

                    <small>
                         <strong title="Posted on"><i class="fa fa-calendar"></i> 14-04-2024</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                         <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;<br>
                         <strong title="Location"><i class="fa fa-map-marker"></i> Greater Noida</strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="job-details-3.php"><img src="assets/images/sales-3.jpeg" alt=""></a>
                  <div class="down-content">
                    <a href="job-details-3.php"><h4>Digital Marketing Manager</h4></a>

                    <h6>₹50,000 - ₹100,000 monthly</h6>

                    <h4><small><i class="fa fa-briefcase"></i> Technical / IT Jobs <br> <strong><i class="fa fa-building"></i> Shubh Labh Developers And Infrastructure Private Limited</strong></small></h4>

                    <small>
                         <strong title="Posted on"><i class="fa fa-calendar"></i> 12-04-2024</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                         <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;<br>
                         <strong title="Location"><i class="fa fa-map-marker"></i> Lakhmi Nagar, Delhi</strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="job-details-4.php"><img src="assets/images/sales-4.jpeg" alt=""></a>
                  <div class="down-content">
                    <a href="job-details-4.php"><h4>Accounts and Admin Executive</h4></a>

                    <h6>₹30,000 - ₹100,000 monthly</h6>

                    <h4><small><i class="fa fa-briefcase"></i> Accounting / Finance Jobs <br> <strong><i class="fa fa-building"></i> Fedders Electric And Engineering Limited</strong></small></h4>

                    <small>
                         <strong title="Posted on"><i class="fa fa-calendar"></i> 10-03-2024</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                         <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;<br>
                         <strong title="Location"><i class="fa fa-map-marker"></i> Raj NAgar, Ghaziabad </strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="job-details-5.php"><img src="assets/images/sales-5.jpeg" alt=""></a>
                  <div class="down-content">
                    <a href="job-details-5.php"><h4>Sales Engineer</h4></a>

                    <h6>₹50,000 - ₹102,000 monthly*</h6>

                    <h4><small><i class="fa fa-briefcase"></i> Sales / Management Jobs <br> <strong><i class="fa fa-building"></i> Exilon Industries</strong></small></h4>

                    <small>
                         <strong title="Posted on"><i class="fa fa-calendar"></i> 07-03-2024</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                         <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;<br>
                         <strong title="Location"><i class="fa fa-map-marker"></i> Knowledge Park 1, Greater Noida </strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="job-details-6.php"><img src="assets/images/sales-6.jpeg" alt=""></a>
                  <div class="down-content">
                    <a href="job-details-6.php"><h4>Brand Ambassador</h4></a>

                    <h6>₹30,000 - ₹100,000 monthly</h6>

                    <h4><small><i class="fa fa-briefcase"></i> Fashion / Model Jobs <br> <strong><i class="fa fa-building"></i> Bharat Eat</strong></small></h4>

                    <small>
                         <strong title="Posted on"><i class="fa fa-calendar"></i> 15-02-2024</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                         <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;<br>
                         <strong title="Location"><i class="fa fa-map-marker"></i> Burari, New Delhi</strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <ul class="pages">
                  <li class="active"><a href="jobs.php">1</a></li>
                  <li><a href="jobs-2.php">2</a></li>
                  <li><a href="jobs-3.php">3</a></li>
                  <li><a href="jobs-4.php">4</a></li>
                  <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
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
