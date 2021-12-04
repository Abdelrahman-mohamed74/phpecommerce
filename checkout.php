<?php
    include('includes/header.php');

?>
     <!--start main-->
        <main>
            <!--Start chechout-pg-->
            <section class="chechout-pg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 m-auto">
                            <div class="payments-inner">
                                <div class="payments-header">
                                    <div class="text text-center">
                                        <h5>Chechout complete</h5>
                                    </div>
                                </div>
                                <div class="payments-body">
                                    <form id="regForm" class="pay-form">
            
                                        <!-- One "tab" for each step in the form: -->
                                        <!-- Personal info tab -->
                                        <div class="tab">
                                            <div class="sec-heading">
                                                <h4>Personal data</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>First Name </label>
                                                        <input placeholder="First" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Last Name </label>
                                                        <input placeholder="Last" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="ol-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input type="email" placeholder="name@example.com" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="ol-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Telephone number </label>
                                                        <input placeholder="+201014410480" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Location tab -->
                                        <div class="tab">
                                            <div class="sec-heading">
                                                <h4></h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1"> Country</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Egypt</option>
                                                            <option>Germany</option>
                                                
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1"> City</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Cairo</option>
                                                            <option>Dakahlia</option>
                                                            <option>Alexandria</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1"> المدينه</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>New Cairo</option>
                                                            <option>Mansoura</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="ol-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label> Address</label>
                                                        <input placeholder=" Area Name , Street ,  House Number ..." class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Another Address</label>
                                                        <input placeholder="Another Address" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Zip Code</label>
                                                        <input placeholder="1234" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Order details tab -->
                                        <div class="tab">
                                            <div class="sec-heading">
                                                <h4>Order Details</h4>
                                            </div>
                                            <div class="item">
                                                <div class="content">
                                                    <img src="images/product/12.jpg" alt="">
                                                    <div class="text text-center">
                                                        <h6>Amazon Card  </h6>
                                                        <p>250.00 EGP</p>
                                                        <span>Piece 1</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="content">
                                                    <img src="images/product/08.jpg" alt="">
                                                    <div class="text text-center">
                                                        <h6>Amazon Card  </h6>
                                                        <p>250.00 EGP</p>
                                                        <span>Piece 1</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="total">
                                                <h6>Order: <span>500.00 EGP</span></h6>
                                                <h6>Shipping: <span>25.00 EGP</span></h6>
                                                <h6>Total: <span class="active">525.00 EGP</span></h6>
                                            </div>
                                        </div>
                                        <!-- pay method tab -->
                                        <div class="tab">
                                            <div class="sec-heading">
                                                <h4>Payment Way</h4>
                                            </div>
                                            <div class="pay">
                                                <div class="row pay-method mt-3">
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <label>
                                                        <input type="radio" name="visa" value="visa" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <img src="images/pay/visa.png">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <label>
                                                        <input type="radio" name="payment" value="payment" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <img src="images/pay/master.png">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <label>
                                                        <input type="radio" name="paypal" value="paypal" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <img src="images/pay/paypal.png">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <label>
                                                        <input type="radio" name="handcheck" value="handcheck" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                                <img class="handcheck" src="images/handshake.svg">
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="buttons-container">
                                                    <button class="mr-1 ml-1" type="button" data-toggle="modal" data-target="#orderModal">Payment</button>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class="buttons-container">
                                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                        </div> 
                                        <!-- Progress circles -->
                                        <div class="row w-100">
                                            <div class="col-12">
                                                <!-- Circles which indicates the steps of the form: -->
                                                <div class="circles">
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                </div>   
                                            </div>
                                        </div>                   
                                    </form>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!--end main-->
   <?php

include('includes/footer.php');
?>
    <script>
        /****************** Checkout form page /*******************/

        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").style.display = "none";
            } else {
                document.getElementById("nextBtn").display = "التالي";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }
        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }
        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }
        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
    

