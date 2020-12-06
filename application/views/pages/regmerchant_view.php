
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Merchant's Registration</title>
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


		<div class="wrapper" style="color:brown" img src="<?php echo base_url()."assets/";?>images/registration-form-1.jpg">
			<div class="inner">
				<div class="image-holder">
				<img src="<?php echo base_url()."assets/";?>images/1.png" alt="">
				</div>
				<form action="<?php echo site_url('registration/addmerch') ;?>" method="post" enctype="multipart/form-data" >
				<h3 style="color:brown";>Registration Form</h3>
				<h4>Profile Picture</h4>
                        <input type="file" id="subject" name="merchpic" ><br><br>
					<div class="form-group">
						<input type="text" placeholder="First Name" name="merch_firstname" class="form-control" required>
						<input type="text" placeholder="Middle Name" name="merch_middleinitial" class="form-control" required><br>
						<input type="text" placeholder="Last Name" name="merch_surname" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Shop Name" name="merch_username" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" name="merch_email" class="form-control"required>
						<i class="zmdi zmdi-email"></i>
					</div>
                    <div class="form-wrapper">
                    <div class="form-wrapper">
						<input type="text" placeholder="Complete Address" name="merch_address" class="form-control" required>
					</div><div class="form-wrapper">
						<input type="text" placeholder="Phone Number" name="merch_phone" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" name="merch_password" class="form-control" required minlength="5">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control" required minlength="5">
						<i class="zmdi zmdi-lock"></i>
					</div>

					<button type="submit" >Register
					</button>
				</form>
			</div>
		</div>
		
	<!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>