<?php
session_start();
if(isset($_SESSION['user_id']) =="") {
header("Location:login.php");
}
?>






<!DOCTYPE html>
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
        </header><br><br><br><br><br>

<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="card">
<div class="card-body">
<h4 class="card-title">Hey...! <?php echo $_SESSION['user_name']?>&nbsp;&nbsp;   |  &nbsp;&nbsp; Emerald Bay Booking Panel   <h/4><br><br>
<h5><p class="card-text">Email :- <?php echo $_SESSION['user_email']?></p>
<p class="card-text">Mobile :- <?php echo $_SESSION['user_mobile']?></p></h5><br>
<a href="logout.php" class="btn btn-primary">Logout</a><br><br><br>
</div>
</div>
</div>
</div>       
</div><br><br><br>


<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="card">
<div class="card-body">

		<table border="0" cellpadding="5">
			<form action="dashboard.php" method="POST" enctype="multipart/form-data">
				
				
				<tr>
					<td>Name : </td>
					<td><input type="text" width="50" name="name"></td>
				</tr>
				<tr>
					<td>Contact No : </td>
					<td><input type="text" width="50" name="contact_no"></td>
				</tr>
				
					<tr>
					<td>Address : </td>
					<td><input type="text" width="50" name="address"></td>
				</tr>
				
					<tr>
					<td>Arrival : </td>
					<td><input type="date" width="50" name="arrival"></td>
				</tr>
				
				
				
					<tr>
					<td>Departure : </td>
					<td><input type="date" width="50" name="departure"></td>
				    </tr>


					<tr>
					<td>No. Children : </td>
					<td><input type="number" width="50" name="children"></td>
				</tr>
				
					<tr>
					<td>Room: </td>
					<td><input type="number" width="50" name="room"></td>
				</tr>
				
				
				<tr>
					<td>Message : </td>
					<td><input type="text" width="50" name="message"></td>
				</tr>
				
				<tr>
					<td><input type="Submit" name="Submit" Value=" Submit " class="btn btn-primary"> 
						<input type="Reset" name = "Reset" value=" Reset " class="btn btn-primary">
					
					<td></td>
				</tr>				
			</form>
		</table><br><br><br>
		
		
		<table border="0" cellpadding="5">
			<form action="dashboard.php" method="POST" enctype="multipart/form-data">
				
				<tr>
					<td>Username : </td>
					<td><input type="text" width="50" name="name"></td>
				</tr>
				

                <tr>
					<td><input type="Submit" name="view" Value="View My Booking" class="btn btn-primary"> 
						<input type="Reset" name = "Reset" value=" Reset " class="btn btn-primary">
					
					<td></td>
				</tr>				
</form>
</table><br><br>
		
		
</div>
</div>
</div>
</div>       
</div><br><br><br>







    </body>
</html>

<?php



if(isset($_POST["Submit"]))
				{			
																					
					$name=$_POST["name"];	
	                   if($name=="")
						{		
								echo "<h4 align='center'>Invalid Entry</h4><br><br>";
								return;
						}
						
					
					$contact_no=$_POST["contact_no"];	
	                   if($contact_no=="")
						{		
							echo "<h4 align='center'>Invalid Entry</h4><br><br>";
								return;
						}
						
						$address=$_POST["address"];	
	                   if($address=="")
						{		
								echo "<h4 align='center'>Invalid Entry</h4><br><br>";
								return;
						}
						
						$arrival= date('y-m-d', strtotime($_POST["arrival"]));							
	                   if($arrival=="")
						{		
							echo "<h4 align='center'>Invalid Entry</h4><br><br>";
								return;
						}
						
						
						
						$departure= date('y-m-d', strtotime($_POST["departure"]));	
	                   if($departure=="")
						{		echo "<h4 align='center'>Invalid Entry</h4><br><br>";
								return;
						}
						
						
						$children =$_POST["children"];
						if($children=="")
						{		
								echo "<h4 align='center'>Invalid Entry</h4><br><br>";
								return;
						}
						
						$room=$_POST["room"];	
	                   if($room=="")
						{	echo "<h4 align='center'>Invalid Entry</h4><br><br>";
								return;
						}
						
							$message=$_POST["message"];
					if($message=="")
						{		
								echo "<h4 align='center'>Invalid Entry</h4><br><br>";
								return;
						}
						
					$con = mysqli_connect("localhost","root","","my_db") or die('Server Error '.mysql_error());	
					$query=mysqli_query($con,"INSERT INTO reservation(name, contact_no, address, arrival, departure, children, room, message) VALUES('$name', '$contact_no', '$address', '$arrival',  '$departure', '$children', '$room', '$message')");
						
							if($query>0)
								{
										{
					
									echo("<h4 align = 'center'> Successfully Added </h4>");
						
										}
									
								}
							else
								{
									echo("<h4 align = 'center' >Error</h4>");
									
									mysqli_close($con); 
									
								}						
				}				  
				


if(isset($_POST["view"]))
	{
		$name=$_POST["name"];
		if($name==""){
			echo "<h4 align='center'>Invalid Entry</h4><br><br>";
			return;
		}
					$con = mysqli_connect("localhost","root","","my_db") or die('Server Error '.mysql_error());
					$query=mysqli_query($con,"SELECT * FROM reservation WHERE name='$name'");
					$nor=mysqli_num_rows($query);

									if($nor=="")
										{
										echo "<h4 align='center'>Invalid Entry</h4><br><br>";
										}
									else
										{
											echo "<table border='1'align='center'>";
											echo "<tr>
														<th width = '100'> ID </th>
														<th width = '100'> Name </th>
														<th width = '100'> Contact No </th>
														<th width = '100'> Address </th>						
														<th width = '100'> Arrival </th>														
														<th width = '100'> Departure </th>
														<th width = '100'> No of Children </th>														
														<th width = '100'> No of Room </th>
														<th width = '100'> Message </th>
													
														
														
														
												   </tr>";
											
											While($rec=mysqli_fetch_assoc($query))
											{
												echo "<tr>";
												echo "<td>".($rec['id']) ."</td>";	
												echo "<td>".($rec['name']) ."</td>";
												echo "<td>".($rec['contact_no']) ."</td>";
												echo "<td>".($rec['address']) ."</td>";	
												echo "<td>".($rec['arrival']) ."</td>";											
												echo "<td>".($rec['departure']) ."</td>";
												echo "<td>".($rec['children']) ."</td>";
												echo "<td>".($rec['room']) ."</td>";
												echo "<td>".($rec['message']) ."</td>";
												
												echo "</tr>";
											}
											
											echo "</table>";
											
											mysqli_close($con);
												
										}


	}			
?>






