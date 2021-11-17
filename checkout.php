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
        <!--start main-->
        <main>
            <!--Start chechout-pg-->
            <section class="chechout-pg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 m-auto">
                            <div class="payments-inner">
                                <div class="payments-header">
                                    <div class="text text-center">
                                        <h5>Chechout complete</h5>
                                    </div>
                                </div>
                                <div class="payments-body">
                                    <form id="regForm" class="pay-form">
            
                                        <!-- One "tab" for each step in the form: -->
                                        <!-- Personal info tab -->
                                        <div class="tab">
                                            <div class="sec-heading">
                                                <h4>Personal data</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>First Name </label>
                                                        <input placeholder="First" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Last Name </label>
                                                        <input placeholder="Last" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="ol-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input type="email" placeholder="name@example.com" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="ol-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Telephone number </label>
                                                        <input placeholder="+201014410480" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Location tab -->
                                        <div class="tab">
                                            <div class="sec-heading">
                                                <h4></h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1"> Country</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Egypt</option>
                                                            <option>Germany</option>
                                                
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1"> City</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Cairo</option>
                                                            <option>Dakahlia</option>
                                                            <option>Alexandria</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1"> المدينه</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>New Cairo</option>
                                                            <option>Mansoura</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="ol-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label> Address</label>
                                                        <input placeholder=" Area Name , Street ,  House Number ..." class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Another Address</label>
                                                        <input placeholder="Another Address" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Zip Code</label>
                                                        <input placeholder="1234" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Order details tab -->
                                        <div class="tab">
                                            <div class="sec-heading">
                                                <h4>Order Details</h4>
                                            </div>
                                            <div class="item">
                                                <div class="content">
                                                    <img src="images/product/12.jpg" alt="">
                                                    <div class="text text-center">
                                                        <h6>Amazon Card  </h6>
                                                        <p>250.00 EGP</p>
                                                        <span>Piece 1</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="content">
                                                    <img src="images/product/08.jpg" alt="">
                                                    <div class="text text-center">
                                                        <h6>Amazon Card  </h6>
                                                        <p>250.00 EGP</p>
                                                        <span>Piece 1</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="total">
                                                <h6>Order: <span>500.00 EGP</span></h6>
                                                <h6>Shipping: <span>25.00 EGP</span></h6>
                                                <h6>Total: <span class="active">525.00 EGP</span></h6>
                                            </div>
                                        </div>
                                        <!-- pay method tab -->
                                        <div class="tab">
                                            <div class="sec-heading">
                                                <h4>Payment Way</h4>
                                            </div>
                                            <div class="pay">
                                                <div class="row pay-method mt-3">
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <label>
                                                        <input type="radio" name="visa" value="visa" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <img src="images/pay/visa.png">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <label>
                                                        <input type="radio" name="payment" value="payment" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <img src="images/pay/master.png">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <label>
                                                        <input type="radio" name="paypal" value="paypal" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <img src="images/pay/paypal.png">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <label>
                                                        <input type="radio" name="handcheck" value="handcheck" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                                <img class="handcheck" src="images/handshake.svg">
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="buttons-container">
                                                    <button class="mr-1 ml-1" type="button" data-toggle="modal" data-target="#orderModal">Payment</button>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class="buttons-container">
                                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                        </div> 
                                        <!-- Progress circles -->
                                        <div class="row w-100">
                                            <div class="col-12">
                                                <!-- Circles which indicates the steps of the form: -->
                                                <div class="circles">
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                </div>   
                                            </div>
                                        </div>                   
                                    </form>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!--end main-->
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
        /****************** Checkout form page /*******************/

        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").style.display = "none";
            } else {
                document.getElementById("nextBtn").display = "التالي";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }
        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }
        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }
        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
    
    </body>
    
    </html>
      
