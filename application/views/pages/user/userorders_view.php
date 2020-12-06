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


          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

            <!-- .site-wrap 
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
-->


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
<?php foreach($users_data as $row){ ?>
    <?php foreach($prods as $row2){
         if($row2->prodid == $row->prod_id){?>
         <h6>Product <span class="label label-default">Name</span></h6>
          <div class="container" style="color:red;"> <?php echo $row2->prodname;?> </div> 
          <h6>Product <span class="label label-default">Picture</span></h6>
          <div class="container"> <img class="media-object" src="<?php echo $row2->prodpic;?>" style="container-fluid"></div>
          <?php }?>
          <?php }?><br>
    <?php foreach($merchant as $row3){
         if($row3->merchid == $row->merch_id){?>
             <h6>Shop Name: <?php echo $row3->merch_username;?></h6>
             <div class="container"> <img class="media-object" src="<?php echo $row3->merchpic;?>" style="width:100px;height:100px;"> </div> 
            
    <!--          <div class="container" style="color:red;">  </div>   -->
              <?php }?>
              <?php }?><br>
              <label>Delivery Status</label>
    <div class="form-group">
			    		    <input class="form-control" value="<?php echo $row->status;?>" name="eventid" type="text" disabled>
	 </div>
  <br><br>
  <h6>Delivery Courier
    <div class="form-group">
			    		    <input class="form-control" value="<?php echo $row->courier;?>" name="eventid" type="text" disabled>
    </div>
    <?php if($row->status == "" && $row->paymentoption == "Bank Payment" ){?>
      <div class="container">
    <form action="<?php echo site_url('user/userorders/sendtransaction') ;?>" method="post" enctype="multipart/form-data">
                                    <h4>Transaction Picture</h4>
                                        <input type="file" id="subject" name="transacpic" >
                                    <div class="form-group col-md-12">
                                    <?php foreach($bank as $row4){
                                       if($row4->merchid == $row->merch_id){?>
                                       <label for="num">Account Number</label>
                                       
                                        <input value="<?php echo $row4->bank_num;?>" name="bank1" id="num" type="text" disabled>
                                        <label for="accname">Account Name</label>
                                       
                                        <input value="<?php echo $row4->acc_name;?>" name="bank2" id="accname" type="text" disabled>
                                        <label for="bankname">Bank Name</label>
                                        <input value="<?php echo $row4->bank;?>" name="bank3" id="bankname" disabled>
                                        <?php }?>
                                        <?php }?>
                                        <input class="form-control" value="<?php echo $row->merch_id;?>" name="merch_id" type="text" hidden>
                                        <input class="form-control" value="<?php echo $row->prod_id;?>" name="prod_id" type="text" hidden>
                                        <input class="form-control" value="<?php echo $row->order_no;?>" name="order_no" type="text" hidden>
                                        
                                        <button type="submit" value="submit" class="btn submit_btn2 form-control">Send Pic</button>
                                    </div>
                                </form>
                                </div>
    <?php }?>
    <h6>Address
    <div class="form-group">
			    		    <input class="form-control" value="<?php echo $row->deliveryaddress;?>" name="eventid" type="text" disabled>
    </div>
                  <?php if($row->status == "Delivered" ){?>
                    <form action="<?php echo site_url('user/userorders/givefeedback');?>"  method="post">
                  <label>Comment Feedback</label>
                  <textarea  name="feedback" rows="10" cols="50"></textarea>
                  <label >Rating:</label>
                  <select name="rating">
                  <option value="" selected hidden>Select Item Type: </option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  </select>
                  <input class="form-control" value="<?php echo $row->merch_id;?>" name="merchant" type="text" hidden>
                  <input class="form-control" value="<?php echo $row->prod_id;?>" name="product" type="text" hidden>
                  <input class="form-control" value="<?php echo $row->delivery_id;?>" name="orderid" type="text" hidden>
                  <button type="submit" value="submit" class="btn submit_btn2 form-control">Submit Feedback</button>


                  <?php }?>
                  </form>
                  <h6>Order ID<input class="form-control" value="<?php echo $row->order_no;?>" name="orderid" type="text" disabled >
                  <h6>Total<input class="form-control" value="<?php echo $row->price;?>" name="orderid" type="text" disabled >
	 
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