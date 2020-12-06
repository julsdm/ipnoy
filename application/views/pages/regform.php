
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register Now</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="<?php echo base_url()."assets/";?>fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/style1.css">
	</head>

<style>
body{
	background-image: url("https://cdn.pixabay.com/photo/2016/02/25/15/55/texture-1222375__340.jpg");
	background-attachment: fixed;
}
</style>
		<div class="wrapper" img src="<?php echo base_url()."assets/";?>images/registration-form-1.jpg">
			<div class="inner">
				<div class="">
				<img src="<?php echo base_url()."assets/";?>images/1.png" alt="" width="900" height="700">
				</div>
				<form action="<?php echo site_url('registration/registeruser') ;?>" method="post" >
				<h3  style="color:brown";>Registration Form</h3>
				<h4  style="color:black";>Profile Picture</h4>
                        <input type="file" id="subject" name="customer_picture" ><br><br>
					<div class="form-group">
						<input type="text" placeholder="First Name" class="form-control" required>
						<input type="text" placeholder="Last Name" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Username" name="username"  class="form-control" required>
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
                    <div class="form-wrapper">
						<input type="text" placeholder="Complete Address" class="form-control"required>
					</div>
					<div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" name="password" class="form-control" required minlength="8">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button><br>
					<div class="text-center"><input type=button onClick="location.href='<?php echo site_url('registration/regmerch')?>'" value='Are you a Merchant? Click here to Register'  style="color:red";></div><br><br>
				</form>
				
				
			</div>
		</div>
		
<!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>