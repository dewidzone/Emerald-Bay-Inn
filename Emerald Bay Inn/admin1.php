
<?php
session_start();
if(isset($_SESSION['user_id']) =="") {
header("Location:admin.php");
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
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		
		<!-- Button CSS -->
		<link rel = "stylesheet" href = "css/btn.css">


</head>

<body>

<br><br><div class="container">
<div class="row">
<div class="col-lg-8">
<div class="card">
<div class="card-body">
<h4 class="card-title">Emerald Bay Inn Management System &nbsp; &nbsp; <a href="admin_logout.php" class="btn btn-primary">Logout</a></h4><br><br>

			<form action="admin1.php" method="POST" enctype="multipart/form-data">
				<input type="Submit" name="booking" Value="View All Booking" class="btn btn-primary"> 	
			
			</form>				
          
</div>
</div>
</div>
</div>       
</div><br><br>


<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="card">
<div class="card-body">

<form action = "admin1.php" method="post">
<table>

<div class="form-group ">
<label>Email</label>
<input type="email" name="email" class="form-control" value="" maxlength="30">

</div>

<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile" class="form-control" value="" maxlength="10">

</div>

<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control" value="" maxlength="15">

</div> 

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" value="" maxlength="8">
</div>

<div class="form-group">
<label>Role Type</label>
<input type="text" name="role_type" class="form-control" value="" maxlength="8">
</div>

<tr>
<td align="right" colspan="4">
<input type="Submit" name = "add" value="Add Staff" class="btn btn-primary">&nbsp;<input type="Submit" name = "search" value="Search Staff" class="btn btn-primary">&nbsp;<input type="Submit" name = "delete" value="Delete Staff" class="btn btn-primary"></td>
</tr>

</table></form>
</div>
</div>
</div>
</div>       
</div><br><br>



</body>
</html>


<?php
if(isset($_POST["booking"]))
	{
		
					$con = mysqli_connect("localhost","root","","my_db") or die('Server Error '.mysql_error());
					$query=mysqli_query($con,"SELECT * FROM reservation");
					$nor=mysqli_num_rows($query);

									if($nor=="")
										{
											echo("<h4 align = 'center'>Invalid Entry</h4><br><br>");
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



if(isset($_POST["add"]))
				{			
					
					$email=$_POST["email"];
					$mobile=$_POST["mobile"];
					$username=$_POST["username"];
					$password=$_POST["password"];
					$role_type=$_POST["role_type"];
					
					$email=$_POST["email"];
					if($email=="")
						{		
								echo("<h4 align = 'center'>Invalid Entry</h4><br><br>");
								return;
						}
						
					$mobile=$_POST["mobile"];
						if($mobile=="")
						{		
								echo("<h4 align = 'center'>Invalid Entry</h4><br><br>");
								return;
						}
							$username=$_POST["username"];	
	                   if($username=="")
						{		
							echo("<h4 align = 'center'>Invalid Entry</h4><br><br>");
								return;
						}
						
					$password=$_POST["password"];	
	                   if($password=="")
						{		
								echo("<h4 align = 'center'>Invalid Entry</h4><br><br>");
								return;
						}
											
						
							$role_type=$_POST["role_type"];	
	                   if($role_type=="")
						{		
								echo("<h4 align = 'center'>Invalid Entry</h4><br><br>");
								return;
						}
						
					
					$con = mysqli_connect("localhost","root","","my_db") or die('Server Error '.mysql_error());
						
						
					$query=mysqli_query($con,"INSERT INTO users(email, mobile, username, password, role_type) VALUES('$email', '$mobile', '$username', '$password', '$role_type')"); 
						
							if($query>0)
								{
									echo("<h4 align = 'center'>Successfully Added</h4><br><br>");
									

									
								}
							else
								{
									echo("<h4 align = 'center'>Error</h4><br><br>");
								}						
				}				  



if(isset($_POST["search"]))
				{
					
					
					
						$role_type=$_POST["role_type"];	
					if($role_type=="")
						{		
								echo "<h4 align='center'>Invalid Entry</h4><br><br>";
								return;
						}
						
					
					
					
					
					$con = mysqli_connect("localhost","root","","my_db") or die('Server Error '.mysql_error());
						
						$query=mysqli_query($con,"SELECT*FROM users WHERE role_type = '$role_type'");
						$nor=mysqli_num_rows($query);
					if($nor=="")
					{
						echo("<h4 align = 'center'>Invalid Entry</h4><br><br>");
						
					}
                  else 
				  {
					  $rec=mysqli_fetch_assoc($query);
					  
					  echo("<h4 align = 'center'>Search Result : <br><br></h4>");
					  
					 
					 
					  
					  
					 	{
											echo "<table border='1'align='center'>";
											echo "<tr>
														
														<th width = '100'> Email </th>
														<th width = '100'> Mobile No </th>														
														<th width = '100'> Username </th>						
														<th width = '100'> Password </th>														
														<th width = '100'> Role Type </th>
																																																							
												   </tr>";
											
											While($rec=mysqli_fetch_assoc($query))
											{
												echo "<tr>";
												echo "<td>".($rec['email']) ."</td>";
                                                echo "<td>".($rec['mobile']) ."</td>";												
												echo "<td>".($rec['username']) ."</td>";
												echo "<td>".($rec['password']) ."</td>";	
												echo "<td>".($rec['role_type']) ."</td>";
												
												echo "</tr>";
											}
											
											echo "</table><br><br><br><br>";
											
											mysqli_close($con);
												
										} 
					  
				  }		
						
				}
				
				
				
				
				
				if(isset($_POST["delete"]))
				{
					
					
					
						$username=$_POST["username"];
					if($username=="")
						{		
								echo("<h4 align = 'center'>Invalid Entry</h4><br><br>");
								return;
						}
						
					
					
					
					
					$con = mysqli_connect("localhost","root","","my_db") or die('Server Error '.mysql_error());
						
						$query=mysqli_query($con,"SELECT*FROM users WHERE username = '$username'");
						$nor=mysqli_num_rows($query);
					if($nor=="")
					{
						echo("<h4 align = 'center'>Invalid Entry</h4><br><br>");
						
					}
					else{
				
						$query=mysqli_query($con,"DELETE FROM users WHERE username = '$username'");
						echo("<h3 align = 'center'>Record successfully deleted</h3>");
					mysqli_close($con);
					}
				}
				
				

	
?>


