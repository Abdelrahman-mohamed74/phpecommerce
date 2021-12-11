<?php include 'includes/session.php';

if (!isset($_SESSION['user'])) 
{
    header('location: login.php');
  }
?>


<?php
$conn = $pdo->open();

if (isset($_POST['submit'])) {
$_SESSION['fullname'] = $_POST['fullnameedit'];


try{


    $stmt = $conn->prepare("UPDATE users SET firstname = :username WHERE email = :useremail");
    $stmt->bindParam(':username',$_POST['fullnameedit']);
    $stmt->bindParam(':useremail',$_SESSION['email'] );
    $stmt->bindParam(':Gender',$_SESSION['Gender'] );
    $stmt->bindParam(':Phone',$_SESSION['Phone'] );
    $stmt->execute();


     $target_dir = "images/";
               $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                $_SESSION['image']=$_FILES["fileToUpload"]["name"];

          } else {
                
             }


    $stmt=$conn->prepare("UPDATE users SET photo = :fileToUpload WHERE email=:useremail" );
    $stmt->bindParam(':fileToUpload',$_SESSION['image']);
    $stmt->bindParam(':useremail',$_SESSION['email']);
    $stmt->execute();


}catch(PDOException $e){
        echo $e->getmessage();
}

} else{

}
$conn = $pdo->close();

?>

<?php
    include('includes/header.php');

?>

    <main>
        <!------------------------------------ profile   ------------------------------------->
        <!--Start profile-pg-->
        <section class="profile-pg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="side-nav">
                            <div class="profile-img"> <img src="images/<?php echo $_SESSION['image']; ?>" alt="user-pic">
                                <h6><?php echo $_SESSION['fullname'];?></h6>
                            </div>
                            <div class="links">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-tab1-tab" data-toggle="pill"
                                        href="#v-pills-tab1" role="tab" aria-controls="v-pills-tab1"
                                        aria-selected="false">
                                        <i class="far fa-edit"></i> Personal Data
                                    </a>
                                    <a class="nav-link" id="v-pills-tab2-tab" data-toggle="pill" href="#v-pills-tab2"
                                        role="tab" aria-controls="v-pills-tab2" aria-selected="false">
                                        <i class="fas fa-map-marker-alt"></i> Address
                                    </a>
                                    <a class="nav-link" id="v-pills-tab3-tab" data-toggle="pill" href="#v-pills-tab3"
                                        role="tab" aria-controls="v-pills-tab3" aria-selected="false">
                                        <i class="far fa-bell"></i> Notification
                                    </a>
                                    <a class="nav-link" id="v-pills-tab4-tab" data-toggle="pill" href="#v-pills-tab4"
                                        role="tab" aria-controls="v-pills-tab4" aria-selected="false">
                                        <i class="fas fa-shopping-bag"></i> Orders
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-tab1" role="tabpanel"
                                aria-labelledby="v-pills-tab1-tab">
                                <div class="tab-wrapper info-tab">
                                    <div class="sec-heading">
                                        <h4> Personal Data</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6> Full Name</h6>
                                                <p class="text" name="username"><?php echo $_SESSION['fullname']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>Email Address </h6>
                                                <p class="text" name="email"><?php echo $_SESSION['email']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>Number</h6>
                                                <p class="text" name="mobile"><?php echo $_SESSION['Phone']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>Gender</h6>
                                                <p class="text" name="gender"><?php echo $_SESSION['Gender']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="main-butn" data-toggle="modal"
                                                data-target="#infoModal">Edit data </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-tab2" role="tabpanel"
                                aria-labelledby="v-pills-tab2-tab">
                                <div class="tab-wrapper info-tab">
                                    <div class="sec-heading">
                                        <h4>Data Address</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>Country</h6>
                                                <p class="text">Egypt</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>City</h6>
                                                <p class="text">Cairo</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6>Address</h6>
                                                <p class="text"> Input Address here...</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-content">
                                                <h6> ZIP Code</h6>
                                                <p class="text">1234</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="main-butn" data-toggle="modal"
                                                data-target="#addressModal">Edit Data </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-tab3" role="tabpanel"
                                aria-labelledby="v-pills-tab3-tab">
                                <div class="tab-wrapper notifications-tab">
                                    <div class="sec-heading">
                                        <h4>Notification</h4>

                                    </div>
                                    <div class="noti-item mt-3">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <span class="new"></span>
                                                <img src="images/55.jpg" alt="" class="noti-img">
                                            </div>
                                            <div class="col-md-8">
                                                <h6>Noon Card</h6>
                                                <span class="text"> Your order under review </span>
                                            </div>
                                            <div class="col-md-2">
                                                <span class="time">9:35 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti-item mt-3">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="images/12.jpg" alt="" class="noti-img">
                                            </div>
                                            <div class="col-md-8">
                                                <h6>Noon Card</h6>
                                                <span class="text">Your order under review </span>
                                            </div>
                                            <div class="col-md-2">
                                                <span class="time">9:35 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-tab4" role="tabpanel"
                                aria-labelledby="v-pills-tab4-tab">
                                <div class="tab-wrapper orders-tab">
                                    <div class="sec-heading">
                                        <h4>Orders</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"> Product Pic</th>
                                                    <th scope="col" class="d-none-sm">Name</th>
                                                    <th scope="col" class="d-none-md"> Order Number</th>
                                                    <th scope="col" class="d-none-md">Date</th>
                                                    <th scope="col">Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><img src="images/55.jpg" alt=""></td>
                                                    <td class="d-none-sm"> Product Name</td>
                                                    <td class="d-none-md">12542325</td>
                                                    <td class="d-none-md">22 april 2021</td>
                                                    <td><a href="#"><i class="fas fa-info-circle"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td><img src="images/20.jpg" alt=""></td>
                                                    <td class="d-none-sm">Product Name </td>
                                                    <td class="d-none-md">12542325</td>
                                                    <td class="d-none-md">22 april 2021</td>
                                                    <td><a href="#"><i class="fas fa-info-circle"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td><img src="images/15.jpg" alt=""></td>
                                                    <td class="d-none-sm">Product Name </td>
                                                    <td class="d-none-md">12542325</td>
                                                    <td class="d-none-md">22 april 2021</td>
                                                    <td><a href="#"><i class="fas fa-info-circle"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Info Modal-->
        <!---------------------------------------- Edit ----------------------------------->
        <form method="POST" enctype="multipart/form-data">
        <div class="modal info-modal fade" id="infoModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data </h5><button type="button"
                            class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="image-container">
                            <img src="images/<?php echo $_SESSION['image']; ?>" alt="user-pic" name="image">
                            <input type="file" class="custom-file-input" id="input-profile" name="fileToUpload"  capture="">
                            <button><i class="far fa-edit"></i></button>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Full Name </span>
                                    </div><input type="text" name="fullnameedit" class="form-control enable-input" value="<?php echo $_SESSION['fullname']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Email Address </span>
                                    </div><input type="text" name="emailedit" class="form-control enable-input" value="<?php echo $_SESSION['email']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span> Telephone number</span></div>
                                    <input type="text" class="form-control enable-input" value="+201014410480">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Gender</span>
                                    </div>
                                    <select class="form-control enable-input">
                                        <option>male</option>
                                        <option> female </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span> Password</span>
                                    </div><input type="password" class="form-control enable-input" value="**********">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Confirm Password </span>
                                    </div><input type="password" class="form-control enable-input" value="**********">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="main-butn" name="submit">Save</button>
                    </div>

                </div>

            </div>

        </div>
        </form>
        <!--Address Modal-->
        <div class="modal info-modal fade" id="addressModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"> Edit Data</h5><button type="button"
                            class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Country</span> </div>
                                    <select class="form-control enable-input">
                                        <option>Egypt</option>
                                        <option> Egypt </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>City</span></div>
                                    <select class="form-control enable-input">
                                        <option>Cairo</option>
                                        <option> Cairo </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Address </span></div>
                                    <input type="text" class="form-control enable-input" value="Address Details Here">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text">
                                    <div class="content"> <span>Zip Code </span></div>
                                    <input type="text" class="form-control enable-input" value="1234">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="main-butn">Save</button>
                    </div>

                </div>

            </div>

        </div>
    </main>
    <!--Scroll to top button-->
    <a data-scroll href="#" class="scroll-top-btn" id="scroll-btn">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- scroll top button -->
    <?php

include('includes/footer.php');
?>