<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: index.php');
  }
?>

<?php
//session_start();
//include('includes/conn.php');

/*

if (isset($_POST['signin'])) {
    $emailAddress = $_POST['emailIn'];
    $passwordIn   = $_POST['passwordIn'];
    $passwordIn   = md5($passwordIn);

    //connect
    $servername     = "mysql:host=localhost;dbname=ecomm";
    $serverusername = "root";
    $serverpassword = "";

try{
    $conn = new PDO($servername,$serverusername,$serverpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :useremail");
    $stmt->bindParam(':useremail',$emailAddress);
    $stmt->execute();
    $result = $stmt->fetchAll();
    
    if ($result) {
        foreach ($result as $user) {

            if ($user['password'] == md5($_POST['passwordIn'])) {
                $_SESSION['fullname']=$user['firstname']; 
                $_SESSION['email']=$user['email']; 
                 $_SESSION['Phone'] =$user['Phone']; 
                $_SESSION['Gender'] =$user['Gender']; 

                header("Location:index.php");
            }else{
                echo "email not found";
            }
        }
    }else{
        echo "error";
    }


}catch(PDOException $e){
        echo $e->getmessage();
}

}
*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, 
            shrink-to-fit=no">
    <meta name="author" content="Moataz Elsaied">
    <link rel="stylesheet" href="css/lib/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.0/rangeslider.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@6.3.2/swiper-bundle.min.css">
    <!--the intilize of bootstrap ar version lib-->
    <link rel="stylesheet" href="css/lib/bootstrap.css">
    <!--the intilize of owl carousel lib-->
    <link rel="stylesheet" href="css/lib/owl.carousel.min.css">
    <!--the intilize of dots that appear with owl carousel -->
    <link rel="stylesheet" href="css/lib/owl.theme.default.css">
    <link rel="stylesheet" href="css/lib/flipdown.css">
    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/media.css">
    <title>PHP ECOMMERCE</title>
</head>

<body>
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
    <!--loading page-->
    <div class="loader">
        <div class="container">
            <div class="loading-content">
                <div class="drop-water light-blue"></div>
                <div class="drop-water light-blue"></div>
                <div class="box">
                    <div class="wave light-blue">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/lib/jquery-3.6.0.min.js"></script>
    <script src="js/lib/popper.js"></script>
    <script src="js/lib/bootstrap.js"></script>
    <script src="js/lib/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/swiper@6.3.2/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.0/gsap.min.js"></script>
    <script src="js/lib/flipdown.js"></script>
    <script src="js/main.js"></script>

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
	<?php include 'includes/scripts.php' ?>

</body>

</html>