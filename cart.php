<?php include 'includes/session.php'; ?>

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
                          
                        </tbody>
                    </table>
                </div>
                <?php
                        if(isset($_SESSION['user'])){
                            echo "
                                <div id='paypal-button'></div>
                            ";
                        }
                        else{
                            echo "
                                <h4>You need to <a href='login.php'>Login</a> to checkout.</h4>
                            ";
                        }
                    ?>
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
<?php include 'includes/scripts.php'; ?>

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
    <script>
var total = 0;
$(function(){
    $(document).on('click', '.cart_delete', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            type: 'POST',
            url: 'cart_delete.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                if(!response.error){
                    getDetails();
                    getCart();
                    getTotal();
                }
            }
        });
    });

    $(document).on('click', '.minus', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        var qty = $('#qty_'+id).val();
        if(qty>1){
            qty--;
        }
        $('#qty_'+id).val(qty);
        $.ajax({
            type: 'POST',
            url: 'cart_update.php',
            data: {
                id: id,
                qty: qty,
            },
            dataType: 'json',
            success: function(response){
                if(!response.error){
                    getDetails();
                    getCart();
                    getTotal();
                }
            }
        });
    });

    $(document).on('click', '.add', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        var qty = $('#qty_'+id).val();
        qty++;
        $('#qty_'+id).val(qty);
        $.ajax({
            type: 'POST',
            url: 'cart_update.php',
            data: {
                id: id,
                qty: qty,
            },
            dataType: 'json',
            success: function(response){
                if(!response.error){
                    getDetails();
                    getCart();
                    getTotal();
                }
            }
        });
    });

    getDetails();
    getTotal();

});

function getDetails(){
    $.ajax({
        type: 'POST',
        url: 'cart_details.php',
        dataType: 'json',
        success: function(response){
            $('#tbody').html(response);
            getCart();
        }
    });
}

function getTotal(){
    $.ajax({
        type: 'POST',
        url: 'cart_total.php',
        dataType: 'json',
        success:function(response){
            total = response;
        }
    });
}
</script>
<!-- Paypal Express -->
<script>
paypal.Button.render({
    env: 'sandbox', // change for production if app is live,

    client: {
        sandbox:    'ASb1ZbVxG5ZFzCWLdYLi_d1-k5rmSjvBZhxP2etCxBKXaJHxPba13JJD_D3dTNriRbAv3Kp_72cgDvaZ',
        //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
    },

    commit: true, // Show a 'Pay Now' button

    style: {
        color: 'gold',
        size: 'small'
    },

    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                        //total purchase
                        amount: { 
                            total: total, 
                            currency: 'USD' 
                        }
                    }
                ]
            }
        });
    },

    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
            window.location = 'sales.php?pay='+payment.id;
        });
    },

}, '#paypal-button');
</script>

