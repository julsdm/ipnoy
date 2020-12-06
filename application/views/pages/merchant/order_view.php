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

    <div class="container">
<?php foreach($track_data as $row){ ?>
    <h5 style="color:black";>Customer <span class="label label-default">ID</span></h5>
    <?php foreach($custo_data as $row3){
         if($row3->customer_id == $row->customer_id){?>
          <div class="container" style="color:red";><h4> <?php echo $row3->customer_username;?></h4> </div> 
          <div class="container"> <img class="media-object" src="<?php echo $row3->customer_picture;?>" style="width:100px;height:100px;"></div> 
          <?php }?>
          <?php }?><br>
    <?php foreach($prods_data as $row2){
         if($row2->prodid == $row->prod_id){?>
         <h5  style="color:black";>Product <span class="label label-default">Picture</span></h5>
              <div class="container"> <img class="media-object" src="<?php echo $row2->prodpic;?>" style="container-fluid"> </div><br> 
              <h5  style="color:black";>Product <span class="label label-default">Description</span></h5> 
              <div class="container"  style="color:black";> <?php echo $row2->description;?> </div>  
              <?php }?>
              <?php }?>
<form action="<?php echo site_url('merchant/order/updatestatus') ;?>" method="post">
  <label  style="color:black";>Set Delivery Status</label>
  <select name="status" <?php if($row->status == "Delivered"){echo 'disabled';}?>>
    <option value="<?php echo $row->status;?>" selected hidden><?php echo $row->status;?></option>
    <option value="Processing">Processing</option>
    <option value="Turned over to Logistics">Turned over to Logistics</option>
    <option value="Out For Delivery">Out For Delivery</option>
    <option value="Delivered">Delivered</option>
  </select>
  <br>
  <label  style="color:black";>Select your Courier</label>
  <select name="courier" <?php if($row->status == "Delivered"){echo 'disabled';}?>>
  <option value="<?php echo $row->courier;?>" selected hidden><?php echo $row->courier;?></option>
    <option value="J and T">J and T</option>
    <option value="LBC">LBC</option>
    <option value="Lalamove">Lalamove</option>
    <option value="Grab Deliver">Grab Deliver</option>
  </select>
  <input class="form-control" value="<?php echo $row->price;?>" name="price" type="text" >
  <input class="form-control" value="<?php echo $row->order_no;?>"  name="order_nosample" type="text" disabled>
  <input class="form-control" value="<?php echo $row->deliveryaddress;?>" name="deliveryaddress" type="text" disabled>
  <input class="form-control" value="<?php echo $row->couriertracking;?>" name="couriertracking" type="text" disabled>
  <input class="form-control" value="<?php echo $row->paymentoption;?>" name="paymentoption" type="text" disabled>
  <input class="form-control" value="<?php echo $row->custcontact;?>" name="custcontact" type="text" disabled>
  <input type="submit" <?php if($row->status == "Delivered"){echo 'disabled';}?> value="Submit">
 
  <input class="form-control" value="<?php echo $row->customer_id;?>" name="customer_id" type="text" hidden>
  <input class="form-control" value="<?php echo $row->merch_id;?>" name="merch_id" type="text" hidden>
  <input class="form-control" value="<?php echo $row->order_no;?>" name="order_no" type="text" hidden>

</form>
    <br>
    <br>
    <br>
    <?php }?>

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