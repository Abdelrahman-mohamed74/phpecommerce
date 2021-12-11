<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: index.php');
  }

?>



<?php include 'includes/regheader.php'; ?>

    <!--start main-->
    <main>
        <!--Start register-pg -->
        <section class="register-pg">
		
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto">
					
                        <div class="form-wrapper">
                            <form method="POST" action="verify.php">
								<?php
								  if(isset($_SESSION['error'])){
									echo "
									  <div class='callout callout-danger text-center'>
										<p>".$_SESSION['error']."</p> 
									  </div>
									";
									unset($_SESSION['error']);
								  }
								  if(isset($_SESSION['success'])){
									echo "
									  <div class='callout callout-success text-center'>
										<p>".$_SESSION['success']."</p> 
									  </div>
									";
									unset($_SESSION['success']);
								  }
								?>
                                <div class="heading text-center mb-5">
                                    <h4 class="h4">Sign in</h4>
                                    <p class="another-register"> Have Not Account ? <a href="register.php">Sign up</a>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" autocomplete="off" autofocus required name="email" />
                                    <label class="floating-label"> Email Address </label>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" autocomplete="off" autofocus
                                        required name="password" />
                                    <label class="floating-label"> Password </label>
                                    <span class="togglePassword"><i class="fas fa-eye" id="togglePassword"></i></span>
                                </div>
                                <div class="text w-100">
                                    <a class="forget-pass" href="recover_mail.php"> Fogrt Password ?</a>
                                </div>
                                <button class="submit-btn" name="signin"> Log in </button>
                                <a class="submit-btn" name="signin" href="index.php">  Back To Home</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img src="images/pattern-3.png" alt="" class="pattern">
        </section>
    </main>
    <!--end main-->
    <?php include 'includes/footer1.php'; ?>


    <script>
        //show password
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>