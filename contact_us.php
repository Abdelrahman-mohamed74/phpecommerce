<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $fullname=$_POST['fullname'];
    $mobile=$_POST['tel'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $service=$_POST['service'];
    $desc=$_POST['description'];

   require 'mail/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'emailproject20@gmail.com';                 // SMTP username
$mail->Password = '123456789@@';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('emailproject20@gmail.com', 'emailproject20');
$mail->addAddress('emailproject20@gmail.com', 'emailproject20');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($email, $fullname);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Problem From Website User';
$mail->Body    =  'country : '.$country."<br> service : ".$service."<br> description :  ".$desc;
$mail->AltBody = 'Problem From Website User';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
else {
    echo 'Message has been sent';
} 
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
                                    <button class="custom-btn blue-btn ">Submit </button>
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