<?php
include('includes/header.php');


$conn = $pdo->open();
try{
  $unmproducts = 6;
  $stmt = $conn->prepare("SELECT * FROM products");
  $stmt->execute();
  $stmt = $stmt->rowCount();

  if (isset($_GET['page'])) {
      $page = $_GET['page'];
  }else{
      $page = 1;
  }

  $totalPage = ceil($stmt / $unmproducts);
  $results = $conn->prepare("SELECT * FROM products LIMIT " . $unmproducts . " OFFSET " . ($page-1)*$unmproducts);
  $results->execute();

  
}
catch(PDOException $e){
  echo "There is some problem in connection: " . $e->getMessage();
}

$pdo->close();

?>

<?php
/*
if (isset($_POST['addtocart'])) {
    echo'ho';
    $_SESSION['cart'][]=array(
      
        'itemid'=>$_POST['prodiidd']
    );
    echo "<pre>";
    print_r($_SESSION['cart']);
}


*/

?>



<?php

?>


    <!-- start shop -->
    <section class="general-product">
        <div class="container">
            <div class="heading">
                <div class="callout" id="callout" style="display:none">
                        <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                        <span class="message"></span>
                    </div>
                <h4> Trending products </h4>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">

                                <?php 
                                    foreach ($results as $Oneproduct) {
                                          //  print_r($Oneproduct);
                                         echo "  <div class='col-lg-4 col-md-6 col-12 mb-5'>
                                         <form id='productForm'>
                                                    <div class='product-box'>
                                                      <div class='image-content'>
                                                      <input id='hide' type='hidden' value='".$Oneproduct['id']."' name='prodiidd'>
                                                        <img src='images/products/".$Oneproduct['photo']."' alt='' name='img'/>
                                                        <ul class='add-items'>  
                                                          <li>
                                                            <a
                                                              href='products.php'
                                                              data-toggle='tooltip'
                                                              data-placement='top'
                                                              title='  Add to cart'
             
                                                            >
                                                              <button type='submit' class='fas fa-shopping-basket' name='addtocart'></button>
                                                            </a>
                                                          </li>
                                                          <li>
                                                            <a
                                                              href='single_product.php?Oneid=".$Oneproduct['id']."'
                                                              data-toggle='tooltip'
                                                              data-placement='top'
                                                              title=' View Details'
                                                            >
                                                              <i class='far fa-dot-circle'></i>
                                                            </a>
                                                          </li>
                                                          <li>
                                                            <a
                                                              href='favorite.php?Oneid=".$Oneproduct['id']."'
                                                              data-toggle='tooltip'
                                                              data-placement='top'
                                                              title='  Add to Favourit'
                                                            >
                                                              <i class='far fa-heart'></i>
                                                            </a>
                                                          </li>
                                                        </ul>
                                                      </div>
                                                      <div class='product-content'>
                                                        <a href='single_product.php?Oneid=".$Oneproduct['id']."'
                                                          name='name' >".$Oneproduct['name']."</a
                                                        >
                                                        <p name='pric'>".$Oneproduct['price']."</p>
                                                        <ul class='rate'>
                                                          <li class='active'>
                                                            <i class='fas fa-star'></i>
                                                          </li>
                                                          <li class='active'>
                                                            <i class='fas fa-star'></i>
                                                          </li>
                                                          <li class='active'>
                                                            <i class='fas fa-star'></i>
                                                          </li>
                                                          <li class='active'>
                                                            <i class='fas fa-star'></i>
                                                          </li>
                                                          <li>
                                                            <i class='fas fa-star'></i>
                                                          </li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                        </form>
                                      </div> ";                                    
                                                        }


                                 ?> 

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/66.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.html" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.html" data-toggle="tooltip"
                                                        data-placement="top" title=" View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.html" data-toggle="tooltip" data-placement="top"
                                                        title="   Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.html">Block-colored Hooded Top</a>
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
                                <div class="col-lg-4 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/09.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.html" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.html" data-toggle="tooltip"
                                                        data-placement="top" title="  Add to Favourite ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.html" data-toggle="tooltip" data-placement="top"
                                                        title="   Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.html">Block-colored Hooded Top</a>
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
                                <div class="col-lg-4 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/20.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.html" data-toggle="tooltip" data-placement="top"
                                                        title=" Add to cart ">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.html" data-toggle="tooltip"
                                                        data-placement="top" title=" View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.html" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to Favourite ">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.html">Block-colored Hooded Top</a>
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
                                <div class="col-lg-4 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/18.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.html" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.html" data-toggle="tooltip"
                                                        data-placement="top" title="View Details  ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.html" data-toggle="tooltip" data-placement="top"
                                                        title="   Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.html">Block-colored Hooded Top</a>
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
                                <div class="col-lg-4 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/70.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.html" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.html" data-toggle="tooltip"
                                                        data-placement="top" title=" View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.html" data-toggle="tooltip" data-placement="top"
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
                                <div class="col-lg-4 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/20.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.html" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.html" data-toggle="tooltip"
                                                        data-placement="top" title="View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.html" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.html">Block-colored Hooded Top</a>
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
                                <div class="col-lg-4 col-md-6 col-12 mb-5">
                                    <div class="product-box">
                                        <div class="image-content">
                                            <img src="images/product/16.jpg" alt="">
                                            <ul class="add-items">
                                                <li>
                                                    <a href="cart.html" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to cart">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single_product.html" data-toggle="tooltip"
                                                        data-placement="top" title="View Details ">
                                                        <i class="far fa-dot-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorite.html" data-toggle="tooltip" data-placement="top"
                                                        title="  Add to Favourite">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <a href="single_product.html">Block-colored Hooded Top</a>
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
                    <div class="block-27 mt-5  text-center">
                        <?php
                        for ($count = 1; $count <= $totalPage; ++$count) { 
                            if ($page == $count) {
                                echo '<a class="a-pagination" href="products.php?page='.$count.'">'.$count.'</a> ';
                            }else{
                                echo '<a href="products.php?page='.$count.'">'.$count.'</a> ';
                            }
                        }



                        ?>
                    </div>
                </div>
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