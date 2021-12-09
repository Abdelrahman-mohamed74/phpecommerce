
<?php

if (isset($_GET['add-to-cart']) && $_GET['prodid']) {
    // $_SESSION['cart'] = array(
    //     'Id' => $_GET['oneid'] , 
    //     'item_name' => $oneitem['productName'],
    //     'item_img' => $oneitem['productImg'],
    //     'item_price' => $oneitem['productPrice'],
    // );

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
$result= $stmt->fetchAll();
foreach ($result as $oneitem) {
    // code...
}
    $_SESSION['cart'] = array(
        'Id' => $_GET['prodid'] , 
        'item_name' => $oneitem['productName'],
        'item_img' => $oneitem['productImg'],
        'item_price' => $oneitem['productPrice'],
    );
}catch(PDOException $e){
        echo $e->getmessage();
}
$conn = null;
}

?>

<?php

include('includes/header.php');
?>
    <main>
        <!--Start cart-pg -->
        <section class="cart-pg">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center"> Picture</th>
                                <th class="text-center">Product</th>
                                <th class="text-center">Details</th>
                                <th class="text-center">Number</th>
                                <th class="text-center">Total</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="images/products/66.jpg" alt="" class="img-thumbnail">
                                    </a>
                                </td>
                                <td class="text-center">Product Name </td>
                                <td class="text-center">More Details For this Product</td>
                                <td class="text-center">
                                    <form>
                                        <div class="quantity-container">
                                            <div class="add-more">
                                                <span class="qt-minus"><i class="fas fa-minus"></i></span>
                                                <span class="qt">1</span>
                                                <span class="qt-plus"><i class="fas fa-plus"></i></span>

                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">$122.00</td>
                                <td>
                                    <a href="#">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="images/products/69.jpg" alt="" class="img-thumbnail">
                                    </a>
                                </td>
                                <td class="text-center">Product Name</td>
                                <td class="text-center">More Details For this Product</td>
                                <td class="text-center">
                                    <form>
                                        <div class="quantity-container">
                                            <div class="add-more">
                                                <span class="qt-minus"><i class="fas fa-minus"></i></span>
                                                <span class="qt">1</span>
                                                <span class="qt-plus"><i class="fas fa-plus"></i></span>

                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">$122.00</td>
                                <td>
                                    <a href="#">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="images/products/67.jpg" alt="" class="img-thumbnail">
                                    </a>
                                </td>
                                <td class="text-center"> Product Name </td>
                                <td class="text-center">More Details For this Product</td>
                                <td class="text-center">
                                    <form>
                                        <div class="quantity-container">
                                            <div class="add-more">
                                                <span class="qt-minus"><i class="fas fa-minus"></i></span>
                                                <span class="qt">1</span>
                                                <span class="qt-plus"><i class="fas fa-plus"></i></span>

                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">$122.00</td>
                                <td>
                                    <a href="#">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <div class="cart-summary">
                            <h6>Total : <span>$366.00</span></h6>
                            <p>Shipping And Taxes Will be taked at payment .</p>
                            <div class="links">
                                <a href="products.php">Continue Shopping </a>
                                <a href="cart.php">Renewing Cart</a>
                                <a href="checkout.php">Payment Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--end main-->
    <!--Scroll to top button-->
    <a data-scroll href="#" class="scroll-top-btn" id="scroll-btn">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- scroll top button -->
    <?php

include('includes/footer.php');
?>
    <script>
        // ------------ increase products -----------
        $(".qt-plus").click(function () {
            $(this).parent().children(".qt").php(parseInt($(this).parent().children(".qt").php()) + 1);
        });

        $(".qt-minus").click(function () {

            child = $(this).parent().children(".qt");

            if (parseInt(child.php()) > 1) {
                child.php(parseInt(child.php()) - 1);
            }

            $(this).parent().children(".full-price").addClass("minused");

        });
    </script>
