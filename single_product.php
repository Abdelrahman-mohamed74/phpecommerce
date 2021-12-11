<<<<<<< HEAD

    <?php
include('includes/session.php');
?>
=======
<?php include 'includes/session.php'; ?>
>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12
<?php
    $conn = $pdo->open();

<<<<<<< HEAD
=======
    $slug = $_GET['product'];
>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12

    try{
                
        $stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname, products.id AS prodid FROM products LEFT JOIN category ON category.id=products.category_id WHERE slug = :slug");
        $stmt->execute(['slug' => $slug]);
        $product = $stmt->fetch();
        
    }
    catch(PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }

    //page view
    $now = date('Y-m-d');
    if($product['date_view'] == $now){
        $stmt = $conn->prepare("UPDATE products SET counter=counter+1 WHERE id=:id");
        $stmt->execute(['id'=>$product['prodid']]);
    }
    else{
        $stmt = $conn->prepare("UPDATE products SET counter=1, date_view=:now WHERE id=:id");
        $stmt->execute(['id'=>$product['prodid'], 'now'=>$now]);
    }

?>
<<<<<<< HEAD
            <!--start product-details -->
            <section class="product-details">
                <div class="container">
                    <div class="row">
                        
                        <?php 
                            foreach ($selcetedProd as $singelPro) {
                                echo '<div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="item">
                                    <img src="images/'.$singelPro["photo"].'" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-12 mb-5">
                            <div class="content">
                                <h3 class="type">'.$singelPro['name'].'</h3>
                                <h3>'.$singelPro["name"].'</h3>
                                <h3  class="price">'.$singelPro["price"].'$</h3>
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
                                    
                                    '.$singelPro["description"].'                                    
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
                                        <strong>Available</strong>
                                        <span>'.$singelPro['counter'].'</span>
                                    </li>
                                    <li>
                                        <strong>Department</strong>
                                        <span>
                                             '.$singelPro['name'].'</span>
                                    </li>
                                    <li>
                                        <strong>Search Code </strong>
                                        <span>
                                        '.$singelPro['slug'].'
                                            </span>
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
=======
>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12

<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<script>
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="wrapper">
      <div class="content-wrapper">
        <div class="container">

          <!-- Main content -->
          <section class="content">
            <div class="row">
                <div class="col-sm-9">
                    <div class="callout" id="callout" style="display:none">
                        <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                        <span class="message"></span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo (!empty($product['photo'])) ? 'images/products/'.$product['photo'] : 'images/noimage.jpg'; ?>" width="100%" class="zoom" data-magnify-src="images/large-<?php echo $product['photo']; ?>">
                            <br><br>
                            <form class="form-inline" id="productForm">
                                <div class="form-group">
                                    <div class="input-group col-sm-5">
                                      
                                        <span class="input-group-btn">
                                            <button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
                                        </span>
                                        <input type="text" name="quantity" id="quantity" class="form-control input-lg" value="1">

                                        <span class="input-group-btn">
                                            <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                        <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">

                                    </div>
                                     
                                         <button type="submit" class="btn btn-primary bg-danger"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="page-header"><?php echo $product['prodname']; ?></h1>
                            <h3><b>&#36; <?php echo number_format($product['price'], 2); ?></b></h3>
                            <p><b>Category:</b> <a href="category.php?category=<?php echo $product['cat_slug']; ?>"><?php echo $product['catname']; ?></a></p>
                            <p><b>Description:</b></p>
                            <p><?php echo $product['description']; ?></p>
                        </div>
                    </div>
                    <br>
                    <div class="fb-comments" data-href="http://localhost/ecommerce/product.php?product=<?php echo $slug; ?>" data-numposts="10" width="100%"></div> 
                </div>
            </div>
          </section>
         
        </div>
      </div>
    <?php $pdo->close(); ?>
    <?php include 'includes/footer.php'; ?>
</div>

<<<<<<< HEAD
include('includes/footer1.php');
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
=======
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
    $('#add').click(function(e){
        e.preventDefault();
        var quantity = $('#quantity').val();
        quantity++;
        $('#quantity').val(quantity);
    });
    $('#minus').click(function(e){
        e.preventDefault();
        var quantity = $('#quantity').val();
        if(quantity > 1){
            quantity--;
        }
        $('#quantity').val(quantity);
    });

});
</script>
</body>
</html>
>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12
