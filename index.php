
<?php include 'includes/session.php'; ?>
<?php
$conn = $pdo->open();





$take = array('Laptops','Desktop PC','Tablets','Smart Phones');

if (isset($_GET['catid'])) {
   $getCat = $_GET['catid'];
} else{
    $getCat = $take[0];
}
try{


         // One Product To Display By It's ID And It's category
            $stmt = $conn->prepare("SELECT * ,category.name ,category.id
              FROM products,category WHERE  products.category_id = category.id  && category.name =:ID");
            $stmt->bindparam(":ID",$getCat);
            $stmt->execute();
            $selcetedProd = $stmt->fetchAll();
    
            $owldata = $conn->prepare("SELECT * FROM products LIMIT 8");
            $owldata->execute();
            $varyData = $owldata->fetchAll();

  
}
catch(PDOException $e){
  echo "There is some problem in connection: " . $e->getMessage();
}


   

$pdo->close();


?>
<?php
    include('includes/header.php');

?>

    <!-- Slider main container -->
    <div class="swiper-container">

        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide slide-1" data-title="Hurry up! <br> Limited time offer."
                data-subtitle=" <a href='products.php' class='custom-btn btn-danger'>Shop Now </a>">
                <img src="images/01.jpg" width="70%" height="100%" alt="">
            </div>
            <div class="swiper-slide slide-2" data-title="Hurry up!<br> Limited time offer."
                data-subtitle=" <a href='products.php' class='custom-btn btn-danger'>Shop Now</a>">
                <img src="images/02.jpg" width="70%" height="100%" alt="">
            </div>
            <div class="swiper-slide slide-3" data-title="Hurry up!<br> Limited time offer."
                data-subtitle=" <a href='products.php' class='custom-btn btn-danger'>Shop Now</a>">
                <img src="images/03.jpg" width="70%" height="100%" alt="">
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
                        <form action="index.php" id="catid" >
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                   <?php
                                   
                                   for ($i=0; $i <= count($take)-1; $i++) { 

                                       echo '<li class="nav-item">
                                        <a href="index.php?catid='.$take[$i].'" class="nav-link " data-toggle="pills" id="dn" value="'.$take[$i].'" >
                                            
                                            '.$take[$i].'
                                        </a>

                                            </li>';
                                   }

                                    ?>
                                </ul>
                                
                       </form>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">
                              <?php

                              foreach ($selcetedProd as $product) {
                                  echo '  <div class="col-lg-4 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/'.$product["photo"].'" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.php?Oneid='.$product["id"].'" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.php?Oneid='.$product["id"].'" data-toggle="tooltip"
                                                        data-placement="top" title=" View Details">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.php?Oneid='.$product["id"].'" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to Favourit">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.php?Oneid='.$product["id"].'">'.$product["name"].'</a>
                                            <p>'.$product["price"].'</p>
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
                                </div>';
                              }


                              ?>
                                
                        
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
                            <img src="images/banner2.jpg" alt="">
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
                        <?php

                            foreach ($varyData as $onerow) {
                                echo '<div class="item">
                            <div class="product-box">
                                <div class="image-content">
                                    <img src="images/'.$onerow['photo'].'" alt="">
                                    <ul class="add-items">
                                        <li>
                                            <a href="cart.php?Oneid='.$onerow['id'].'" data-toggle="tooltip" data-placement="top"
                                                title="ا Add to cartه>
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single_product.php?Oneid='.$onerow['id'].'" data-toggle="tooltip" data-placement="top"
                                                title="View Details  ">
                                                <i class="far fa-dot-circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorite.php?Oneid='.$onerow['id'].'" data-toggle="tooltip" data-placement="top"
                                                title=" Add to cart ">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <a href="single_product.php?Oneid='.$onerow['id'].'">'.$onerow['name'].'</a>
                                    <p>'.$onerow['price'].' $</p>
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
                        </div>';
                            }


                        ?>
                    </div>
    </section>
    <!-- start flipdown -->
    <section class="skin-offers gray-bk">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <div class="content">
                        <h6>Sale up to 50% </h6>
                        <h4>Gear Review IPad Pro Top</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus unde amet adipisci
                            cupiditate voluptatem quisquam!</p>
                        <div id="flipdown" class="flipdown"></div>
                        <a href="checkout.php" class="custom-btn blue-btn">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <div class="image-content">
                        <img src="images/Gear-Review-iPad-Pro-Top.jpg" alt="">
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
                <?php
                    $brands = array(
                        'dell2.jpg',
                        'lenovo.jfif',
                        'mack.jfif',
                        'assus.jfif',
                        'sony.png',
                        'samsung.png',
                        'micro.png',
                        'toshipa2.jpg');
                    for ($i=0; $i <= count($brands)-1 ; $i++) { 
                        echo'  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="products.php" class="box">
                        <div class="image-content">
                            <img src="images/brands/'.$brands[$i].'" width="100%" height="100%" alt="Logo">
                        </div>
                    </a>
                </div>';
                    }

                ?>
            </div>
        </div>
    </section>

    <!--Scroll to top button-->
    <a data-scroll href="#" class="scroll-top-btn" id="scroll-btn">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- scroll top button -->

    <?php
    include('includes/footer.php');
    ?>
