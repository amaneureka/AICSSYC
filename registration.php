<!DOCTYPE html>
<html>
<head>
<title>REGISTRATION</title>
   <!--   FAV AND TOUCH ICONS   -->
        <link rel="icon" href="assets/images/favicon.ico">
        <link rel="apple-touch-icon" href="assets/images/logo_medium.png">

        <!-- GOOGLE FONTS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- FONT ICONS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/icomoon.css">

        <!-- Pop Up Images -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <!-- CAROUSEL SLIDERS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">

        <!-- FLEX SLIDER CSS -->
        <link rel="stylesheet" href="assets/css/flexslider.css">

        <!--  CSS3 ANIMATE CSS  -->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--  Hover effect CSS  -->
        <link rel="stylesheet" href="assets/css/hover-effect.css">

        <!--   COUSTOM CSS link  -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <!-- COLOR SCHEME -->
        <link rel="stylesheet" href="assets/css/colors/forestGreen.css" type="text/css" id="theme-link" />
</head>
<body>
 <!-- Start: Register Area 
        ==================================-->
        <section class="register-background register" id="register"> 
            <div class="overlay-color">
                <div class="container">
                    <div class="row register-body section-separator">
                        
                        <!-- Start: Section Header -->
                        <div class="section-header col-md-6 col-md-offset-3">
                        

                            <h2 class="section-heading">Registration Form</h2>
                            <p>Register Here to Join!</p>
							<p>Register here for a chance to participate in the AICSSYC'15.</br>
This registration is not a confirmation of your attendance for the event. After screening the applications, selected participants will receive confirmation mails and details about further steps. The attendance ticket will be sent as soon as the payment is completed.The last date to register is 27 october'2015. 
</br>
For more information and queries, reach out to at aicssyc2015@gmail.com .
</br>
 We will start mailing out to selected people soon.</p>
                           
                            
                        </div>
                        <!-- End: Section Header -->
                        
                        <div class="clearfix"></div>

                        <!-- Register Form Goes Here  -->
                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInDown">

                            <form id="register-form" method="post" class="form input-group register-form">
                                <div class="container-fluid">
                                    <div class="row">                                        
                                        <div class="col-sm-6 col-xs-12">
                                            <input name="name" id="register-name" class="form-cus form-control" type="text" placeholder="Name*" required>
                                        </div>

                                        <div class="col-sm-6 col-xs-12">
                                            <input name="email" id="register-email" class="form-cus form-control" type="email" placeholder="Email*" required>
                                        </div>

                                        <div class="col-sm-6 col-xs-12">
                                            <input name="telephone" class="form-cus form-control" id="register-telephone" type="tel" placeholder="Telephone*" required>
                                        </div>
										  <div class="col-sm-6 col-xs-12">
                                            <input name="Membership number" id="register-member_id" class="form-cus form-control" type="text" placeholder="Membership number*" required>
                                        </div>
										</div>
										  

										<div class="col-sm-6 col-xs-12 dropDown">
                                            <h4> Membership type*</h4>
                                            <select name="member of ieee cs" id="registered-student" class="form-control" required>
                                                <option value="select">Select</option>
												<option value="students">Student</option>
                                                <option value="professionals">Young Professional</option>

                                            </select>
                                        </div>
										<div class="col-sm-6 col-xs-12 dropDown">
                                        <h4> T-shirt size*</h4>
										 <select name="size" id="registered-size" class="form-control" required>
                                                 <option value="select">Select</option>
												<option value="S">S</option>
                                                <option value="M">M</option>
												<option value="L">L</option>
                                                <option value="XL">XL</option>
												 <option value="XXL">XXL</option>
                                            </select>
                                        </div>
										
										
										
                                       <div class="clearfix visible-xs"></div>
                                       <div class="col-sm-6 col-xs-12 dropDown">
                                        <h4>Section*</h4>
										 <select name="member of ieee cs" id="registered-section" class="form-control" required>
                                                  <option value="select">Select</option>
												 <option value="Bangalore">Bangalore</option>
												<option value="Delhi">Delhi</option>
												 <option value="Gujarat">Gujarat</option>
												 <option value="Hyderabad">Hyderabad</option>
												  <option value="Kerala">Kerala</option>
												  <option value="Kharagpur">Kharagpur</option>
												   <option value="Kolkata">Kolkata</option>
                                                   <option value="Madras">Madras</option>
				                                  <option value="Mumbai">Mumbai</option>
												  <option value="Pune">Pune</option>

												  <option value="Uttar Pradesh">Uttar Pradesh</option>
                                           
                                            </select>
                                        </div>
                                       <div class="col-sm-6 col-xs-12 dropDown">
                                        <h4> Member of computer society*</h4>
										 <select name="member of ieee cs" id="registered-ismember" class="form-control" required>
                                                 <option value="select">Select</option>
												<option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
										<div class="col-sm-6 col-xs-12">
                                            <textarea name="register-why" rows="5" cols="30"  class="form-cus form-control" id="register-why" type="text" placeholder="Reason for attending*" required></textarea>
											</div>
									<div class="col-sm-6 col-xs-12">
                                            <textarea rows="5" cols="30" name="register-expectation" class="form-cus form-control" id="register-expectation" type="text" placeholder="Expectations from Congress*" required></textarea> 
									   </div>
										<div class="col-sm-6 col-xs-12">
                                            <textarea  rows="5" cols="30" name="register-volunteering" class="form-cus form-control" id="register-volunteering" type="text" placeholder="any volunteering experience*" required></textarea>
										</div>
										<div class="col-sm-6 col-xs-12">
                                            <textarea rows="5" cols="30" name="register-comments"rows="5" cols="30" class="form-cus form-control" id="register-comments" type="text" placeholder="any comments"></textarea>
										</div>
										 </div>
										
                                        <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
                                            <p id="register-success" class="email-success"></p>
                                            <p id="register-failed" class="email-failed"></p>
                                            <button class="btn btn-1 btn-top">Submit</button>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- End: .col-sm-12  -->
                        
                    </div>
                    <!-- End: .register-body -->
                </div>
                <!-- End: .container -->
            </div> 
            <!-- End: .overlay-color -->
        </section> 
        <!-- End: Register Area 
        ================================-->
		<!-- SCRIPTS 
        ========================================-->
        <script src="assets/js/jquery-1.11.3.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/matchMedia.js"></script>
        <script src="assets/js/navbar.matchMedia.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.localScroll.min.js"></script>
        <script src="assets/js/smoothscroll.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>  
        <script src="assets/js/jquery.nav.js"></script>    
        <script src="assets/js/wow.min.js"></script>   
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.countdown.js"></script>
        <script src="assets/js/jquery.flexslider-min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/custom-scripts.js"></script>
		</body>
		</html>