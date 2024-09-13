
<?php
  require_once "db.php";

  if(isset($_SESSION['user_id'])!="") {
    header("Location: dashboard.php");
  }


if (isset($_POST['signup'])) {
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 
if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$name_error = "Name must contain only alphabets and space";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}       
if(strlen($mobile) < 10) {
$mobile_error = "Mobile number must be minimum of 10 characters";
}
if (!preg_match("/^[a-zA-Z ]+$/",$username)) {
$username_error = "Username must contain only alphabets";
}
if($password != $cpassword) {
$cpassword_error = "Password and Confirm Password doesn't match";
}
if (!$error) {
if(mysqli_query($conn, "INSERT INTO users(name, email, mobile, username ,password) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "', '" . $username . "', '" . $password . "')")) {
header("location:login.php");
exit();
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
}
mysqli_close($conn);
}
?>


<!doctype html>
<html lang="en">
    <head>
	    <meta charset="UTF-8"> <!---emoji--->
		
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/logo1.png" type="image/png">
        <title>Emerald Bay Inn</title>
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
	
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="image/logo1.png" 
					width="70" alt="">Emerald Bay Inn</a>
					
                    <button class="navbar-toggler" type="button" data-toggle="collapse" 
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
						aria-expanded="false" aria-label="Toggle navigation">
					
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="accomodation.html">Accomodation</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" 
								role="button" aria-haspopup="true" aria-expanded="false">Services</a>
								
                                <ul class="dropdown-menu">
                                     <li class="nav-item"><a class="nav-link" href="blog.html">Restaurant</a></li>
									<li class="nav-item"><a class="nav-link" href="bar.html">Bar</a></li>
									<li class="nav-item"><a class="nav-link" href="meetingroom.html">Meeting Room</a></li>
									<li class="nav-item"><a class="nav-link" href="banquethall.html">Banquet Hall</a></li>
                                    <li class="nav-item"><a class="nav-link" href="gym.html">Gym</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>	
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
		
        <!--Header Area-->
        
		
		
       
        <section class="banner_area">
		
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" 
					data-stellar-vertical-offset="0" data-background="">
				</div>
				<div class="container">	 
					<div class="banner_content text-center">
						<h6>It's time to relax your your mind with beautiful bay</h6>
						<h2>In Trincomalee</h2>
						<p>There’s never a dull moment at Emerald Bay Inn ! 
						<br>a sentinel of luxury in a stunning landscape of calming sunrises and psychedelic sunsets, 
						<br>a small luxury hotel on the East Coast of Sri Lanka!</p>						
					</div>
				</div>
            </div> 
        </section>
       
	   
		<hr>
    
		
	<div class="container">
<div class="row">
<div class="col-lg-8 col-offset-2">
<div class="page-header">
<h2>Registration Form</h2>
</div>
<p>Please fill all fields in the form</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="" maxlength="50" required="">
<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
</div>
<div class="form-group ">
<label>Email</label>
<input type="email" name="email" class="form-control" value="" maxlength="30" required="">
<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
</div>
<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile" class="form-control" value="" maxlength="10" required="">
<span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
</div>
<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control" value="" maxlength="8" required="">
<span class="text-danger"><?php if (isset($username_error)) echo $username_error; ?></span>
</div> 
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" value="" maxlength="8" required="">
<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
</div>  
<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="cpassword" class="form-control" value="" maxlength="8" required="">
<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
</div>
<input type="submit" class="btn btn-primary" name="signup" value="submit">
	
Already have a account?<a href="login.php" class="btn btn-default">Login</a>
</form>
</div>
</div>    
</div><br><br>


<div class="container">
<div class="row">
<div class="col-lg-8 col-offset-2">
<div class="page-header">
<form name="form1" action = "admin.php" method="post">
<input type="submit" class="btn btn-primary" name="admin_login" value = "Admin Login">
</form>
</div>
</div>
</div>
</div><br><br>

<?php
if(isset($_POST["admin_login"]))
{
	header('Location: admin.php');
}
?>
	
		
        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap" >
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">SERVICES</h2>
                    <p>As a preferred business hotel in Trincomalee, the corporate services and amenities available at The Emerald Bay will surpass your expectations. Offering a 24-hour business centre and conference rooms, your time is our primary concern; hence our central location in Trincomalee is highly advantageous! </p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                            <p>Our world-class chefs know no greater pleasure than enticing your taste buds with delectable dishes you’re bound to remember. We source our ingredients exclusively to nature. And Awaiting you is a sensational feast that goes beyond five-star standards. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Gym</h4>
                            <p>If your workout sessions go beyond just cardio, you will still find your satisfaction within our compact, state-of-the-art gym. Emerald Bay’s workout space has an entire rack loaded with dumbbells of varying weights, ready for your weight training sessions. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-pool"></i>Pool</h4>
                            <p>Relieve yourself of the tropical heat by dipping in a luxurious rooftop infinity pool, while feeling the ocean breeze gently put your mind at ease. Soak up the sun as you enjoy a delectable snack and refreshing beverage from Honey Beach Club by the poolside. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-banquet"></i>Banquet Hall</h4>
                            <p>Emerald Bay’s banquet hall features a customizable 1500ft² space with a seating capacity of up to 100, a welcoming lobby, and a designated entrance facing wanderfull bay. Events held at our space are characterized by the highest standard of safety, extravagant lighting, event-appropriate furniture, and the elegant displayed. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Meeting Room</h4>
                            <p>Select one of the most sought-after conference halls in Trincomalee that meet the highest standards with attentive, reliable service, a range of culinary delights and modern facilities. Whether it’s your wedding day, business conference, workshop or seminar,,we offer a range of venues to pick from – be spoilt for choice. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                            <p> enjoy panoramic sunsets and breathtaking ocean sights from its impressive location. If you plan to visit at sunset for the best views and #nofilter selfie opportunities, you can catch a glimpse of the bartenders showing off their flair as they twirl and flip bottles while mixing Emerald Bay inspired cocktails.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>
        <!--================ Facilities Area  =================-->
    


        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">ACCOMODATION</h2>
                    <p><b><i>Discover the true meaning of elegance, grace & splendour at Emerald Bay, where we bring you regal indulgence,
					outstanding individual comforts & the best service amongst hotels in Trincomalee.
					Our 50 rooms are expertly designed with every luxury in mind. With a host of amenities and dining options; whether in-room or from our restaurants, 
					intuitive service & heavenly Frette linen bedding, we guarantee a one of a kind holiday, fit for a king or queen </i></b></p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room1.jpg" alt="">
                               <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room2.jpg" alt="">
                                <p></p>
							</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room3.jpg" alt="">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room4.jpg" alt="">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->


    
        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">About Us </h2>
                            <h3>Discover a hotel that defines a new dimension of luxury. </h3>
							
							<p>The story of Emerald Bay Inn which opened its doors in 1984 is a splendid tale of continual 
							   improvement of product and the highest standards of quality in hospitality.
                              expertise in hospitality, our vision and beliefs are firmly grounded in extending a true 
							  personalized service to all our guests, laced with an unforgettable luxury hotel experience. </p>
							  
                            <a href="about.html" class="button_hover theme_btn_two">More Infomation</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="image/about_bg.jpg" alt="img">
                    </div>
                </div>
            </div>
        </section><br><br>
        <!--================ About History Area  =================-->
        

        
		
        <!--================ Latest Blog Area  =================-->
        <section class="latest_blog_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Best place To visit in Trincomalee  &#128525;</h2>
                    <p><i>Trincomalee is a port city on the northeast coast of Sri Lanka. Set on a peninsula, 
					Fort Frederick was built by the Portuguese in the 17th century. Within its grounds, the grand Koneswaram Temple stands on Swami Rock cliff, 
					a popular vantage point for blue-whale watching. The holy complex contains ornate shrines and a massive statue of Shiva.
					Nearby Gokanna Temple has panoramic views over the city and the coastline. </i></p>
                </div>
                <div class="row mb_30">
				
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="image/blog/uppuveli0.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Uppuveli Beach </a>
                                </div>
                            </div>	
                        </div>
                    </div>
					
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="image/blog/kovil.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Koneswaram Temple </a>
                                </div>
                            </div>	
                        </div>
                    </div>
					
					 <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="image/blog/temple0.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Seruwila Raja Maha Viharaya </a>
                                </div>
                            </div>	
                        </div>
                    </div>

				
				
					
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="image/blog/pigeon0.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Pigeon Island</a>
                                </div>
                            </div>	
                        </div>
                    </div>
					
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="image/blog/museum0.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Maritime and Naval History Museum </a>
                                </div>
                            </div>	
                        </div>
                    </div>
					
					 <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="image/blog/uppuveli0.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Uppuveli Beach </a>
                                </div>
                            </div>	
                        </div>
                    </div>

				
				
				
            </div>
        </section>
        <!--================ Recent Area  =================-->
        
		
		
		        <!--================ Testimonial Area  =================-->
        <section class="testimonial_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">REVIEW | &#128529; | &#128528; | &#128578; | &#128512; </h2>
                </div>
                <div class="testimonial_slider owl-carousel">
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/im1.jpg" alt="">
                        <div class="media-body">
                            <p>"Hesitantly, we decided on visiting our enchanting island cautious after all reports and news but the situation demanded our presence...and so we went. So glad that we did visit..it was such a..." </p>
                            <a href="#"><h4 class="sec_h4">Hashan Perera</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>    
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/im2.jpg" alt="">
                        <div class="media-body">
                            <p>"I would recommend that people with food allergies (or have children with food allergies) or dietary restrictions like keeping Kosher, Halal, vegetarian, or vegan reconsider taking any meals in this..." </p>
                            <a href="#"><h4 class="sec_h4">Kamal Gunawardhane</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/im3.jpg" alt="">
                        <div class="media-body">
                            <p>"It is amazing to experience the warm, helpful and respectful service across every member of the hotel. It feels like heaven! Everything is simply great at Hilton Colombo... Always "the hotel" for our..." </p>
                            <a href="#"><h4 class="sec_h4">Kanchana de Silva</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>    
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/im4.jpg" alt="">
                        <div class="media-body">
                            <p>"Came with the family and had a great time at Graze kitchen. Best buffet in town, great selection and excellent service. Special mention to Ramiz for his great service. Highly recommend for family..." </p>
                            <a href="#"><h4 class="sec_h4">Avishka Dulshan</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Testimonial Area  =================-->
		
		
		
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Emerald Bay Inn</h6>
							<a class="footer_title" href="index.html"><img src="image/logo2.png" width="90" alt=""></a>
                            <p> A sentinel of luxury in a stunning landscape of calming sunrises and psychedelic sunsets,
							a small luxury hotel on the East Coast of Sri Lanka! </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="index.html">Home </a></li>
										<li><a href="accomodation.html">Room suites</a></li>
                                        <li><a href="about.html">About Us </a></li>
                                        <li><a href="blog.html">Restaurant </a></li>
										 <li><a href="meetingroom.html">Meeting Room </a></li>
                                        
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list_style">
									    <li><a href="gym.html">Gym </a></li>
										<li><a href="bar.html">Bar </a></li>
										<li><a href="banquethall.html">Banquet Hall </a></li>
                                        <li><a href="https://goo.gl/maps/WWuKbqm9aS6Aq97S8">Location </a></li>
                                        <li><a href="contact.html">Contact </a></li>
										<li><a href="#">Cookies </a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Contact Us</h6>
                            <p>Are you planning a stay with us? Get in touch via phone or email to make your reservation today! 
							Stay connected with us to find out the latest buzz and special offers at Emerald Bay Inn, </p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
									method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
											required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                 				
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Privacy policy | Web Design & Development by Thejan Balawickrama</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>

