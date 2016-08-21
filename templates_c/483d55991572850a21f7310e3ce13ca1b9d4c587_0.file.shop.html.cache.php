<?php
/* Smarty version 3.1.30, created on 2016-08-21 16:16:47
  from "D:\Working\VNPT\Training\PHPMVC\Project\MobileShop\templates\shop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57b9d3ef411492_07071613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '483d55991572850a21f7310e3ce13ca1b9d4c587' => 
    array (
      0 => 'D:\\Working\\VNPT\\Training\\PHPMVC\\Project\\MobileShop\\templates\\shop.html',
      1 => 1468817308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57b9d3ef411492_07071613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3267557b9d3ef25f6d8_17343831';
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop | Orion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon
============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    
    <!-- google font CSS
============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300,800' rel='stylesheet' type='text/css'>

    <!-- CSS  -->

    <!-- Bootstrap CSS
============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- owl.carousel CSS
============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- owl.carousel CSS
============================================ -->
    <link rel="stylesheet" href="css/jquery-ui.css">

    <!-- owl.transitions CSS
============================================ -->
    <link rel="stylesheet" href="css/owl.transitions.css">

    <!-- font-awesome.min CSS
============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- icon-7-stroke font CSS
============================================ -->
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet">    
	<!-- mean menu CSS
============================================ -->
    <link href="css/meanmenu.min.css" rel="stylesheet">

    <!-- animate CSS
============================================ -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Fancybox CSS
============================================ -->
    <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">

    <!-- nivo slider CSS
============================================ -->
    <link rel="stylesheet" href="custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="custom-slider/css/preview.css" type="text/css" media="screen" />

    <!-- chosen.min.css CSS
============================================ -->
    <link rel="stylesheet" href="css/chosen.min.css">

    <!-- normalize CSS
============================================ -->
    <link rel="stylesheet" href="css/normalize.css">

    <!-- main CSS
============================================ -->
    <link rel="stylesheet" href="css/main.css">

    <!-- style CSS
============================================ -->
    <link rel="stylesheet" href="style.css">

    <!-- responsive CSS
============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <?php echo '<script'; ?>
 src="js/vendor/modernizr-2.8.3.min.js"><?php echo '</script'; ?>
>

</head>

<body>
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <!-- Add your site or application content here -->
    <div class="shop-page-wraper">
    <!-- header area start -->
    <div class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="single-drop">
                            <nav>
                                <ul>
                                    <li>
                                        <label><i class="fa fa-cog"></i>Currency: </label><a class="xero" href=""><span>USD</span><i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li><a href="#">GBP</a></li>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <label><i class="fa fa-globe"></i>Language: </label><a href=""><span>English</span><i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li><a href="#">Brazilian</a></li>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">German</a></li>
                                            <li><a href="#">Russian</a></li>
                                            <li><a href="#">Spanish</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="single-menu">
                            <nav>
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="checkout.html">My Cart</a></li>
                                    <li><a class="lastbdr" href="my-account.html">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="logo-area">
                            <a href="index.html"><img src="img/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-9 col-xs-12">
                        <div class="block-header">
                            <div class="phone"><i class="fa fa-phone"></i>(+880) 177 021 7714</div>
                            <div class="email"><a href="mailto:admin@bootexperts.com"><i class="fa fa-envelope-o"></i>admin@<span>bootexperts.com</span></a></div>
                        </div>
                        <div class="search-categori">
                            <div class="categori">
                                <form id="select-categoris" method="post" class="form-horizontal">
                                    <select name="language" class="orderby">
                                        <option value="">Categories</option>
                                        <option value="12">Clothing</option>
                                        <option value="21">_Dresses </option>
                                        <option value="25">_ _Coctail</option>
                                        <option value="26">_ _Day </option>
                                        <option value="27">_ _Evening </option>
                                        <option value="28">_ _Sundresses</option>
                                        <option value="29">_ _Sweters</option>
                                        <option value="30">_ _Belts</option>
                                        <option value="22">_Accessories</option>
                                        <option value="31">_ _Hair Accessories </option>
                                        <option value="32">_ _Hats </option>
                                        <option value="33">_ _Gloves </option>
                                        <option value="34">_ _Lifestyles</option>
                                        <option value="35">_Medical</option>
                                        <option value="36">_ _Phasellus</option>
                                        <option value="23">_ _laptop </option>
                                        <option value="37">_ _Phasellus</option>
                                        <option value="38">_ _Healthcare </option>
                                        <option value="39">_Electronic </option>
                                        <option value="40">_ _Cosmetic </option>
                                        <option value="13">_ _Electronics </option>
                                        <option value="24">_ _camcorder </option>
                                        <option value="46">_ _Healthcare </option>
                                        <option value="47">_ _Laptop</option>
                                        <option value="48">_ _Camera</option>
                                        <option value="41">_ _Medical</option>
                                        <option value="49">_ _Camera</option>
                                        <option value="50">_ _Camcorders</option>
                                        <option value="51">_ _Camcorders</option>
                                        <option value="42">_ _Healthcare</option>
                                        <option value="52">_ _Medical</option>
                                        <option value="53">_ _Healthcare</option>
                                        <option value="54">_ _Healthcare </option>
                                        <option value="14">_Sports</option>
                                        <option value="43">_ _category 1</option>
                                        <option value="60">_ _day </option>
                                        <option value="61">_ _evening </option>
                                        <option value="62">_ _night </option>
                                        <option value="44">_ _category 2 </option>
                                        <option value="63">_kids </option>
                                        <option value="64">_men </option>
                                        <option value="65">_Women </option>
                                        <option value="45">_ _category 3 </option>
                                        <option value="66">_ _clothing </option>
                                        <option value="67">_ _Accessories </option>
                                        <option value="15">_ _Smartphone</option>
                                        <option value="55">_ _category 1 </option>
                                        <option value="56">_ _category 2 </option>
                                        <option value="57">_ _category 3 </option>
                                        <option value="16">_ _Beauty </option>
                                        <option value="58">_ _category 1 </option>
                                        <option value="59">_ _category 2 </option>
                                        <option value="17">_ _Bags, Shoes</option>
                                        <option value="18">_Networking </option>
                                        <option value="19">_ _Accessories </option>
                                        <option value="20">_ _Entertainment </option>
                                    </select>
                                </form>
                            </div>
                            <div class="search-box">
                                <form action="#">
                                    <input type="text" class="form-control input-sm" maxlength="64" placeholder="Enter your search key ... ">
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 hidden-sm col-xs-12">
                        <div class="shopping-cart expand">
                            <a href="cart.html"><span>Shopping Cart(2)</span></a>
                            <div class="restrain small-cart-content">
                                <ul class="cart-list">
                                    <li>
                                        <a class="sm-cart-product" href="product-details.html">
                                            <img src="img/product/sscart-1.jpg" alt="">
                                        </a>
                                        <div class="small-cart-detail">
                                            <a class="remove" href="#"><i class="fa fa-times-circle-o"></i></a>
                                            <a href="#" class="edit-btn"><img src="img/btn_edit.gif" alt="Edit Button"></a>
                                            <a class="small-cart-name" href="product-details.html">Voluptas nulla</a>
                                            <span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="sm-cart-product" href="product-details.html">
                                            <img src="img/product/sscart-2.jpg" alt="">
                                        </a>
                                        <div class="small-cart-detail">
                                            <a class="remove" href="#"><i class="fa fa-times-circle-o"></i></a>
                                            <a href="#" class="edit-btn"><img src="img/btn_edit.gif" alt="Edit Button"></a>
                                            <a class="small-cart-name" href="product-details.html">Donec ac tempus</a>
                                            <span class="quantitys"><strong>1</strong>x<span>$40.00</span></span>
                                        </div>
                                    </li>
                                </ul>
                                <p class="total">Subtotal: <span class="amount">$155.00</span></p>
                                <p class="buttons">
                                    <a href="checkout.html" class="button">Checkout</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- main-menu start -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="bias"><a href="index.html">Home</a>
                                        <div class="mega-menu home2-menu mega820">
                                            <div class="mega-catagory2 hverson">
                                                <div class="version-cat">
                                                    <a href="index.html"><img src="img/thumbnail-home1.png" alt=""></a>
                                                    <h4> <a href="index.html">Home-1 Full-Width</a></h4>
                                                </div>
                                            </div>
                                            <div class="mega-catagory2 hverson">
                                                <div class="version-cat">
                                                    <a href="index-2.html"><img src="img/thumbnail-home2.png" alt=""></a>
                                                    <h4> <a href="index-2.html">Home-2 Boxed</a></h4>
                                                </div>
                                            </div>
                                            <div class="mega-catagory2 hverson">
                                                <div class="version-cat">
                                                    <a href="index-3.html"><img src="img/thumbnail-home3.png" alt=""></a>
                                                    <h4> <a href="index-3.html">Home-3 Electronics</a></h4>
                                                </div>
                                            </div>
                                            <div class="mega-catagory2 hverson">
                                                <div class="version-cat">
                                                    <a href="index-4.html"><img src="img/thumbnail-home4.png" alt=""></a>
                                                    <h4> <a href="index-4.html">Home-4 Business</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="shop.html">All Stores</a>
                                        <div class="mega-menu">
                                            <div class="mega-catagory">
                                                <a href="shop.html">
                                                    <img src="img/menu/clothing_hover.png" alt="" />
                                                    <span>Clothing</span>
                                                </a>
                                                <a href="shop.html">
                                                    <img src="img/menu/diamond_hover.png" alt="" />
                                                    <span>Jewellry</span>
                                                </a>
                                            </div>
                                            <div class="mega-catagory">
                                                <a href="shop.html">
                                                    <img src="img/menu/football_hover_1.png" alt="" />
                                                    <span>Sports</span>
                                                </a>
                                                <a href="shop.html">
                                                    <img src="img/menu/tools_hover_1.png" alt="" />
                                                    <span>Equipments</span>
                                                </a>
                                            </div>
                                            <div class="mega-catagory">
                                                <a href="shop.html">
                                                    <img src="img/menu/leaf_hover.png" alt="" />
                                                    <span>Health</span>
                                                </a>
                                                <a href="shop.html">
                                                    <img src="img/menu/clock_hover_1.png" alt="" />
                                                    <span>Watches</span>
                                                </a>
                                            </div>
                                            <div class="mega-catagory">
                                                <a href="shop.html">
                                                    <img src="img/menu/lab_hover.png" alt="" />
                                                    <span>Medical</span>
                                                </a>
                                                <a href="shop.html">
                                                    <img src="img/menu/bookmark_hover_1.png" alt="" />
                                                    <span>Books</span>
                                                </a>
                                            </div>
                                            <div class="mega-catagory">
                                                <a href="shop.html">
                                                    <img src="img/menu/speaker_hover_4.png" alt="" />
                                                    <span>Electronics</span>
                                                </a>
                                                <a href="shop.html">
                                                    <img src="img/menu/gift_hover_1.png" alt="" />
                                                    <span>Gifts</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="shop.html">New Arrivals</a>
                                        <div class="mega-menu carousel-btn mega-menu-2 pt20 pb20">
                                            <div class="menu-carousel">
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-1.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-2.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="sale"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img alt="" src="img/product/product-5.jpg" class="primary-image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                                <span class="old-rpice"><del>$250.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-4.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="sale"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img alt="" src="img/product/product-5.jpg" class="primary-image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                                <span class="old-rpice"><del>$250.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-6.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="shop.html">Best Offers</a>
                                        <div class="mega-menu carousel-btn mega-menu-3 pb20 pt20">
                                            <div class="menu-carousel">
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-6.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-5.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="sale"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img alt="" src="img/product/product-5.jpg" class="primary-image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                                <span class="old-rpice"><del>$250.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-3.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="sale"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img alt="" src="img/product/product-5.jpg" class="primary-image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                                <span class="old-rpice"><del>$250.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-1.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="shop.html">Hot Sale</a>
                                        <div class="mega-menu mega-menu-4 pb20 pt20">
                                            <div class="menu-carousel carousel-btn">
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-1.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="sale"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img alt="" src="img/product/product-5.jpg" class="primary-image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                                <span class="old-rpice"><del>$250.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-3.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="sale"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img alt="" src="img/product/product-5.jpg" class="primary-image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                                <span class="old-rpice"><del>$250.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-5.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="col-xs-12 col-padd">
                                                    <div class="single-product">
                                                        <div class="product-label">
                                                            <div class="new"></div>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-image" src="img/product/product-6.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$222.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fashion-tnd"><a href="shop.html">Fashion Trend</a>
                                        <div class="mega-menu mega-menu-5 ft-mega">
                                            <div class="block-menu">
                                                <div class="block-menu-img">
                                                    <img src="img/menu/custom_menu2.jpg" alt="" />
                                                </div>
                                                <div class="block-menu-content">
                                                    <h2 class="block-menu-title">Women Fashion Trend <br />spring <span>2016</span></h2>
                                                    <div class="static-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i>Sed ut perspiciatis</li>
                                                            <li><i class="fa fa-check"></i>Unde omnis</li>
                                                            <li><i class="fa fa-check"></i>Oste natus error</li>
                                                            <li><i class="fa fa-check"></i>Sit voluptatem</li>
                                                            <li><i class="fa fa-check"></i>Accusantium dolorem</li>
                                                        </ul>
                                                        <a class="button-link" href="#">View Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Check out</a></li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="wishlist.html">Wish List</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- main-menu end -->
                        <!-- mobile-menu-area start -->
                        <div class="mobile-menu-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="index.html">HOME</a>
                                                    <ul>
                                                        <li><a href="index.html">Home-01</a></li>
                                                        <li><a href="index-2.html">Home-02</a></li>
                                                        <li><a href="index-3.html">Home-03</a></li>
                                                        <li><a href="index-4.html">Home-04</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">All Stores</a></li>
                                                <li><a href="#">New Arrival</a></li>
                                                <li><a href="#">Best Offer</a></li>
                                                <li><a href="#">Hot Sale</a></li>
                                                <li><a href="#">Fashion Trande</a></li>
                                                <li><a href="#">PAGES</a>
                                                    <ul>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Check out</a></li>
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="single-product.html">Single Product</a></li>
                                                        <li><a href="wishlist.html">Wish List</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                        <li><a href="404.html">Error 404</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about-us.html">About US</a></li>
                                                <li><a href="contact.html">Contact US</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!--mobile menu area end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header area end -->

    <!-- creative banner area start -->
    <div class="creative-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="banner-box-1 banner-inner">
                        <div class="banner-title">FREE SHIPPING</div>
                        <div class="banner-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="banner-box-2 banner-inner bannneer">
                        <div class="banner-title">30 DAYS MONEY BACK</div>
                        <div class="banner-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="banner-box-3 banner-inner">
                        <div class="banner-title">PAYMENT SECURED</div>
                        <div class="banner-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- creative banner area end -->

    <!-- main area start -->
    <div class="main-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 nopadding-right">
                    <aside>
                        <div class="box_manufacrurer">
                            <div class="area-title">
                                <h3>Shop By</h3>
                            </div>
                            <ul class="box_list aside-padd">
                                <li><span>Manufacturer</span></li>
                                <li>
                                    <input type="checkbox">Manufacturers name 01</li>
                                <li>
                                    <input type="checkbox">Manufacturers name 02</li>
                                <li>
                                    <input type="checkbox">Manufacturers name 03</li>
                                <li>
                                    <input type="checkbox">Manufacturers name 04</li>
                                <li>
                                    <input type="checkbox">Manufacturers name 05</li>
                                <li>
                                    <input type="checkbox">Manufacturers name 06</li>
                                <li>
                                    <input type="checkbox">Manufacturers name 07</li>
                                <li>
                                    <input type="checkbox">Manufacturers name 08</li>
                                <li>
                                    <input type="checkbox">Manufacturers name 09</li>
                                <li>
                                    <input type="checkbox">Manufacturers name 10</li>
                            </ul>
                        </div>
                    </aside>
                    <!--aside 1 end-->
                    <aside class="shop-filter aside-padd">
                        <h3 class="price-title">Price Filter</h3>
                        <div class="price_filter">
                            <form action="#" method="get">
                                <div id="slider-range"></div>
                                <input type="text" id="amount" readonly>
                                <input type="submit" value="Filter">
                            </form>
                        </div>
                    </aside>
                    <!--aside 2 end-->
                    <aside>
                        <div class="usefull-product-slide">
                            <div class="area-title">
                                <h3>Upsell Products</h3>
                            </div>
                            <div class="total-usefull-product carousle-pagi common4 ">
                                <!-- single-product start -->
                                <div class="col-xs-12">
                                    <div class="single-product">
                                        <div class="product-label">
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img alt="" src="img/product/product-5.jpg" class="primary-image">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-xs-12">
                                    <div class="single-product">
                                        <div class="product-label">
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img alt="" src="img/product/product-5.jpg" class="primary-image">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                                <span class="old-rpice"><del>$250.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-xs-12">
                                    <div class="single-product">
                                        <div class="product-label">
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img alt="" src="img/product/product-5.jpg" class="primary-image">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                            </div>
                        </div>
                    </aside>
                    <!--aside 3 end-->
                    <aside>
                        <div class="tag-area">
                            <div class="area-title">
                                <h3>Popular Tags</h3>
                            </div>
                            <ul class="aside-padd">
                                <li> <a href="#">html5</a></li>
                                <li> <a href="#">css3</a></li>
                                <li> <a href="#">Joomla</a></li>
                                <li> <a href="#">Jquery</a></li>
                                <li> <a href="#">css</a></li>
                                <li> <a href="#">Content</a></li>
                                <li> <a href="#">clothing</a></li>
                                <li> <a href="#">shoes</a></li>
                                <li> <a href="#">gifts</a></li>
                                <li> <a href="#">electronics</a></li>
                            </ul>
                        </div>
                    </aside>
                    <!--aside 4 end-->
                    <aside>
                        <div class="newsletter-area">
                            <div class="area-title">
                                <h3>Newsletter</h3>
                            </div>
                            <div class="aside-padd">
                                <div class="vina-newsletter">
                                    <form method="post" action="#">
                                        <div class="input-box">
                                            <label>Sign Up for Our Newsletter:</label>
                                            <input type="email" placeholder="Email" name="email">
                                        </div>
                                        <div class="input-box">
                                            <input type="submit" class="submit-btn" name="submit" value="Subscribe">
                                        </div>
                                    </form>
                                </div>
                                <div class="web-links">
                                    <ul>
                                        <li><a href="#" class="rss"><i class="fa fa-rss"></i>
                    </a></li>
                                        <li><a href="#" class="ldin"><i class="fa fa-linkedin"></i>
                    </a></li>
                                        <li><a href="#" class="face"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i>
                    </a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i>
                    </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--aside 5 end-->
                </div>

                <!--col-md-3-->
                <div class="col-md-9 col-sm-9 nopadding-left">
                    <div class="ambit-key">
                        <div class="col-md-12 pt40">
                            <ol class="breadcrumb">
                                <li class="home"><a href="index.html" title="Go to Home Page">Home</a></li>
                                <li class="active">Shop</li>
                            </ol>
                            <div class="shop-banner mt20 mb20">
                                <a href="#"><img src="img/clothing.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="shop-product-area">
                            <!-- area title start -->
                            <div class="col-sm-12">
                                <div class="area-title bdr">
                                    <h2>Clothing</h2>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!-- area title end -->
                            <div class="short-area mt20">
                                <form id="sort_count" name="sort_count" method="post" action="#">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="sort-by">
                                            <label>Sort by:</label>
                                            <div class="select-sort-by">
                                                <select class="inputbox" name="order" id="order">
                                                    <option selected="selected">Name</option>
                                                    <option value="1">Predefined</option>
                                                    <option value="2">Price</option>
                                                    <option value="3">Date</option>
                                                    <option value="5">Rating</option>
                                                    <option value="6">Popular</option>
                                                </select>
                                                <a href="#"><i class="fa fa-long-arrow-up"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                        <div class="limiter">
                                            <label>Show:</label>
                                            <div class="select-limiter">
                                                <select class="inputbox" name="limit" id="limit">
                                                    <option value="99999">All</option>
                                                    <option value="5">5</option>
                                                    <option value="10">10</option>
                                                    <option value="15">15</option>
                                                    <option selected="selected" value="16">16</option>
                                                    <option value="20">20</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- product area start-->
                            <div class="row row-margin2">
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="sale"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                                <span class="old-rpice"><del>$250.00</del></span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                                <span class="old-rpice"><del>$250.00</del></span>
                                            </div>

                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books5.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books6.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="sale"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                                <span class="old-rpice"><del>$250.00</del></span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                                <span class="old-rpice"><del>$250.00</del></span>
                                            </div>

                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="sale"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                                <span class="old-rpice"><del>$250.00</del></span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                                <span class="old-rpice"><del>$250.00</del></span>
                                            </div>

                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books5.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books6.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 col-md-4  col-sm-6  col-xs-12  col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="sale"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                                <span class="old-rpice"><del>$250.00</del></span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                                <span class="old-rpice"><del>$250.00</del></span>
                                            </div>

                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-lg-3 hidden-md col-sm-6  col-xs-12 col-padd">
                                    <div class="single-product">
                                        <div class="product-label">
                                            <div class="new"></div>
                                        </div>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/books3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                        </div>
                                        <div class="product-content2">
                                            <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">$222.00</span>
                                            </div>
                                            <div class="button-container">
                                                <a title="Add to Cart" href="#" class="button cart_button">
                                                    <span>Add to Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="add-to-links">
                                            <li>
                                                <div class="wishlist">
                                                    <a title="Add to Wishlist" href="#" data-toggle="tooltip"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-products">
                                                    <a title="view pordcuts" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrows-alt"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- single-product end -->
                            </div>
                        </div>
                        <!--shop product area end-->
                        <div class="col-md-12">
                            <div class="pagination pt30">
                                <ul>
                                    <li class="pagination-active"><a>1</a></li>
                                    <li><a title="2" href="#" class="">2</a></li>
                                    <li><a title="»" href="#" class="next">»</a></li>
                                    <li><a title="End" href="#" class="">End</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--brand crasoule-area-start-->
                        <div class="brand-crasoule-area featur-padd">
                            <!-- area title start -->
                            <div class="area-title bdr mt20">
                                <h2>Brand & Clients</h2>
                            </div>
                            <!-- area title end -->
                            <div class="total-brand menu-carousel carousel-btn-2 carousel-btn mt10 mb20">
                                <div class="single-brand">
                                    <img src="img/brand1.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand2.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand3.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand4.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand1.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand2.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand3.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand4.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!--brand crasoule-area-end-->
                    </div>
                    <!--ambit-key-->
                </div>
                <!--col-md-9-->
            </div>
            <!--row-->
        </div>
        <!--container-->
</div>
    <!-- main area end -->

    <div class="footer-static-container">
        <div class="container">
            <div class="footer-static row pt30 pb30">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-static-title">
                        <h3>ABOUT PERSEUS</h3>
                    </div>
                    <div class="footer-static-content social-links">
                        <a href="#" class="logo"><img alt="" src="img/logo.png"></a>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                        <div class="web-links">
                            <ul>
                                <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#" class="ldin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="face"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-static-title">
                        <h3>OUR SERVICES</h3>
                    </div>
                    <div class="footer-static-content footer-service">
                        <ul>
                            <li class="first"><a href="#"><i class="fa fa-angle-double-right"></i>
Order History</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>
Returns</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>
Specials</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>
Mobiles</a></li>
                            <li><a href="my-account.html"><i class="fa fa-angle-double-right"></i>
My Account</a></li>
                            <li class="last"><a href="contact.html"><i class="fa fa-angle-double-right"></i>
Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 hidden-sm col-xs-12">
                    <div class="footer-static-title">
                        <h3>MY ACCOUNT</h3>
                    </div>
                    <div class="footer-static-content footer-acc">
                        <ul>
                            <li class="first"><a href="about-us.html">About us</a><span>1</span></li>
                            <li><a href="">Custom Service</a><span>2</span></li>
                            <li><a href="">Privacy Policy</a><span>3</span></li>
                            <li class="first"><a href="">Sitemap</a><span>4</span></li>
                            <li><a href="">Terms &amp; Condition</a><span>5</span></li>
                            <li class="last"><a href="">Advanced Search</a><span>6</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-static-title">
                        <h3>CONTACT US</h3>
                    </div>
                    <div class="footer-static-content footer-add">
                        <div class="address">1234 Heaven Stress, Beverly Hill OldYork- United State of Lorem</div>
                        <div class="phone">(800) 0123 4567 890
                            <br> (800) 0987 654 321</div>

                        <div class="mail"> admin@bootexparts.com
                            <br> Support@bootexparts.com</div>
                    </div>
                </div>
            </div>
            <div class="footer-static-2">
                <div class="link-category">
                   <nav>
                        <ul>
                            <li><a title="Clothing" href="#">Clothing</a></li>
                            <li><a title="equipments" href="#">equipments</a></li>
                            <li><a title="Jewellery" href="#">Jewellery</a></li>
                            <li><a title="Watches" href="#">Watches</a></li>
                            <li><a title="books" href="#">books</a></li>
                            <li><a title="Sports" href="#">Sports</a></li>
                            <li><a title="gifts" href="#">gifts</a></li>
                            <li><a title="Health" href="#">Health</a></li>
                            <li><a title="Medical" href="#">Medical</a></li>
                            <li><a title="Electronics" href="#">Electronics</a></li>
                        </ul>
                   </nav>

                </div>

            </div>
        </div>
    </div>

    <footer class="ma-footer-container">
        <div class="container">
            <div class="row">
                <div class="basak-footer">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <nav>
                            <ul class="links">
                                <li class="first"><a title="Site Map" href="#">Site Map</a></li>
                                <li><a title="Search Terms" href="#">Search Terms</a></li>
                                <li><a title="Advanced Search" href="3">Advanced Search</a></li>
                                <li><a title="Orders and Returns" href="3">Orders and Returns</a></li>
                                <li class=" last"><a title="Contact Us" href="3">Contact Us</a></li>
                            </ul>
                        </nav>
                            <address>Copyright &copy; 2016-All rights reserved. <a title="Themes Club" href="http://bootexperts.com/">bootexperts.com</a></address>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="payment">
                            <ul>
                                <li>
                                    <a href="#"><img alt="" src="img/switch.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="img/american_express.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="img/paypal.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="img/discover.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="img/visa.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="img/maestro.jpg"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- shop-page-wraper end -->

    <!-- JS -->

    <!-- jquery-1.11.3.min js
============================================ -->
    <?php echo '<script'; ?>
 src="js/vendor/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>

    <!-- bootstrap js
============================================ -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Nivo slider js
============================================ -->
    <?php echo '<script'; ?>
 src="custom-slider/js/jquery.nivo.slider.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="custom-slider/home.js" type="text/javascript"><?php echo '</script'; ?>
>

    <!-- mixit up js
============================================ -->
    <?php echo '<script'; ?>
 src="js/jquery.mixitup.min.js"><?php echo '</script'; ?>
>

    <!-- fancybox js
============================================ -->
    <?php echo '<script'; ?>
 src="js/fancybox/jquery.fancybox.pack.js"><?php echo '</script'; ?>
>

    <!-- Price Slider js
============================================ -->
    <?php echo '<script'; ?>
 src="js/jquery-price-slider.js"><?php echo '</script'; ?>
>

    <!-- owl.carousel.min js
============================================ -->
    <?php echo '<script'; ?>
 src="js/owl.carousel.min.js"><?php echo '</script'; ?>
>

    <!-- counterUp
============================================ -->
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.counterup.min.js"><?php echo '</script'; ?>
>

    <!-- Scroll up js
============================================ -->
    <?php echo '<script'; ?>
 src="js/jquery.scrollUp.js"><?php echo '</script'; ?>
>

    <!-- Elevator Zoom Js
============================================ -->
    <?php echo '<script'; ?>
 src="js/jquery.elevateZoom-3.0.8.min.js"><?php echo '</script'; ?>
>

    <!-- mean Menu
============================================ -->
    <?php echo '<script'; ?>
 src="js/jquery.meanmenu.js"><?php echo '</script'; ?>
>

    <!-- wow js
============================================ -->
    <?php echo '<script'; ?>
 src="js/wow.js"><?php echo '</script'; ?>
>

    <!-- chosen.jquery.min.js
============================================ -->
    <?php echo '<script'; ?>
 src="js/chosen.jquery.min.js"><?php echo '</script'; ?>
>

    <!-- plugins js
============================================ -->
    <?php echo '<script'; ?>
 src="js/plugins.js"><?php echo '</script'; ?>
>

    <!-- main js
============================================ -->
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}