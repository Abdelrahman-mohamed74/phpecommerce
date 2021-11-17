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

<body class="handheld-toolbar-enabled">


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


    <main class="container-fluid px-0">
        <!-- Row: Shop online-->
        <section class="row g-0">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary"
                style="min-height: 15rem; background-image: url(img/about/01.jpg);"></div>
            <div class="col-md-6 px-3 px-md-5 py-5">
                <div class="mx-auto py-lg-5" style="max-width: 35rem;">
                    <h2 class="h3 pb-3">Search, Select, Buy online</h2>
                    <p class="fs-sm pb-3 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut
                        eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis
                        dolor. Mauris rutrum fermentum erat, at euismod lorem pharetra nec. Duis erat lectus,
                        ultrices euismod sagittis at, pharetra eu nisl. Phasellus id ante at velit tincidunt
                        hendrerit. Aenean dolor dolor tristique nec. Tristique nulla aliquet enim tortor at auctor
                        urna nunc. Sit amet aliquam id diam maecenas ultricies mi eget.</p><a
                        class="btn btn-primary btn-shadow" href="shop-grid-ls.php">View products</a>
                </div>
            </div>
        </section>
        <!-- Row: Delivery-->
        <section class="row g-0">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2"
                style="min-height: 15rem; background-image: url(img/about/02.jpg);"></div>
            <div class="col-md-6 px-3 px-md-5 py-5 order-md-1">
                <div class="mx-auto py-lg-5" style="max-width: 35rem;">
                    <h2 class="h3 pb-3">Fast delivery worldwide</h2>
                    <p class="fs-sm pb-3 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut
                        eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis
                        dolor. Mauris rutrum fermentum erat, at euismod lorem pharetra nec. Duis erat lectus,
                        ultrices euismod sagittis at, pharetra eu nisl. Phasellus id ante at velit tincidunt
                        hendrerit. Aenean dolor dolor tristique nec. Tristique nulla aliquet enim tortor at auctor
                        urna nunc. Sit amet aliquam id diam maecenas ultricies mi eget.</p><a
                        class="btn btn-accent btn-shadow" href="#">Shipping details</a>
                </div>
            </div>
        </section>
        <!-- Row: Mobile app-->
        <section class="row g-0">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary"
                style="min-height: 15rem; background-image: url(im/about/03.jpg);"></div>
            <div class="col-md-6 px-3 px-md-5 py-5">
                <div class="mx-auto py-lg-5" style="max-width: 35rem;">
                    <h2 class="h3 pb-3">Great mobile app. Shop on the go</h2>
                    <p class="fs-sm pb-3 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut
                        eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis
                        dolor. Mauris rutrum fermentum erat, at euismod. Duis erat lectus, ultrices euismod sagittis
                        at dolor tristique nec. Tristique nulla aliquet enim tortor at auctor urna nunc. Sit amet
                        aliquam id diam maecenas ultricies mi eget.</p>
                    <img src="images/about/google.png" alt="">
                    <img src="images/about/google.png" alt="">

                </div>
            </div>
        </section>
        <!-- Section: Shopping outlets-->
        <section class="row g-0">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2"
                style="min-height: 15rem; background-image: url(img/about/04.jpg);"></div>
            <div class="col-md-6 px-3 px-md-5 py-5 order-md-1">
                <div class="mx-auto py-lg-5" style="max-width: 35rem;">
                    <h2 class="h3 pb-3">Shop offline. Cozy outlet stores</h2>
                    <p class="fs-sm pb-3 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut
                        eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis
                        dolor. Mauris rutrum fermentum erat, at euismod lorem pharetra nec. Duis erat lectus,
                        ultrices euismod sagittis at, pharetra eu nisl. Phasellus id ante at velit tincidunt
                        hendrerit. Aenean dolor dolor tristique nec. Tristique nulla aliquet enim tortor at auctor
                        urna nunc. Sit amet aliquam id diam maecenas ultricies mi eget.</p><a
                        class="btn btn-warning btn-shadow needs-validation1" href="contacts.php">See outlet stores</a>
                </div>
            </div>
        </section>
        <hr>
        <!-- Section: Team-->
        <section class="container py-3 py-lg-5 mt-4 mb-3">
            <h2 class="h3 my-2">Our core team</h2>
            <p class="fs-sm text-muted">People behind your great shopping experience</p>
            <div class="row pt-3">
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <div class="d-flex align-items-center"><img class="rounded-circle" src="images/about/01(2).jpg"
                            width="96" alt="Jonathan Doe">
                        <div class="ps-3">
                            <h6 class="fs-base pt-1 mb-1">Jonathan Doe</h6>
                            <p class="fs-ms text-muted mb-0">CEO, Co-founder</p><a
                                class="nav-link-style fs-ms text-nowrap" href="mailto:johndoe@example.com"><i
                                    class="fas fa-envelope me-2"></i>johndoe@example.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <div class="d-flex align-items-center"><img class="rounded-circle" src="images/about/02(2).jpg"
                            width="96" alt="Barbara Palson">
                        <div class="ps-3">
                            <h6 class="fs-base pt-1 mb-1">Barbara Palson</h6>
                            <p class="fs-ms text-muted mb-0">Chief of Marketing</p><a
                                class="nav-link-style fs-ms text-nowrap" href="mailto:b.palson@example.com"><i
                                    class="fas fa-envelope me-2"></i>b.palson@example.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <div class="d-flex align-items-center"><img class="rounded-circle" src="images/about/03(2).jpg"
                            width="96" alt="William Smith">
                        <div class="ps-3">
                            <h6 class="fs-base pt-1 mb-1">William Smith</h6>
                            <p class="fs-ms text-muted mb-0">Financial director</p><a
                                class="nav-link-style fs-ms text-nowrap" href="mailto:w.smith@example.com"><i
                                    class="fas fa-envelope me-2"></i>w.smith@example.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <div class="d-flex align-items-center"><img class="rounded-circle" src="images/about/04(2).jpg"
                            width="96" alt="Amanda Gallaher">
                        <div class="ps-3">
                            <h6 class="fs-base pt-1 mb-1">Amanda Gallaher</h6>
                            <p class="fs-ms text-muted mb-0">Lead UX designer</p><a
                                class="nav-link-style fs-ms text-nowrap" href="mailto:a.gallaher@example.com"><i
                                    class="fas fa-envelope me-2"></i>a.gallaher@example.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <div class="d-flex align-items-center"><img class="rounded-circle" src="images/about/07.jpg"
                            width="96" alt="Benjamin Miller">
                        <div class="ps-3">
                            <h6 class="fs-base pt-1 mb-1">Benjamin Miller</h6>
                            <p class="fs-ms text-muted mb-0">Website development</p><a
                                class="nav-link-style fs-ms text-nowrap" href="mailto:b.miller@example.com"><i
                                    class="fas fa-envelope me-2"></i>b.miller@example.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <div class="d-flex align-items-center"><img class="rounded-circle" src="images/about/06(1).jpg"
                            width="96" alt="Miguel Rodrigez">
                        <div class="ps-3">
                            <h6 class="fs-base pt-1 mb-1">Miguel Rodrigez</h6>
                            <p class="fs-ms text-muted mb-0">Content manager</p><a
                                class="nav-link-style fs-ms text-nowrap" href="mailto:b.miller@example.com"><i
                                    class="fas fa-envelope me-2"></i>m.rodrigez@example.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: We are hiring-->
        <hr>
        <section class="row g-0">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2"
                style="min-height: 15rem; background-image: url(img/about/05.jpg);"></div>
            <div class="col-md-6 px-3 px-md-5 py-5 order-md-1">
                <div class="mx-auto py-lg-5" style="max-width: 35rem;">
                    <h2 class="h3 mb-2">We are hiring new talents</h2>
                    <p class="fs-sm text-muted pb-2">If you want to be part of our team please submit you CV using
                        the form below:</p>
                    <form class="needs-validation row g-4" method="post" novalidate>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" placeholder="Your name" required>
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" type="email" placeholder="Your email" required>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="4" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-12">
                            <input class="form-control file" type="file" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-info btn-shadow" type="submit">Submit your CV</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
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


</body>

</html>