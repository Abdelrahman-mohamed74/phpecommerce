<?php include 'includes/session.php'; ?>

<?php

?>

<?php



if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn']))
{
    $fullname=$_POST['fullname'];
    $mobile=$_POST['tel'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $service=$_POST['service'];
    $desc=$_POST['description'];

    // Get PHP Mailer
    include('ContactMailer.php');
  
}

?>
<?php
    include('includes/header.php');

?>

    <!--start contact us-->
    <section class="contact-us">
        <div class="container">
            <div class="heading">
                <h4>Order Your Service</h4>
                <p>We Are On Your Service</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <form class="form" enctype="multipart/form-data" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Full Name " name="fullname">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Telephone Number" name="tel">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Country" name="country">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <textarea placeholder="Service Type" name="service"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <textarea placeholder="Service description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-images"></div>
                            </div>
                            <div class="col-12">
                                <div class="button-content">
                                    <button class="custom-btn blue-btn " name="btn">Submit </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </main>
    <!--end main-->
    <!-- Start Footer -->
   <?php

include('includes/footer.php');
?>