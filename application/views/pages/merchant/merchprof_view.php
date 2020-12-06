<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IPnoy Crafts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/style.css">
    
  </head>
  <style>
body{
	background-image: url("https://i.pinimg.com/736x/95/18/a7/9518a703b927d3db5f3df18ed68c241d.jpg");
	background-size: 100%;
  background-attachment: fixed;
}
</style>  

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="top-bar py-3 bg-light" id="home-section">
      <div class="container">
        <div class="row align-items-center">
         
          <div class="col-6 text-left">
            <ul class="social-media">
              <li><a href="www.facebook.com" class=""><span class="icon-facebook"></span></a></li>
              <li><a href="instagram.com" class=""><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+1) 234 5678 9101</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">shop@ipnoy.com.ph</span></a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
        <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="<?php echo site_url('merchant/dashboard') ?>" class="text-black mb-0">IPnoy<span class="text-primary"></span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <li><a href="<?php echo site_url('merchant/addprod') ?>" class="nav-link">Add Products</a></li>
                <li><a href="<?php echo site_url('merchant/products') ?>" class="nav-link">My Products</a></li>
                <li><a href="<?php echo site_url('merchant/order') ?>" class="nav-link">Orders</a></li>
                <li><a href="<?php echo site_url('merchant/merchprof') ?>" class="nav-link">Profile</a></li>
                <li><a href="<?php echo site_url('merchant/prodfeed') ?>" class="nav-link">Notifications</a></li>
                <li><a href="<?php echo site_url('Home') ?>" class="nav-link">Logout</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
<br>
<br>
<br>
<br>
<br>
<div class="container">
<?php foreach($users_data as $row){ ?>
    <form action="<?php echo site_url('merchant/merchprof/updateprof') ;?>" method="post" enctype="multipart/form-data">  
                                    <div class="form-group col-lg-12">
                                    <img class="media-object" src="<?php echo $row->merchpic;?>" style="width:200px;height:200px;">
                                    <h5 style="color: black;">Want to Change?</h5>
                                    <input type="radio" id="Yes" name="picchange" value="yes">
                                    <label for="Yes">Yes</label>
                                    <input type="radio" id="No" name="picchange" value="no">
                                    <label for="No">No</label><br>
                                        <input type="file" id="subject" name="merchpic" ><br>
                                    <br><h6 style="color: black;">Username <span class="label label-default"></span></h6>   
                                        <input type="text" value = "<?php echo $row->merch_username;?>" class="form-control" id="email" name="username" placeholder="password">
                                    </div>
                                    <div class="form-group col-lg-12">
                                    <h6 style="color: black;">Password <span class="label label-default"></span></h6>   
                                        <input type="password" value = "<?php echo $row->merch_password;?>" class="form-control" id="email" name="password" placeholder="password">
                                    </div>
                                    <div class="form-group col-lg-12">
                                    <h6 style="color: black;">Surname <span class="label label-default"></span></h6>   
                                        <input type="text" value = "<?php echo $row->merch_surname;?>" class="form-control" id="subject" name="surname" placeholder="surname">
                                    </div>
                                    <div class="form-group col-lg-12">
                                    <h6 style="color: black;">First Name <span class="label label-default"></span></h6>   
                                        <input type="text" value = "<?php echo $row->merch_firstname;?>" class="form-control" id="message" name="firstname" rows="1" placeholder="firstname">
                                    </div>
                                    <div class="form-group col-lg-12">
                                    <h6 style="color: black;">Middle Name <span class="label label-default"></span></h6>   
                                        <input type="text" value = "<?php echo $row->merch_middleinitial;?>" class="form-control" id="name" name="middleinitial" placeholder="middleinitial">
                                    </div>
                                    <div class="form-group col-lg-12">
                                    <h6 style="color: black;">E-mail Address <span class="label label-default"></span></h6>   
                                        <input type="text" value = "<?php echo $row->merch_email;?>" class="form-control" id="name" name="email" placeholder="email">
                                    </div>
                                    <div class="form-group col-lg-12">
                                    <h6 style="color: black;">Complete Address <span class="label label-default"></span></h6>   
                                        <input type="text" value = "<?php echo $row->merch_address;?>" class="form-control" id="name" name="address" placeholder="address">
                                    </div>
                                    <div class="form-group col-lg-12">
                                    <h6 style="color: black;">Contact Number <span class="label label-default"></span></h6>   
                                        <input type="number" value = "<?php echo $row->merch_phone;?>" class="form-control" id="name" name="phone" placeholder="phone">
                                    </div>


                                        <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="btn submit_btn2 form-control">Save Changes</button>
                                    </div>
                                    </div>
                                    <?php }?>
                                </form>
 </div>
 <div class="container" style="color:black";><b>BANK DETAILS
 <?php foreach($bank as $row2){ ?>
  <input type="text" value = "<?php echo $row2->acc_name;?>" class="form-control" id="name" name="displayname" placeholder="displayname">
  <input type="text" value = "<?php echo $row2->bank_num	;?>" class="form-control" id="name" name="displayname" placeholder="displayname">
  <input type="text" value = "<?php echo $row2->bank;?>" class="form-control" id="name" name="displayname" placeholder="displayname">
  <a href="<?php echo site_url('merchant/products/deleteprod');?>/<?php echo $row2->bank_id;?>" class="btn btn-danger">Delete</a>
<br><br><br>


  <?php }?>

  <div class="container"><button data-toggle="modal" data-target="#addbank" type="button" class="btn btn-primary">Add Bank Info</button></div>

  <!-- Add users Modal -->
  <div class="modal fade" id="addbank" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo site_url('merchant/merchprof/addbank')?>">
            <div class="form-group">
              <label >Account Name</label>
              <input type="text" class="form-control" name="acc_name"  >
            </div>
            <div class="form-group">
              <label >Account Number</label>
              <input type="text" class="form-control" name="bank_num"  >
            </div>
            <div class="form-group">
              <label >Bank Name</label>
              <input type="text" class="form-control" name="bank"  >
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    </div>
    <!-- end of Add users Modal -->
  </div> <!-- .site-wrap -->

  <script src="<?php echo base_url()."assets/";?>js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/jquery-ui.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/popper.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/jquery.countdown.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/aos.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/jquery.fancybox.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>js/jquery.sticky.js"></script>

  
  <script src="<?php echo base_url()."assets/";?>js/main.js"></script>
    
</html>