<?php include 'includes/session.php'; ?>
<?php

    
    $conn = $pdo->open();
    
if (isset($_GET['Confirm2'])) {
    $code        = $_GET['code'];
    $passconfirm =$_GET['passConfirm'];
    $passconfirm = md5($passconfirm);
    //connect


try{

    $stmt = $conn->prepare("SELECT Code FROM users WHERE Code=:code");
    $stmt->bindParam(':code',$code);
    $stmt->execute();
    $result = $stmt->fetchAll();
    if ($result) {
        foreach ($result as $user) {
            if ($user['Code'] == $code ) {

                $stmt = $conn->prepare("UPDATE users SET Password=:passconfirm WHERE Code=:code");
                $stmt->bindParam(':passconfirm',$passconfirm);
                $stmt->bindParam(':code',$code);
                $stmt->execute();
                header("Location:login.php");
            }else{
                echo "try again";
            }
        }
    }else{
        echo "error";
    }
    
}catch(PDOException $e){
        echo $e->getmessage();
}

}
$conn = $pdo->close();


?>

<?php include 'includes/regheader.php'; ?>
    <main>
        <!--Start register-pg -->
        <section class="register-pg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="form-wrapper">
                            <form method="GET">
                                <div class="heading text-center mb-5">
                                    <h4 class="h4">Write new password</h4>
                                    <img src="assets/images/logo.png" alt="" class="logo">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" autocomplete="off" autofocus required name="code" />
                                    <label class="floating-label">Confimation code</label>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" autocomplete="off"
                                        autofocus required name="passConfirm" />
                                    <label class="floating-label">Password </label>
                                    <span class="togglePassword"><i class="fas fa-eye" id="togglePassword"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" autocomplete="off" autofocus required />
                                    <label class="floating-label">Confirm password </label>
                                </div>
                                <button class="submit-btn" name="Confirm2">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/images/pattern-3.png" alt="" class="pattern">
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