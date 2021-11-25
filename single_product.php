
<?php
if (isset($_GET['prodid'])) {
    // code...

//connect
$servername     = "mysql:host=localhost;dbname=ecomm";
$serverusername = "root";
$serverpassword = "";

try{
$conn = new PDO($servername,$serverusername,$serverpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT * FROM products WHERE productID = :id");
$stmt->bindparam(":id",$_GET['prodid']);
$stmt->execute();
$result = $stmt->fetchAll();

$get = $conn->prepare("SELECT * FROM products");
$get->execute();
$show = $get->fetchAll();
}catch(PDOException $e){
        echo $e->getmessage();
}
$conn = null;
}

?>

<?php

include('includes/header.php');
?>
            <!--start product-details -->
            <section class="product-details">
                <div class="container">
                    <div class="row">
                        
                        <?php 

                            foreach ($result as $singelpro) {
                                echo '<div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class=" owl-carousel owl-item owl-single-product">
                                <div class="item">
                                    <img src="'.$singelpro["productImg"].'" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-12 mb-5">
                            <div class="content">
                                <h1>'.$singelpro["productName"].'</h1>
                                <h3  class="price">'.$singelpro["productPrice"].'</h3>
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
                                    
                                    '.$singelpro["productDes"].'                                    
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
                        </div>';
                            }

                          ?>

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
                                        <?php

                                            foreach ($show as $showpro) {
                                                echo '<div class="item">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="'.$showpro['productImg'].'" alt="">
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
                                            <a href="single_product.php?prodid='.$showpro["productID"].'">'.$showpro["productName"].'</a>
                                            <p>'.$showpro["productPrice"].'</p>
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
            </section>
        </main>
    <!--Scroll to top button-->
    <a data-scroll href="#" class="scroll-top-btn" id="scroll-btn">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- scroll top button -->
    <!-- Start Footer -->
    <?php

include('includes/footer.php');
?>
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