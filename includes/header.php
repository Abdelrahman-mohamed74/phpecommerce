

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


    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/media.css">
    <style>
    .paypal-button:not(.paypal-button-card){
    height: 40px!important;
    
}

        /*
 * Component: Callout
 * ------------------
 */
.callout {
  border-radius: 3px;
  margin: 0 0 20px 0;
  padding: 15px 30px 15px 15px;
  
  border:2px solid gray;
  border-left: 5px solid #eee;
  
  
}
.callout a {
  color: #fff;
  text-decoration: underline;
}
.callout a:hover {
  color: #eee;
}
.callout h4 {
  margin-top: 0;
  font-weight: 600;
}
.callout p:last-child {
  margin-bottom: 0;
}
.callout code,
.callout .highlight {
  background-color: #fff;

}
.callout.callout-danger {
  border-color: #c23321;
  
}
.callout.callout-warning {
  border-color: #c87f0a;
}
.callout.callout-info {
  border-color: #0097bc;
}
.callout.callout-success {
  border-color: #00733e;
}

.callout-danger {
  background-color: #c23321;
  color: white;
}
.callout-warning {
    background-color: #c87f0a;
   
}
.callout-info {
    background-color: #0097bc;

}
.callout-success {
    background-color: #00733e;
    color: white;
    
}
    </style>
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
                                <form method="POST" class="form" action="search.php">
                                    <div class="form">
                                    <input class="search-input" type="text" placeholder=" Search Here" id="navbar-search-input" name="keyword"> 
                                    <a href="#" class="search-bnt">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </li>

                            <?php
                            if(isset($_SESSION['user'])):
                            ?>
                            <li class="profile-dropdown">
                               <div class="profile-name">
                                        <div class="image-content">
                                           <a href="profile.php"> <img style='width: 50px!important;' src="images/<?php echo $_SESSION['image']; ?>" alt=""></a>
                                        </div>
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
                                            <img style='width: 50px!important;'  src="images/<?php echo $_SESSION['image']; ?>" alt="" >
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
                                            <a href="reset.php">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span> Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <?php
                            else:

                            ?>

                         <li class="dropdown profile-dropdown">
                                <a class="dropdown-toggle" href="profile.php" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-user"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="userDropdown">
                                    
                                    <ul class="profile-data">
                                        <li>
                                            <a href="login.php">
                                                <i class="far fa-user-circle"></i>
                                                <span>sign in</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="register.php">
                                                <i class="fas fa-user-cog"></i>
                                                <span>new user</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forget_password.php">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span> remember password</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <?php
                                endif;
                            ?>



                            <li>
                                <a href="favorite.php">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                            <li class="dropdown cart-shape">
                                
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cart-plus"></i>
                                    <span class="cart_count"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="content">
                                        <h6 class="heading"> Cart content :- <span class="cart_count"></span></h6>
                                    </div>
                                    <ul class="data" id="cart_menu">
                                     
                                      
                                    </ul>
                                    <div class="buttons-contain">
                                        <a href="cart_view.php" class="custom-btn black-btn">View Cart</a>
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
                                About 
                            </a>
                        </li>
                        <li>
                            <a href="products.php">
                                Store
                            </a>
                        </li>
                        <!-- 
                        <li>
                            <a href="new.php">
                                New Product
                            </a -->
                        </li>
                       
                        <li>
                            <a href="contact_us.php">
                                Contact us
                            </a>
                        </li>
                         <li class="dropdown">
					            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORY <span class="caret"></span></a>
					            <ul class="dropdown-menu" role="menu">
					              <?php
					             
					                $conn = $pdo->open();
					                try{
					                  $stmt = $conn->prepare("SELECT * FROM category");
					                  $stmt->execute();
					                  foreach($stmt as $row){
					                    echo "
					                      <li><a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
					                    ";                  
					                  }
					                }
					                catch(PDOException $e){
					                  echo "There is some problem in connection: " . $e->getMessage();
					                }

					                $pdo->close();

					              ?>
					            </ul>
					          </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>