<?php include 'includes/session.php'; ?>

<?php include 'includes/session.php'; ?>


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
								<th class="text-center">Product name</th>

                                <th class="text-center">quantity</th>
                                <th class="text-center">price</th>
								<th class="text-center">Total price</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            
<<<<<<< HEAD
					   </tbody>
=======
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
>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12
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
                            
                            <div class="links row">
                                <a href="products.php"  class="oldlink">Continue Shopping </a>
                                <a href="cart.php" class="oldlink" >Renewing Cart</a>
                                <a href="checkout.php" class="oldlink" >Payment Now</a>
								<?php
								if(isset($_SESSION['user'])){
									echo "
										<div id='paypal-button'></div>
									";
								}
								else{
									echo "
										<h4 class='text-center'>You need to <a href='login.php'>Login</a> to checkout using paypal.</h4>
									";
								}
							?>
                            </div>
							<div>
						
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

include('includes/footer1.php');
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
<<<<<<< HEAD
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
=======
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
>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12

});

function getDetails(){
<<<<<<< HEAD
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
=======
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
>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12
}
</script>
<!-- Paypal Express -->
<script>
paypal.Button.render({
    env: 'sandbox', // change for production if app is live,

<<<<<<< HEAD
	client: {
=======
    client: {
>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12
        sandbox:    'ASb1ZbVxG5ZFzCWLdYLi_d1-k5rmSjvBZhxP2etCxBKXaJHxPba13JJD_D3dTNriRbAv3Kp_72cgDvaZ',
        //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
    },

    commit: true, // Show a 'Pay Now' button

    style: {
<<<<<<< HEAD
    	color: 'gold',
    	size: 'small',
		height:40
=======
        color: 'gold',
        size: 'small'
>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12
    },

    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
<<<<<<< HEAD
                    	//total purchase
                        amount: { 
                        	total: total, 
                        	currency: 'USD' 
=======
                        //total purchase
                        amount: { 
                            total: total, 
                            currency: 'USD' 
>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12
                        }
                    }
                ]
            }
        });
    },

    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
<<<<<<< HEAD
			window.location = 'sales.php?pay='+payment.id;
=======
            window.location = 'sales.php?pay='+payment.id;
>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12
        });
    },

}, '#paypal-button');
</script>
<<<<<<< HEAD
</body>
</html>
	
	
	
	
	
=======

>>>>>>> 5f9f2c63317f00aff337015fe8cc9c013f416b12
