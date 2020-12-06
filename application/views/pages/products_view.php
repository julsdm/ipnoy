<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IPNoy Crafts Shop| Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url()."assets1/";?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()."assets1/";?>ss/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()."assets1/";?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()."assets1/";?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()."assets1/";?>css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()."assets1/";?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()."assets1/";?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()."assets1/";?>css/style.css" type="text/css">
</head>

<style>
body{
	background-image: url("https://s.itl.cat/pngfile/s/64-648651_sb06-wallpaper-pastel-music-blur-brown-pastel-wallpaper.jpg");
	background-attachment: fixed;
}
</style>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href=""><img src="<?php echo base_url()."assets1/";?>img/iplogo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Settings</a>
            <a href="#">Logout</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="<?php echo site_url('user/Dashboard') ?>"><img src="<?php echo base_url()."assets1/";?>img/iplogo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="<?php echo site_url('user/Dashboard')?>">Home</a></li>
                            <li><a href="<?php echo site_url('user/Profile') ?>">Profile</a></li>
                            <li class="active"><a href="./shop.html">Shop</a></li>
                            <li><a href="#">Cart</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo site_url('user/Cart')?>">Shop Cart</a></li>
                                    <li><a href="./blog-details.html">Track Product</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contact</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="#">Settings</a>
                            <a href="<?php echo site_url('user/dashboard/logout')?>">Logout</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

<form action="<?php echo site_url('user/product/filt') ;?> "  method="post">
    <h1>Search Here:</h1>
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
  <option value="Accesory">Accesory</option>
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
    <div class="container">
<?php foreach($product as $row){ ?>
    <div class="container"><a href="<?php echo site_url('user/product/chooseproduct');?>/<?php echo $row->prodid;?>"><?php echo $row->prodname;?></a></div>

    
    <img class="media-object" src="<?php echo $row->prodpic;?>" style="width:100px;height:100px;">

    <div class="container"> <?php echo $row->description;?>  </div>
        
                
                

     <?php foreach($merchant as $row2){
     if($row2->merchid == $row->merchid){?>
      <div class="container"> <a href="<?php echo site_url('user/product/choosemerchant');?>/<?php echo $row2->merchid;?>"><?php echo $row2->merch_username;?> </a></div> 
     
      <form action="<?php echo site_url('user/product/pendingorder') ?>"   method="post">
      <div class="form-group">
			    		    <input class="form-control" value="<?php echo $row->quantity;?> in stocks" name="quantity" type="text" disabled>
			    </div>
                <div class="form-group">
			    		    <input class="form-control" value="<?php echo $row->price;?>" name="pricedisplay" type="number" disabled>
			    </div>
      <div class="form-group">
			    		    <input class="form-control" placeholder="Order How many?" name="orderquantity" type="number" required>
		</div>
        <input class="hidden" value="<?php echo $row->price;?>" name="price" type="number" >
         <input type="hidden" id="custId" name="merchid" value="<?php echo $row2->merchid;?>">
         <input type="hidden" id="custId" name="prodid" value="<?php echo $row->prodid;?>">
         <input type="hidden" id="custId" name="order_no" value="<?php echo time();?>">
         <input type="hidden" id="custId" name="customerid" value="<?php echo $this->session->userdata('customer_id');?>">
        
         <button type="submit" value="submit" class="btn submit_btn2 form-control">
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
    </section>
    <!-- Shop Section End -->

   

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="<?php echo base_url()."assets1/";?>img/iplogo.png" alt=""></a>
                        </div>
                        <p>IPnoy carries everyday products made from indigenous materials that are modern in design, world-class in packaging and are competitively priced</p>
                        <div class="footer__payment">
                            <a href="#"><img src="<?php echo base_url()."assets1/";?>img/payment/payment-1.png" alt=""></a>
                            <a href="#"><img src="<?php echo base_url()."assets1/";?>img/payment/payment-2.png" alt=""></a>
                            <a href="#"><img src="<?php echo base_url()."assets1/";?>img/payment/payment-3.png" alt=""></a>
                            <a href="#"><img src="<?php echo base_url()."assets1/";?>img/payment/payment-4.png" alt=""></a>
                            <a href="#"><img src="<?php echo base_url()."assets1/";?>img/payment/payment-5.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget">
                        <h6>Quick links</h6>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="footer__widget">
                        <h6>Account</h6>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Orders Tracking</a></li>
                            <li><a href="#">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-8">
                    <div class="footer__newslatter">
                        <h6>NEWSLETTER</h6>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url()."assets1/";?>js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()."assets1/";?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()."assets1/";?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url()."assets1/";?>js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url()."assets1/";?>js/mixitup.min.js"></script>
    <script src="<?php echo base_url()."assets1/";?>js/jquery.countdown.min.js"></script>
    <script src="<?php echo base_url()."assets1/";?>js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url()."assets1/";?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()."assets1/";?>js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url()."assets1/";?>js/main.js"></script>

</html>