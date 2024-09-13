
<?php
session_start();

require_once "db.php";

if(isset($_SESSION['user_id'])!="") {
    header("Location: admin1.php");
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

   if (!preg_match("/^[a-zA-Z ]+$/",$username)) {
$username_error = "Username must contain only alphabets";
}
    if(strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
    }  

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $username. "' and password = '" . $password. "'");
   if(!empty($result)){
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['user_id'] = $row['uid'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_mobile'] = $row['mobile'];
			$_SESSION['user_username'] = $row['username']; 
            header("Location: admin1.php");
			echo 'there u go....!';
        }else {
        $error_message = "Incorrect Email or Password!!!";
    }
		
		
	
		
		
}
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
		
        <title>Emerald Bay Inn | User Panel </title>
		
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
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		
		<!-- Button CSS -->
		<link rel = "stylesheet" href = "css/btn.css">


</head>

<body>

<div class="container">
<div class="row">
<div class="col-lg-10">
<div class="page-headerr"><br><br>
<h2>Admin Login Form</h2>
</div>
<p>Please fill all fields in the form</p>
<form action = "admin.php"  method="post">
<div class="form-group ">
<label>Username : </label>
<input type="username" name="username" class="form-control" value="" maxlength="30" required="">
<span class="text-danger"><?php if (isset($username_error)) echo $username_error; ?></span>
</div>
<div class="form-group">
<label>Password : </label>
<input type="password" name="password" class="form-control" value="" maxlength="8" required="">
<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
</div>  
<input type="submit" class="btn btn-primary" name="submit" value="submit">
<input type="Reset" class="btn btn-primary" name="Reset" value="Reset">
<br>Back to Home page <a href="index.php" class="mt-3">Click Here</a>
</form>
</div>
</div>     
</div><br><br><br>

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