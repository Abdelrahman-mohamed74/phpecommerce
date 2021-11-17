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
                                <img src="images/logo/2.png" alt="">
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
                                            <img src="images/profile_man.png" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="profile.php">Jacob Smith</a>
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
                                    <i class="fas fa-heart"></i>
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
    <!-- end Nav -->
            <!--start product-details -->
            <section class="product-details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class=" owl-carousel owl-item owl-single-product">
                                <div class="item">
                                    <img src="images/product/17.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/product/12.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/product/14.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/product/19.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-12 mb-5">
                            <div class="content">
                                <h6 class="type">Medical Equipment</h6>
                                <h4>Clinical Stethoscope Dual Head</h4>
                                <p class="price">39.50 $</p>
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
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.
                                
                                </p>
                                <div class="quantity">
                                    <strong >Number</strong>
                                    <form class="form">
                                        <span onclick="decrement()" class="sub">-</span>
                                        <input type="text" value="1">
                                        <span onclick="increment()" class="add">+</span>
                                    </form>
                                </div>
                                <a href="cart.php" class="custom-btn black-btn"> Add to cart</a>
                                <ul class="code">
                                    <li>
                                        <strong>Sale Code</strong>
                                        <span>213312aa</span>
                                    </li>
                                    <li>
                                        <strong>Department</strong>
                                        <span>
                                             Men Clothes</span>
                                    </li>
                                    <li>
                                        <strong>Search Code </strong>
                                        <span>
                                            Clothes
                                            trendy
                                            new arrival</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                    Full description
                                </a>
                                  <a  class="nav-item nav-link" id="nav-care-tab" data-toggle="tab" href="#nav-care" role="tab" aria-controls="nav-care" aria-selected="false">
                                        More information 
                                  </a>
                                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                                    Comments
                                  </a>
                                </div>
                            </nav>                                  
                        </div>
                        <div class="col-12 mb-5">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="data-content">
                                        <p>
                                            Know Who Your Target Audience is. The first step to writing product descriptions is to define your target audience. Hoodie is the most populat and trending proucts for both men’s an women in winter season. Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active stereo speaker takes the takable look and sound of Marshall, unplugs the chords, and takes the show on the road.
                                            Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate & pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced.
                                        </p>
                                        <ul>
                                            <li>
                                                Downloadable/Digital Products, Virtual Products
                                            </li>
                                            <li>
                                                Downloadable/Digital Products, Virtual Products
                                            </li>
                                            <li>
                                                Downloadable/Digital Products, Virtual Products
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-care" role="tabpanel" aria-labelledby="nav-care-tab">
                                    <div class="data-content">
                                        <h4>additional information </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui consequatur ex voluptatem aspernatur, quos repellat laborum fugit animi quasi, vitae non quas a accusantium distinctio suscipit quam error? Similique, voluptatibus.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="data-content">
                                        <h5> Add Comment</h5>
                                        <p class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis delectus libero facilis iusto voluptas nobis. Soluta cum exercitationem quae dolores?</p>
                                        <form class="form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="button-content">
                                                        <a href="#" class="custom-btn black-btn">Send</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
             <!--start new products-->
             <section class="new-products">
                <div class="container">
                    <div class="heading">
                        <h4>Products </h4>
                        <p>Shopping And take a great sale ! </p>
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
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top" title="ا Add to cartه">
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
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top" title="ا Add to cartه">
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
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top" title="ا Add to cartه">
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
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top" title="ا Add to cartه">
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
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top" title="ا Add to cartه">
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
                                                    <a href="cart.php" data-toggle="tooltip" data-placement="top" title="ا Add to cartه">
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
        </main>
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
    
    <script>
        
            //owl header screen 
            $('.owl-header').owlCarousel({
                ltr: true,
                loop: true,
                margin: 20,
                nav: false,
                dots: true,
                autoplay: true,
                touchDrag: false,
                mouseDrag: false,
                autoWidth: false,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                autoplayTimeout: 2000,
                smartSpeed: 2000,
                dragEndSpeed: 2000,
                slidSpeed: 900,
                paginationSpeed: 900,
                autoplayHoverPause: true,
                items: 1
            });
            //partner slider 
            $('.owl-partner').owlCarousel({
                ltr: true,
                loop: true,
                margin: 20,
                nav: false,
                dots: true,
                autoplay: true,
                touchDrag: true,
                mouseDrag: true,
                autoWidth: false,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                autoplayTimeout: 6000,
                smartSpeed: 2000,
                dragEndSpeed: 2000,
                slidSpeed: 900,
                paginationSpeed: 900,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
            $('.owl-single-product').owlCarousel({
                ltr: true,
                loop: true,
                margin: 0,
                nav: true,
                dots: false,
                smartSpeed: 2000,
                dragEndSpeed: 2000,
                slidSpeed: 900,
                paginationSpeed: 900,
                autoplayHoverPause: true,
                items: 1
            });
    </script>
    </body>
    
    </html>