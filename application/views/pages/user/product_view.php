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
              <?php if(empty($this->session->userdata('customer_username'))){?>
                <li><a href="<?php echo site_url('Home') ?>" class="nav-link">Home</a></li>
                <li><a href="<?php echo site_url('user/Product') ?>" class="nav-link">Products</a></li>
                <li><a href="<?php echo site_url('user/Userlogin')?>" class="nav-link">Login</a></li>
                <li><a href="<?php echo site_url('registration') ?>" class="nav-link">Register</a></li>
              <?php }
              else {?>
                <li><a href="<?php echo site_url('user/Dashboard')?>" class="nav-link">Home</a></li>
                <li><a href="<?php echo site_url('user/Profile')?>" class="nav-link">Profile</a></li>
                <li><a href="<?php echo site_url('user/Product') ?>" class="nav-link">Shop</a></li>
                <li><a href="<?php echo site_url('user/cart')?>" class="nav-link">Cart</a></li>
                <li><a href="<?php echo site_url('user/userorders')?>" class="nav-link">Orders</a></li>
                <li><a href="<?php echo site_url('user/dashboard/logout')?>" class="nav-link">Logout</a></li>
              <?php }?>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

</div>
</div>

</header>




<img src="<?php echo base_url()."assets/";?>images/home-banner.jpg" alt="Image" class="img-fluid">

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
    <h2 class="section-title mb-3">Our Products</h2>
    <p>IPnoy carries everyday products made from indigenous materials that are modern in design, world-class in packaging and are competitively priced</p>
  </div>
</div>
</div>
</div>
</div>
<form action="<?php echo site_url('user/product/filt') ;?> "  method="post">
    <h3 style="color:black;">Search Here:</h3>
    <div class="form-group col-lg-12">
     <input type="text" class="form-control" id="name" name="search" placeholder="Product Name">
    </div>
    
    <label >Categories:</label>

<select name="category">
<option value="" selected disabled hidden>Select Tribe: </option>
  <option value="Igorot">Igorot</option>
  <option value="Aeta">Aeta</option>
  <option value="IP1">IP1</option>
  <option value="IP2">IP2</option>
</select>
<label >Categories:</label>
<select name="type">
<option value="" selected disabled hidden>Select Item Type: </option>
  <option value="Accessory">Accesory</option>
  <option value="Bag">Bag</option>
  <option value="Instrument">Instrument</option>
  <option value="Handicraft">Handicraft</option>
</select>

<div class="form-group col-md-12">
<button type="submit" value="submit" class="btn submit_btn2 form-control">Search</button>
</div>
</form>

    <!-- Shop Section Begin -->
    <section class="shop spad">
    <div class="container-fluid text-center">
<?php foreach($product as $row){ ?>
    <div class="container-fluid text-center"><a href="<?php echo site_url('user/product/chooseproduct');?>/<?php echo $row->prodid;?>"><h4 style="color:black;"><?php echo $row->prodname;?></a></div>


    <img class="media-object" src="<?php echo $row->prodpic;?>" style="container-fluid">

    <div class="container"  style="color:black";> <?php echo $row->description;?>  </div>
        
                
                

     <?php foreach($merchant as $row2){
     if($row2->merchid == $row->merchid){?>
      <div class="container" style="color:black";> Shop:  <a href="<?php echo site_url('user/product/choosemerchant');?>/<?php echo $row2->merchid;?>"><?php echo $row2->merch_username;?> </a></div> 
     
      <form action="<?php echo site_url('user/product/pendingorder') ?>"   method="post">
      <div class="">
			    		    <input class="text-center" value="<?php echo $row->quantity;?> in stocks" name="quantity" type="text" disabled>
			    </div>
                <div class="">
			    		    <input class="text-center" value="<?php echo $row->price;?>" name="pricedisplay" type="number" disabled>
			    </div>
      <div class="text-cente">
			    		    <input class="text-center" placeholder="Order How many?" name="orderquantity" type="number" required>
		</div>
        <input class="hidden" value="<?php echo $row->price;?>" name="price" type="number" >
         <input type="hidden" id="custId" name="merchid" value="<?php echo $row2->merchid;?>">
         <input type="hidden" id="custId" name="prodid" value="<?php echo $row->prodid;?>">
         <input type="hidden" id="custId" name="order_no" value="<?php echo time();?>">
         <input type="hidden" id="custId" name="customerid" value="<?php echo $this->session->userdata('customer_id');?>">
        
         <button type="submit" value="submit" class="">
      Add to cart
    </button>
    </form>
         <?php }?>
         <?php }?>
        
         
<br>
<br>
<br>
    <?php }?>

</div>
 <!-- .site-wrap -->

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