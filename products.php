<?php include 'includes/session.php'; ?>

<?php

    include('includes/header.php');

?>
    <!-- start shop -->
    <section class="general-product">
        <div class="container">
            <div class="heading">
                
                <h4> All products </h4>
            </div>
            <div class="callout" id="callout" style="display:none">
                        <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                        <span class="message"></span>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row" id="pagination_data">
                            

                            </div>
                        </div>
                    
				   </div>
                </div>
                <div class="col-12">
                    <div class="block-27 mt-5  text-center">
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
   
    ?>


    <!--Scroll to top button-->
    <a data-scroll href="#" class="scroll-top-btn" id="scroll-btn">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- scroll top button -->
    <?php
    include('includes/footer.php');
    ?>