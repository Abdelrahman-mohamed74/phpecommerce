<?php
session_start();

if (isset($_POST['save'])) {
$_SESSION['fullname'] = $_POST['fullnameedit'];

//connect
$servername     = "mysql:host=localhost;dbname=shop";
$serverusername = "root";
$serverpassword = "";

try{
$conn = new PDO($servername,$serverusername,$serverpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("UPDATE users SET UserName = :username WHERE UserEmail = :useremail");
    $stmt->bindParam(':username',$_POST['fullnameedit']);
    $stmt->bindParam(':useremail',$_SESSION['email'] );
    $stmt->execute();
    header("Location:profile.php");

}catch(PDOException $e){
        echo $e->getmessage();
}
$conn = null;
}


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
                                            <img src="images/about/profile_man.png" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="profile.php"><?php echo $_SESSION['fullname']?></a>
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
    <main>
        <!------------------------------------ profile   ------------------------------------->
        <!--Start profile-pg-->
        <section class="profile-pg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="side-nav">
                            <div class="profile-img"> <img src="images/profile_man.png" alt="user-pic">
                                <h6><?php echo $_SESSION['fullname']; ?></h6>
                            </div>
                            <div class="links">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-tab1-tab" data-toggle="pill"
                                        href="#v-pills-tab1" role="tab" aria-controls="v-pills-tab1"
                                        aria-selected="false">
                                        <i class="far fa-edit"></i> Personal Data
                                    </a>
                                    <a class="nav-link" id="v-pills-tab2-tab" data-toggle="pill" href="#v-pills-tab2"
                                        role="tab" aria-controls="v-pills-tab2" aria-selected="false">
                                        <i class="fas fa-map-marker-alt"></i> Address
                                    </a>
                                    <a class="nav-link" id="v-pills-tab3-tab" data-toggle="pill" href="#v-pills-tab3"
                                        role="tab" aria-controls="v-pills-tab3" aria-selected="false">
                                        <i class="far fa-bell"></i> Notification
                                    </a>
                                    <a class="nav-link" id="v-pills-tab4-tab" data-toggle="pill" href="#v-pills-tab4"
                                        role="tab" aria-controls="v-pills-tab4" aria-selected="false">
                                        <i class="fas fa-shopping-bag"></i> Orders
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-tab1" role="tabpanel"
                                aria-labelledby="v-pills-tab1-tab">
                                <div class="tab-wrapper info-tab">
                                    <div class="sec-heading">
                                        <h4> Personal Data</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6> Full Name</h6>
                                                <p class="text" name="username"><?php echo $_SESSION['fullname']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>Email Address </h6>
                                                <p class="text" name="email"><?php echo $_SESSION['email']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>Number</h6>
                                                <p class="text" name="mobile"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>Gender</h6>
                                                <p class="text" name="gender"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="main-butn" data-toggle="modal"
                                                data-target="#infoModal">Edit data </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-tab2" role="tabpanel"
                                aria-labelledby="v-pills-tab2-tab">
                                <div class="tab-wrapper info-tab">
                                    <div class="sec-heading">
                                        <h4>Data Address</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>Country</h6>
                                                <p class="text">Egypt</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>City</h6>
                                                <p class="text">Cairo</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>Address</h6>
                                                <p class="text"> Input Address here...</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6> ZIP Code</h6>
                                                <p class="text">1234</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="main-butn" data-toggle="modal"
                                                data-target="#addressModal">Edit Data </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-tab3" role="tabpanel"
                                aria-labelledby="v-pills-tab3-tab">
                                <div class="tab-wrapper notifications-tab">
                                    <div class="sec-heading">
                                        <h4>Notification</h4>

                                    </div>
                                    <div class="noti-item mt-3">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <span class="new"></span>
                                                <img src="images/product/55.jpg" alt="" class="noti-img">
                                            </div>
                                            <div class="col-md-8">
                                                <h6>Noon Card</h6>
                                                <span class="text"> Your order under review </span>
                                            </div>
                                            <div class="col-md-2">
                                                <span class="time">9:35 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti-item mt-3">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="images/product/12.jpg" alt="" class="noti-img">
                                            </div>
                                            <div class="col-md-8">
                                                <h6>Noon Card</h6>
                                                <span class="text">Your order under review </span>
                                            </div>
                                            <div class="col-md-2">
                                                <span class="time">9:35 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-tab4" role="tabpanel"
                                aria-labelledby="v-pills-tab4-tab">
                                <div class="tab-wrapper orders-tab">
                                    <div class="sec-heading">
                                        <h4>Orders</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"> Product Pic</th>
                                                    <th scope="col" class="d-none-sm">Name</th>
                                                    <th scope="col" class="d-none-md"> Order Number</th>
                                                    <th scope="col" class="d-none-md">Date</th>
                                                    <th scope="col">Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><img src="images/product/55.jpg" alt=""></td>
                                                    <td class="d-none-sm"> Product Name</td>
                                                    <td class="d-none-md">12542325</td>
                                                    <td class="d-none-md">22 april 2021</td>
                                                    <td><a href="#"><i class="fas fa-info-circle"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td><img src="images/product/20.jpg" alt=""></td>
                                                    <td class="d-none-sm">Product Name </td>
                                                    <td class="d-none-md">12542325</td>
                                                    <td class="d-none-md">22 april 2021</td>
                                                    <td><a href="#"><i class="fas fa-info-circle"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td><img src="images/product/15.jpg" alt=""></td>
                                                    <td class="d-none-sm">Product Name </td>
                                                    <td class="d-none-md">12542325</td>
                                                    <td class="d-none-md">22 april 2021</td>
                                                    <td><a href="#"><i class="fas fa-info-circle"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Info Modal-->
        <!---------------------------------------- Edit ----------------------------------->
        <form method="POST">
        <div class="modal info-modal fade" id="infoModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data </h5><button type="button"
                            class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="image-container">
                            <img src="images/profile_man.png" alt="user-pic">
                            <input type="file" class="custom-file-input" id="input-profile" capture="">
                            <button><i class="far fa-edit"></i></button>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Full Name </span>
                                    </div><input type="text" name="fullnameedit" class="form-control enable-input" value="<?php echo $_SESSION['fullname']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Email Address </span>
                                    </div><input type="text" name="emailedit" class="form-control enable-input" value="<?php echo $_SESSION['email']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span> Telephone number</span></div>
                                    <input type="text" class="form-control enable-input" value="+201014410480">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Gender</span>
                                    </div>
                                    <select class="form-control enable-input">
                                        <option>male</option>
                                        <option> female </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span> Password</span>
                                    </div><input type="password" class="form-control enable-input" value="**********">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Confirm Password </span>
                                    </div><input type="password" class="form-control enable-input" value="**********">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="save" class="main-butn">Save</button>
                    </div>

                </div>

            </div>

        </div>
        </form>
        <!--Address Modal-->
        <div class="modal info-modal fade" id="addressModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"> Edit Data</h5><button type="button"
                            class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Country</span> </div>
                                    <select class="form-control enable-input">
                                        <option>Egypt</option>
                                        <option> Egypt </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>City</span></div>
                                    <select class="form-control enable-input">
                                        <option>Cairo</option>
                                        <option> Cairo </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Address </span></div>
                                    <input type="text" class="form-control enable-input" value="Address Details Here">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Zip Code </span></div>
                                    <input type="text" class="form-control enable-input" value="1234">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="main-butn">Save</button>
                    </div>

                </div>

            </div>

        </div>
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