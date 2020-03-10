<?php 
    include 'lib/session.php';
    Session::init();
 ?>
 <?php 
	
	include_once 'helper/format.php';
	include 'lib/database.php';

//tu dong goi ham trong thu muc classes
	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});
	
	$db = new Database();
	$fm = new Format();
	$ct = new cart();// cart
	$us = new user();
	$cat = new category();
	$product = new product();
	$br = new brand();


	?>



<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="image/newBG.png" />
<title>NGA THINKPAD - Kho Laptop dòng máy Thinkpad, xuất xứ Nhật Bản</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/aos.css" />
<!-- bat dau hieu ung la roi css -->
<link href="css/laroi.css" rel="stylesheet" type="text/css" media="all"/>
<!-- ket thuc hieu ung la roi -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body>
    
  <div class="wrap">
      	<!-- bat dau hieu ung la roi -->
		<div id="leaves">
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i> 
</div>
	<!-- ket thuc hieu ung la roi -->
	<div class="header">
		
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="image/logo.jpg" style=" width: 300px; border-radius:50%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;" alt="" /></a>
			</div>
			  <div class="header_top_right">
			      <div class="search_box">
				    <form action="search.php" name="frm-form" method="post">
				    	<input type="text" name="search" value="Mã máy. VD: E7270" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mã máy. VD: E7270';}">
						<input type="submit" name="submit" value="Tìm">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
							<strong class="opencart"> </strong>
								<span class="cart_title">Cart</span>
									<span class="no_product">(empty)</span>
							</a>
						</div>
			      </div>
	    
			<div class="currency" title="currency">
					<div id="currency" class="wrapper-dropdown" tabindex="1">$
						<strong class="opencart"> </strong>
						<ul class="dropdown">
							<li><a href="#"><span>$</span>Dollar</a></li>
							<li><a href="#"><span>€</span>Euro</a></li>
						</ul>
					</div>
					 <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#currency') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown').removeClass('active');
				});

			});

		</script>
   </div>
		   <div class="login">
		   	   <span><a href=""><img src="images/login.png" alt="" title="login"/></a></span>
		   </div>
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
	<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="index.php">TRANG CHỦ</a></li>
			
			<li><a href="phanloai.php?p=duoi3">Dưới 3 triệu</a></li>
			<li><a href="phanloai.php?p=3den5">Từ 3.1 - 5tr</a></li>
			<li><a href="phanloai.php?p=5den7">Từ 5.1 - 7tr</a></li>
			<li><a href="phanloai.php?p=7den10">Từ 7.1 - 10tr</a></li>
			<li><a href="phanloai.php?p=tren10">Trên 10tr</a></li>
			<li><a href="phanloai.php?p=xahang">Xả hàng</a></li>
				<li><a href="baohanh.php">Bảo Hành</a></li>
				
			
		
			
			
			
			<div class="clear"> </div>
		</ul>
		</nav> 
		<script src="js/menu.js" type="text/javascript"></script>
		</div>
		<div class="header_bottom" style="padding-top: 20px;
    padding-bottom: 30px;">
		
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="image/a.png" alt=""/></li>
						<li><img src="image/bannerSua.jpg" alt=""/></li>
						<li><img src="image/bannerVe.jpg" alt=""/></li>
						<li><img src="image/vayTra.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	    <div class="header_bottom_left">
			<div class="section group">
							
				<div class="listview_1_of_2 images_1_of_2">
					
						  <a href="https://www.facebook.com/ngathinkpad/" 
						  target="_blank"><img src="image/lfp.jpg" alt="" /></a>
					
					
				</div>
			</div>
			<div class="section group">
							
				<div class="listview_1_of_2 images_1_of_2">
					
						  <img src="image/war.jpg" alt="" />
					
					
				</div>
			</div>
		  <div class="clear"></div>
		</div>
	  <div class="clear"></div>
  </div>