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
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">IPnoy<span class="text-primary"></span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?php echo site_url('user/Dashboard')?>" class="nav-link">Home</a></li>
                <li><a href="<?php echo site_url('user/Profile')?>" class="nav-link">Profile</a></li>
                <li><a href="<?php echo site_url('user/Product') ?>" class="nav-link">Shop</a></li>
                <li><a href="<?php echo site_url('user/cart')?>" class="nav-link">Cart</a></li>
                <li><a href="<?php echo site_url('user/userorders')?>" class="nav-link">Orders</a></li>
                <li><a href="<?php echo site_url('user/dashboard/logout')?>" class="nav-link">Logout</a></li>
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
<?php foreach($cust as $row){ ?>
    <form action="<?php echo site_url('user/profile/updateuser') ;?>" method="post" enctype="multipart/form-data">  
                                    <div class="form-group col-lg-12">
                                    <img class="media-object" src="<?php echo $row->customer_picture;?>" style="width:200px;height:200px;">
                                    <h4  style="color:black";>Want to Change?</h4>
                                    <input type="radio" id="Yes" name="picchange" value="yes">
                                    <label  style="color:black"; for="Yes">Yes</label>
                                    <input type="radio" id="No" name="picchange" value="no">
                                    <label  style="color:black"; for="No">No</label><br>
                                        <input  style="color:black"; type="file" id="subject" name="userpic"><br>
<br>                                    <h5 style="color:black";>Username <span class="label label-default"></span></h5>   
                                        <input type="text" value = "<?php echo $row->customer_username;?>" class="form-control" id="email" name="username" >
                                    </div>
                                    <div class="form-group col-lg-12">
                                    <h5  style="color:black";>Password <span class="label label-default"></span></h5>   
                                        <input type="password" value = "<?php echo $row->customer_password;?>" class="form-control" id="email" name="password">
                                    </div>
                                    <div class="form-group col-lg-12">
                                    <h5 style="color:black";>Contact Number <span class="label label-default"></span></h5>   
                                        <input type="text" value = "<?php echo $row->contactno;?>" class="form-control" id="email" name="contactno">
                                    </div>
                                    
                                    
                                    
                                        

                                        <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="">Save Changes</button>
                                        
                                    </div>
                                    </div>
                                    <?php }?>
                                </form>
                               
 </div>
 <div class="container">
 <h5  style="color:black";>Primary Address : </h5>
 <form action="<?php echo site_url('user/profile/setprimaryadd');?>"  method="post">
 <label  style="color:black"; for="primaryadd">Choose Primary Address : </label>
        <select name="deliveryaddress" id="primaryadd">
        <option value="<?php echo $this->session->userdata('primarycity')?> , <?php echo $this->session->userdata('primaryprovince')?>"selected hidden><?php echo $this->session->userdata('primarycity')?> , <?php echo $this->session->userdata('primaryprovince')?></option>
        <?php foreach($address as $row4){ ?>
        <option value="<?php echo $row4->add_id;?>"><?php echo $row4->add_city;?>  , <?php echo $row4->add_province;?></option>
        <?php }?>
         </select>  
         <button type="submit" value="submit" class="">
      Save Config
    </button>
    </form>
         </div>
         <div class="container"><button data-toggle="modal" data-target="#addaddress" type="button" class="btn btn-primary">Add Address</button></div>
         
<br>
 <div class="container">
 <h5  style="color:black";>Addresses : </h5>
<?php foreach($address as $row2){ ?>
    <form  style="color:black"; action="<?php echo site_url('user/profile/deleteadd') ;?>" method="post" enctype="multipart/form-data">  
                                    <div class="form-group col-lg-12">
                                   <p> <?php echo $row2->add_city;?>  , <?php echo $row2->add_province;?></p>
                                        <div class="form-group col-md-12">
                                        <input type="text" value = "<?php echo $row2->add_id;?>" class="form-control" name="addid" hidden>
                                        <button type="submit" value="submit" class="">Delete Address</button>
                                        
                                    </div>
                                    </div>
                                    <?php }?>
                                </form>
 </div>



  </div> <!-- .site-wrap -->
  <!-- Add users Modal -->
  <div class="modal fade" id="addaddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo site_url('user/profile/addadd')?>">
            <div class="form-group">
              <label >City</label>
              <input type="text" class="form-control" name="city"  placeholder="city">
            </div>
            <div class="form-group">
              <label >Province</label>
              <input type="text" class="form-control" name="province"  placeholder="province">
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