<?php 
if(isset($_POST['submit'])){
    $to = "codefined@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $phone . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
//    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
	sleep(2);
	unset($_POST);
	header("Location: index.php");
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>

<html class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Codefined</title>
<meta name="keywords" content="web web design applications apps mobile iOS android django python java javascript jquery ruby asp.net">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Sans">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
<!-- Bootstrap and Font Awesome css -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- owl carousel css -->
<link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet" type="text/css">
<!-- Custom stylesheet - for your changes -->
<link href="css/custom.css" rel="stylesheet" type="text/css"><!-- CSS Animations -->
<link href="css/sweetalert.css" rel="stylesheet" type="text/css"><!-- CSS Animations -->
<link href="css/animate.css" rel="stylesheet" type="text/css"><!--contact form -->
<link rel="shortcut icon" href="img/cdlogo.png"><!-- Mordernizr -->

<script src="js/modernizr-2.6.2.min.js" type="text/javascript"> </script><!-- Responsivity for older IE -->
<script src="js/sweetalert.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body data-spy="scroll" data-target="#navigation" data-offset="120">
<!-- *** NAVBAR ***
	_________________________________________________________ -->

<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
<div class="container">
  <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class= "sr-only">Toggle navigation</span></button> 
	<a class="navbar-brand" href= "#"><img style="max-height: 100px; margin-top: -38px;" src="img/cdlogo.png"></a>
  </div>

  <div class="navbar-collapse collapse" id="navigation">
	<ul class="nav navbar-nav navbar-right">
	  <li class="active"><a href="#intro">Intro</a></li>

	  <li><a href="#section1">Why Codefined</a></li>

	  <li><a href="#section2">Services</a></li>
	  <li><a href="#section3">Our Work</a></li>

	  <li><a href="#section4">Contact</a></li>
	</ul>
  </div><!--/.nav-collapse -->
</div>
</div><!-- /#navbar -->
<!-- *** NAVBAR END *** -->

<!-- *** INTRO IMAGE ***
	_________________________________________________________ -->

<div id="intro" class="section">
  <div class="item">
	<div class="container">
	  <div class="row">
		<h1 data-animate="fadeInDown"><br></h1>
		  <li><a href="#section4" class="btn btn-cd btn-lg">Let the coding begin</a></li>
	  </div>
	</div>
  </div>
</div><!-- *** INTRO IMAGE END *** -->
<!-- *** SERVICES ***
	_________________________________________________________ -->

<div class="section" id="section1">
  <div class="container">
	<div class="col-md-12">
	  <h2 class="title" data-animate="fadeInDown">Why Codefined?</h2>

	  <p class="lead">Codefined provides an intuitive platform to visualize your dreams becoming a reality. Our
	  desire for precision and enduring passion without ever compromising work standards fuels our coding enigma.
	  We as a dedicated and dependable entity ensure utmost pleasing customer satisfaction with achieving the
	  targeted goals through our in-depth knowledge and skills.</p>

	  <div class="row" id="aman-l">
		<div class="col-md-3 hidden-sm hidden-xs" data-animate="fadeInUpBig"><img src="img/learn.png" class=
		"img-responsive" alt="Learn_to_Evolve"></div>

		<div class="col-md-3 hidden-sm hidden-xs" data-animate="fadeInUpBig"><img src="img/design.png" class=
		"img-responsive" alt="Learn_to_Evolve"></div>

		<div class="col-md-3 hidden-sm hidden-xs" data-animate="fadeInUpBig"><img src="img/code1.png" class=
		"img-responsive" alt="Learn_to_Evolve"></div>

		<div class="col-md-3 hidden-sm hidden-xs" data-animate="fadeInUpBig"><img src="img/evolve.png" class=
		"img-responsive" alt="Learn_to_Evolve"></div>

		<div class="col-sm-12 hidden-md hidden-lg" data-animate="fadeInLeftBig"><img src="img/learn-m.png" class=
		"img-responsive" alt="Learn_to_Evolve"></div>

		<div class="col-md-3 hidden-md hidden-lg" data-animate="fadeInRightBig"><img src="img/design-m.png" class=
		"img-responsive" alt="Learn_to_Evolve"></div>

		<div class="col-md-3 hidden-md hidden-lg" data-animate="fadeInLeftBig"><img src="img/code-m.png" class=
		"img-responsive" alt="Learn_to_Evolve"></div>

		<div class="col-md-3 hidden-md hidden-lg" data-animate="fadeInUpBig"><img src="img/evolve-m.png" class=
		"img-responsive" alt="Learn_to_Evolve"></div>
	  </div><!-- /.12 -->
	</div><!-- /.container -->
  </div><!-- /.section -->
</div><!-- /.section -->
  <!-- *** SERVICES END *** -->
  <!-- *** TESTIMONIALS ***
_________________________________________________________ -->


  <div class="section text-gray" id="section2">
	<div class="container">
	<div class="col-md-12">
	  <h2 class="title" data-animate="fadeInDown">Services</h2>
					   <div id="sf">
								 <div id ="aman"> 
									<div class="row" class="centered">
										<div class="col-lg-4 dg" data-animate = "fadeInDown">
											<h4 class="ml">Mobile</h4>
											<p class="centered"><a href="#"><i class="fa fa-android"></i> &nbsp; &nbsp; &nbsp;<span> <i class="fa fa-apple"></i> </span></a></p>
											<p class="ml"></p>
										</div> 
									  
										<div class="col-lg-4 lg" data-animate = "fadeInUp">
											<h4 class="ml">Web</h4>
											<p class="centered"><a href="#"><i class="fa fa-tablet"> </i> &nbsp; &nbsp; &nbsp; &nbsp;<span> <i class="fa fa-mobile"></span></i> &nbsp; &nbsp; &nbsp;<span> <i class="fa fa-laptop"></span></i></a></p>
											<p class="ml"></p>
										</div>
									   
										<div class="col-lg-4 dg" data-animate = "fadeInDown">
											<h4 class="ml">DevOps</h4>
											<p class="centered"><a href="#"><i class="fa fa-gears"></i>  &nbsp; <span> <i class="fa fa-gear"> </i> </span></a></p>
											<p class="ml"></p>
										</div>
									</div><!-- row -->
						   </div>
			  </div><!-- Social Footer -->

	</div><!-- /.12 -->
  </div><!-- /.container -->
</div><!-- /.section -->
<!-- *** ABOUT US END *** -->
<!-- *** JOIN US ***
	_________________________________________________________ -->
  <div class="section" id="section3" data-animate="fadeInUp">
	<div class="container">
	  <div class="col-md-12">
		<h2 class="title" data-animate="fadeInUp">Our Work</h2>

		<ul class="carousel testimonials same-height-row" data-animate="fadeInUp">
		  <li class="item">
			<div class="testimonial same-height-always">
			  <div class="text">
				<p>Scout Logistics deals with hundreds of truck loads every week. Maintaining an
                extensive network of reliable carriers is critical to business success.
                </p>
                <p>We designed a system to enable them to track truck loads, evaluate carrier 
                performance and eventually identify dependable carriers to maximize customer satisfaction.</p>
			  </div>

			  <div class="bottom">
				<div class="icon"></div>

				<div class="name-picture">
				  <img class="img-circle" alt="" src="img/scout.png">

				  <h5>Scout Logistics</h5>
				</div>
			  </div>
			</div>
		  </li>

		  <li class="item">
			<div class="testimonial same-height-always">
			  <div class="text">
				<p>Lassonde School of Engineering gets hundreds of applicants every semester. Each student needs
                to be tracked from initial Professor evaluations to scholarship funding and TA hours.</p>
                <p>We developed an application to organize student profiles and enable monitoring from
                application stages all the way to graduation</p>
			  </div>

			  <div class="bottom">
				<div class="icon"></div>

				<div class="name-picture">
				  <img class="img-circle" alt="" src="img/yorku1.png">

				  <h5>York University</h5>
				</div>
			  </div>
			</div>
		  </li>

		  <li class="item">
			<div class="testimonial same-height-always">
			  <div class="text">
				<p>A premier financial organisation, Royal Financial Management specializes in the areas of tax, accounting, assurance, estate planning, business advisory and bookkeeping services for a client base in the greater Toronto.
                </p><p>
                We created an interactive and informative website that provides quotations for various products offered by Royal Financial Management connecting them to the masses for a bigger imprint and market share. We took their old website with outdated graphics, fonts, etc., and transformed it into a modern and incredibly attractive site.
                </p>

			  </div>

			  <div class="bottom">
				<div class="icon"></div>

				<div class="name-picture">
				  <img class="img-circle" alt="" src="img/rfmi.png">

				  <h5>Royal Financial</h5>
				</div>
			  </div>
			</div>
		  </li>

		  <li class="item">
			<div class="testimonial same-height-always">
			  <div class="text">
				<p>A moving company that offers not only residential moving services Toronto wide but also provides commercial moving services, small business moves, storage and packing supplies.</p>

				<p>We made a modern eye catchy SEO enhanced website for our client to optimize the e-commerce niche and to enhance their future sales.</p>
			  </div>

			  <div class="bottom">
				<div class="icon"></div>

				<div class="name-picture">
				  <img class="img-circle" alt="" src="img/pm.png">

				  <h5>Perfection Movers</h5>
				</div>
			  </div>
			</div>
		  </li>
		</ul><!-- /.owl-carousel -->
	  </div><!-- /.12 -->
	</div><!-- /.12 -->
  </div><!-- /.container -->
  <!-- *** CONTACT ***
	_________________________________________________________ -->

<div class="section text-gray" id="section4">
  <div class="container">
	<div class="col-md-8 col-md-offset-2">
	  <h2 class="title" data-animate="fadeInDown">Contact us</h2>
	</div><!-- /.8 -->

	<div class="section" id="contact">
	  <div class="container">
		<div class="row">
		  <div class="col-lg-8 col-lg-offset-2">
			<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->

                <form action="" method="post" onsubmit="swal('Message Sent!', 'We will contact you shortly', 'success');">
                  <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                      <label>Name</label> <input type="text" class="form-control" placeholder="Name" id="name" name="name"
                      required data-validation-required-message="Please enter your name." pattern="[a-zA-Z ]+">

                      <p class="help-block text-danger"></p>
                    </div>
                  </div>

                  <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                      <label>Email Address</label> <input type="email" class="form-control" placeholder="Email Address" name="email"
                      id="email" required data-validation-required-message="Please enter your email address.">

                      <p class="help-block text-danger"></p>
                    </div>
                  </div>

                  <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                      <label>Phone Number</label> <input type="tel" class="form-control" placeholder="Phone Number (e.g. 123-456-7890)" name="phone" id=
                      "phone" required data-validation-required-message="Please enter your phone number." pattern="^\d{3}[-]?\d{3}[-]?\d{4}$" title="e.g. 123-456-7890">

                      <p class="help-block text-danger"></p>
                    </div>
                  </div>

                  <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                      <label>Message</label> 
                      <textarea rows="3" class="form-control" placeholder="Message" id="message" name="message" required
                      data-validation-required-message="Please enter a message.">
</textarea>

                      <p class="help-block text-danger"></p>
                    </div>
                  </div><br>

                  <div id="success"></div>

                  <div class="row">
                    <div class="form-group col-xs-12">
                      <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-cd btn-lg">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div><!-- *** FOOTER *** -->
        <!-- SOCIAL FOOTER -->
        <!-- CONTACT FOOTER -->

        <div class="section" id="footer">
          <div class="container">
            <div class="row">
              <a href="#"><i id="social-fb" class="fa fa-facebook-square fa-5x social"></i></a> <a href="#"><i id=
              "social-tw" class="fa fa-linkedin-square fa-5x social"></i></a> <a href="#"><i id="social-gp" class=
              "fa fa-google-plus-square fa-5x social"></i></a> <a href="mailto:codefined@gmail.com"><i id="social-em"
              class="fa fa-envelope-square fa-5x social"></i></a>

              <h3>Connect with us</h3><!-- /.6 -->
              <!--  <div class="col-sm-6">
                            <p>&copy; 2016 Your name goes here. 
                                <!== Do not remove the attribution, thx! If you need to do so, pls donate (http://bootstrapious.com/donate) to support us! 
                                Theme by <a href="https://bootstrapious.com/landing-pages" class="external">Bootstrapious.com</a>.</p>
                        </div> -->
            </div>
          </div><!-- /.container -->
        </div>

        <div class="col-md-6">
          <div class="text-left center-block">
            <p>&#169; All Rights Resevered by Codefined Inc. | Defining dreams with Code</p>
          </div>
        </div>
      </div><!-- /.section -->
      <!-- *** FOOTER END *** -->
      <!-- js base -->
      <script src="js/jquery-1.11.0.min.js" type="text/javascript">
</script> <script src="js/bootstrap.min.js" type="text/javascript">
</script> <!-- waypoints for scroll spy -->
       <script src="js/waypoints.min.js" type="text/javascript">
</script> <!-- owl carousel -->
       <script src="js/owl.carousel.min.js" type="text/javascript">
</script> <!-- jQuery scroll to -->
       <script src="js/jquery.scrollTo.min.js" type="text/javascript">
</script> <!-- main js file -->
       <script src="js/front.js" type="text/javascript">
</script> <script src="js/contact-validator.js" type="text/javascript">
</script> <script src="js/jqBootstrapValidation.js" type="text/javascript">
</script> <script src="js/contact.js" type="text/javascript">
</script> <script src="js/freelancer.js" type="text/javascript">
</script> <script src="js/freelancer.minjs" type="text/javascript">
</script>
    </div>
  </div>
</body>
</html>
