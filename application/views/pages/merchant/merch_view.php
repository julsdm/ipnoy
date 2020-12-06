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

  

  
    <img src="<?php echo base_url()."assets/";?>images/banner.jpg" alt="Image" class="img-fluid" style="opacity: 1";>
        <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

    
    <div class="site-section" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
           
            <p style="color:black";>IPnoy carries everyday products made from indigenous materials that are modern in design, world-class in packaging and are competitively priced</p>
            <h1 class="section-title mb-3"><a href="<?php echo site_url('merchant/dashboard/goboost');?>"  >Boost Now </a></h1>

            <button data-toggle="modal" data-target="#boostnow" type="button" class="btn btn-primary">Boost Now</button>
            <p  style="color:black";>And let yourself be featured in the homepage for the customers to see</p>
          </div>
        </div>
    

    <div class="modal fade" id="boostnow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo site_url('merchant/dashboard/goboost');?>">
            <div class="form-group">
            <label >You are currently boosted for </label>
              <input type="text" class="form-control" name="penddate"  placeholder="<?php foreach($users_data as $row){
                echo $row->pendmerchboost . " months starting from ";
                echo $row->datepend;}?>
                " disabled>
              <label >Enter number of months you want to boost</label>
              <input type="text" class="form-control" name="penddate"  placeholder="In months">
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