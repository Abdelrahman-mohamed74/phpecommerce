<?php

session_start();

if ($_SERVER['REQUEST_METHOD']=='POST') {
//inputs
$userfirstnameUp = $_POST['firstname'];
$userLastnamenameUp = $_POST['Lastname'];
$emailUp    = $_POST['email'];
$passwordUp = $_POST['password'];
$passwordUp = md5($passwordUp);

$_SESSION['fullname'] = $_POST['firstname'];
$_SESSION['email'] = $_POST['email'];
//connect
$servername     = "mysql:host=localhost;dbname=ecomm";
$serverusername = "root";
$serverpassword = "";

try{
$conn = new PDO($servername,$serverusername,$serverpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("INSERT INTO users(firstname,lastname,email,password)
    VALUES(:firstname,:Lastname, :email,:password)");

        $stmt->bindParam(':firstname',$userfirstnameUp);
        $stmt->bindParam(':Lastname',$userLastnamenameUp);
        $stmt->bindParam(':email',$emailUp);
        $stmt->bindParam(':password',$passwordUp);

        $stmt->execute();
        header("Location:index.php");

}catch(PDOException $e){
        echo $e->getmessage();
}

}

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
                            <form method="POST">
                                <div class="heading text-center mb-5">
                                    <h4 class="h4"> Creat New Account </h4>
                                    <p class="another-register"> Have An Account ? <a href="login.php"> Log in
                                        </a></p>
                                    <img src="assets/images/logo.png" alt="" class="logo">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" autocomplete="off" autofocus required name="firstname"  value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>"/>
                                    <label class="floating-label"> firstname </label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" autocomplete="off" autofocus required name="Lastname"  value="<?php echo (isset($_SESSION['Lastname'])) ? $_SESSION['Lastname'] : '' ?>"/>
                                    <label class="floating-label"> Lastname </label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" autocomplete="off" autofocus required name="email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>"/>
                                    <label class="floating-label">Email Address </label>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" autocomplete="off" autofocus
                                        required name="password" />
                                    <label class="floating-label"> Password </label>
                                    <span class="togglePassword"><i class="fas fa-eye" id="togglePassword"></i></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" autocomplete="off" autofocus required />
                                    <label class="floating-label"> Confirm password </label>
                                </div>
                                <button class="submit-btn" name="signup"> Creat Account </button> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img src="images/pattern-3.png" alt="" class="pattern">
        </section>
    </main>
    <!--end main-->
    <!--first intilize jquery lib-->
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
</body>

</html>