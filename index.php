<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, 
            shrink-to-fit=no">
    <meta name="author" content="Moataz Elsaied">
    <link rel="stylesheet" href="css/lib/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.0/rangeslider.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@6.3.2/swiper-bundle.min.css">
    <!--the intilize of bootstrap ar version lib-->
    <link rel="stylesheet" href="css/lib/bootstrap.css">
    <!--the intilize of owl carousel lib-->
    <link rel="stylesheet" href="css/lib/owl.carousel.min.css">
    <!--the intilize of dots that appear with owl carousel -->
    <link rel="stylesheet" href="css/lib/owl.theme.default.css">
    <link rel="stylesheet" href="css/lib/flipdown.css">
    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/media.css">
    <title>PHP ECOMMERCE</title>
</head>

<body>


    <!--start nav-->
    <nav class="nav ">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <ul class="mail-content">
                            <li>
                                <i class="fas fa-envelope-open-text"></i>
                                <a href="#">support@admin.com</a>
                            </li>
                            <li>
                                <i class="fas fa-map-marked-alt"></i>
                                <a href="#"> Location</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="hotline">
                            <li>
                                <span> Hot Line : </span>
                                <a href="#">33445</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-8">
                        <div class="nav-toggler">
                            <div class="hamburger" id="hamburger-6">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                            <a href="index.php" class="image-content">
                                <img src="images/logo/2.png" class="ml-4" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-4">
                        <ul class="button-groups">
                            <li>
                                <div class="form">
                                    <input class="search-input" type="text" placeholder=" Search Here">
                                    <a href="#" class="search-bnt">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="dropdown profile-dropdown">
                                <a class="dropdown-toggle" href="profile.php" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-user"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="userDropdown">
                                    <div class="profile-name">
                                        <div class="image-content">
                                            <img src="images/about/profile_man.png" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="profile.php"><?php echo $_SESSION['fullname'];?></a>
                                        </div>
                                    </div>
                                    <ul class="profile-data">
                                        <li>
                                            <a href="profile.php">
                                                <i class="far fa-user-circle"></i>
                                                <span>Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile.php">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Setting</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login.php">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span> Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="favorite.php">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                            <li class="dropdown cart-shape">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cart-plus"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="content">
                                        <h6 class="heading"> Cart content :- <span>4</span></h6>
                                    </div>
                                    <ul class="data">
                                        <li class="item">
                                            <div class="item-image">
                                                <img src="images/product/01.jpg" alt="">
                                            </div>
                                            <div class="item-content">
                                                <h6> Product Name </h6>
                                                <p>9.30 $ </p>
                                            </div>
                                            <a class="item-close" href="#">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <div class="item-image">
                                                <img src="images/product/04.jpg" alt="">
                                            </div>
                                            <div class="item-content">
                                                <h6> Product Name </h6>
                                                <p>11.30 $ </p>
                                            </div>
                                            <a class="item-close" href="#">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <div class="item-image">
                                                <img src="images/product/06.jpg" alt="">
                                            </div>
                                            <div class="item-content">
                                                <h6> Product Name </h6>
                                                <p>11.30 $ </p>
                                            </div>
                                            <a class="item-close" href="#">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <div class="item-image">
                                                <img src="images/product/10.jpg" alt="">
                                            </div>
                                            <div class="item-content">
                                                <h6>Product Name</h6>
                                                <p>15.30 $ </p>
                                            </div>
                                            <a class="item-close" href="#">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="buttons-contain">
                                        <a href="cart.php" class="custom-btn black-btn">View Cart</a>
                                        <a href="checkout.php" class="custom-btn blue-btn">Checkout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-nav">
            <div class="container">
                <div class="row">
                </div>
                <div class="col-lg-12 col-12">
                    <ul class="nav-items">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="About.php">
                                About us
                            </a>
                        </li>
                        <li>
                            <a href="products.php">
                                Product
                            </a>
                        </li>
                        <li>
                            <a href="new.php">
                                New Product
                            </a>
                        </li>
                        <li>
                            <a href="contact_us.php">
                                Contact us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Slider main container -->
    <div class="swiper-container">

        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide slide-1" data-title="Hurry up! <br> Limited time offer."
                data-subtitle=" <a href='products.php' class='custom-btn btn-danger'>Shop Now </a>">
                <img src="images/hero-slider/01.jpg" width="70%" height="100%" alt="">
            </div>
            <div class="swiper-slide slide-2" data-title="Hurry up!<br> Limited time offer."
                data-subtitle=" <a href='products.php' class='custom-btn btn-danger'>Shop Now</a>">
                <img src="images/hero-slider/02.jpg" width="70%" height="100%" alt="">
            </div>
            <div class="swiper-slide slide-3" data-title="Hurry up!<br> Limited time offer."
                data-subtitle=" <a href='products.php' class='custom-btn btn-danger'>Shop Now</a>">
                <img src="images/hero-slider/03.jpg" width="70%" height="100%" alt="">
            </div>
        </div>
        <!-- Slide captions -->
        <div class="slide-captions"></div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <!-- *****************  Trend Product  ************************ -->
    <section class="general-product">
        <div class="container">
            <div class="heading">
                <h4> Trending products </h4>
            </div>
            <div class="row">
                <div class="col-12 mb-5">
                    <div>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">
                                    Popular brand
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">
                                    Most Relavent
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">
                                    Uniqe Products
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/01.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title=" View Details">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to Favourit">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/02.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title="View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title=" Add to Favourit">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/03.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title=" Add to cart ">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title="View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/05.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="ا Add to cartه">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title="View Details  ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title=" Add to cart ">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/06.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title=" View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to Favourite ">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/09.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title="View Details  ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to Favourite ">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/08.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title="View Details  ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="   Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/09.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title=" Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title="View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/66.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title=" View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="   Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/09.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title="  Add to Favourite ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="   Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/20.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title=" Add to cart ">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title=" View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to Favourite ">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/18.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title="View Details  ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="   Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/70.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title=" View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/20.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title="View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/16.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title="View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/11.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                        title=" Add to cart ">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php" data-toggle="tooltip"
                                                        data-placement="top" title="View Details  ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                        title="   Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php">Block-colored Hooded Top</a>
                                            <p>39.50 $</p>
                                            <ul class="rate">
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="button-content">
                        <a href="products.php" class="custom-btn black-btn"> More Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--start banners-->
    <section class="banners">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12 mb-5">
                    <div class="banner-item">
                        <a href="checkout.php">
                            <img src="images/product/banner2.jpg" alt="">
                        </a>
                        <div class="banner-content">
                            <small>Hurry up! Limited time offer</small>
                            <h3>Converse All Star on Sale</h3>
                            <a href="products.php" class="custom-btn blue-btn">Shop Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-5">
                    <div class="banner-item">
                        <a href="checkout.php">
                            <img src="images/banner-bg.jpg" alt="">
                        </a>
                        <div class="content">
                            <small>Your Add Banner Here</small>
                            <h3>Hurry up! Limited time offer</h3>
                            <a href="contact_us.php" class="custom-btn black-btn">Contact us </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end banners-->



    <!-- ************************************  CAROUSEEL  ************************************** -->
    <section class="new-products">
        <div class="container">
            <div class="heading">
                <h4>New Arrival</h4>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme owl-partner">
                        <div class="item">
                            <div class="product-box">
                                <div class="image-content">
                                    <img src="images/product/08.jpg" alt="">
                                    <ul class="add-items">
                                        <li>
                                            <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                title="ا Add to cartه">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single_product.php" data-toggle="tooltip" data-placement="top"
                                                title="View Details  ">
                                                <i class="far fa-dot-circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                title=" Add to cart ">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <a href="single_product.php">Block-colored Hooded Top</a>
                                    <p>39.50 $</p>
                                    <ul class="rate">
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box">
                                <div class="image-content">
                                    <img src="images/product/04.jpg" alt="">
                                    <ul class="add-items">
                                        <li>
                                            <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                title="ا Add to cartه">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single_product.php" data-toggle="tooltip" data-placement="top"
                                                title="View Details  ">
                                                <i class="far fa-dot-circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                title=" Add to cart ">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <a href="single_product.php">Block-colored Hooded Top</a>
                                    <p>39.50 $</p>
                                    <ul class="rate">
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box">
                                <div class="image-content">
                                    <img src="images/product/03.jpg" alt="">
                                    <ul class="add-items">
                                        <li>
                                            <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                title="ا Add to cartه">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single_product.php" data-toggle="tooltip" data-placement="top"
                                                title="View Details  ">
                                                <i class="far fa-dot-circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                title=" Add to cart ">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <a href="single_product.php">Block-colored Hooded Top</a>
                                    <p>39.50 $</p>
                                    <ul class="rate">
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box">
                                <div class="image-content">
                                    <img src="images/product/02.jpg" alt="">
                                    <ul class="add-items">
                                        <li>
                                            <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                title="ا Add to cartه">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single_product.php" data-toggle="tooltip" data-placement="top"
                                                title="View Details  ">
                                                <i class="far fa-dot-circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                title=" Add to cart ">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <a href="single_product.php">Block-colored Hooded Top</a>
                                    <p>39.50 $</p>
                                    <ul class="rate">
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box">
                                <div class="image-content">
                                    <img src="images/product/01.jpg" alt="">
                                    <ul class="add-items">
                                        <li>
                                            <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                title="ا Add to cartه">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single_product.php" data-toggle="tooltip" data-placement="top"
                                                title="View Details  ">
                                                <i class="far fa-dot-circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                title=" Add to cart ">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <a href="single_product.php">Block-colored Hooded Top</a>
                                    <p>39.50 $</p>
                                    <ul class="rate">
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box">
                                <div class="image-content">
                                    <img src="images/product/06.jpg" alt="">
                                    <ul class="add-items">
                                        <li>
                                            <a href="cart.php" data-toggle="tooltip" data-placement="top"
                                                title="ا Add to cartه">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single_product.php" data-toggle="tooltip" data-placement="top"
                                                title="View Details  ">
                                                <i class="far fa-dot-circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorite.php" data-toggle="tooltip" data-placement="top"
                                                title=" Add to cart ">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <a href="single_product.php">Block-colored Hooded Top</a>
                                    <p>39.50 $</p>
                                    <ul class="rate">
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    <!-- start flipdown -->
    <section class="skin-offers gray-bk">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <div class="content">
                        <h6>Sale up to 50% </h6>
                        <h4>Original watch</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus unde amet adipisci
                            cupiditate voluptatem quisquam!</p>
                        <div id="flipdown" class="flipdown"></div>
                        <a href="checkout.php" class="custom-btn blue-btn">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <div class="image-content">
                        <img src="images/product/70.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- *********************** CAROUSEEL *************************** -->
    <!-- More Brans -->

    <section class="data-cards">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="products.php" class="box">
                        <div class="image-content">
                            <img src="images/brands/06.png" width="100%" height="100%" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="products.php" class="box">
                        <div class="image-content">
                            <img src="images/brands/07.png" width="100%" height="100%" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="products.php" class="box">
                        <div class="image-content">
                            <img src="images/brands/05.png" width="100%" height="100%" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="products.php" class="box">
                        <div class="image-content">
                            <img src="images/brands/04.png" width="100%" height="100%" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="products.php" class="box">
                        <div class="image-content">
                            <img src="images/brands/08.png" width="100%" height="100%" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="products.php" class="box">
                        <div class="image-content">
                            <img src="images/brands/03.png" width="100%" height="100%" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="products.php" class="box">
                        <div class="image-content">
                            <img src="images/brands/02.png" width="100%" height="100%" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="products.php" class="box">
                        <div class="image-content">
                            <img src="images/brands/01.png" width="100%" height="100%" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--Scroll to top button-->
    <a data-scroll href="#" class="scroll-top-btn" id="scroll-btn">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- scroll top button -->
    <!-- Start Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-6 col-12 mb-5">
                    <div class="content">
                        <h6> Electronic payment</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, dolorem! Explicabo
                            consequatur asperiores
                            voluptas laudantium ratione commodi incidunt culpa illo aut eveniet nihil ducimus,
                            voluptatem quod, repellendus libero
                            delectus quibusdam?

                        </p>
                        <ul class="payment">
                            <li>
                                <a href="#">
                                    <img src="images/Payment/card_1.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/Payment/card_2.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/Payment/card_3.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/Payment/card_4.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/Payment/card_5.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12 mb-5">
                    <div class="content">
                        <h6>Products</h6>
                        <ul class="list">
                            <li>
                                <a href="#">Clothes</a>
                            </li>
                            <li>
                                <a href="#">Shoes </a>
                            </li>
                            <li>
                                <a href="#">Other </a>
                            </li>
                            <li>
                                <a href="#">
                                    All Products
                                </a>
                            </li>
                            <li>
                                <a href="#">Bags </a>
                            </li>
                            <li>
                                <a href="#">Offers </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12 mb-5">
                    <div class="content">
                        <h6> Links</h6>
                        <ul class="list">
                            <li>
                                <a href="#"> Support</a>
                            </li>
                            <li>
                                <a href="#"> Seller Terms and Conditions
                                </a>
                            </li>
                            <li>
                                <a href="#"> Help</a>
                            </li>
                            <li>
                                <a href="#">
                                    Privacy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Selling Policies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-5">
                    <div class="content">
                        <div class="image-content">
                            <img src="images/logo/2.png" alt="">
                        </div>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda saepe vitae eum porro
                            tempora aliquam
                            earum nostrum ipsam dolor soluta?
                        </p>
                        <ul class="social-media">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/lib/jquery-3.6.0.min.js"></script>
    <script src="js/lib/popper.js"></script>
    <script src="js/lib/bootstrap.js"></script>
    <script src="js/lib/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/swiper@6.3.2/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.0/gsap.min.js"></script>
    <script src="js/lib/flipdown.js"></script>
    <script src="js/main.js"></script>


</body>

</html>