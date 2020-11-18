    <?php
     $pageTitle = 'Мой аккаунт'; 
     require_once('./apps/config.php');
     include('./templates/_head.php');

     if(isset($_GET['logout'])){
    unset($_SESSION['login']);
    unset($_SESSION['cart']);
    header('Location: login-register.php');

     }


    ?>

<div class="wrapper">
    
    <?php 

    include('./templates/_header.php');
    include('./templates/_header_mob.php');
    ?>

    <div class="breadcrumb-area pt-35 pb-35 bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Главная</a>
                    </li>
                    <li class="active">Мой аккаунт </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- my account wrapper start -->
    <div class="my-account-wrapper pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                        Доска</a>   
                                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Заказы</a>         
                                    <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> Адресс</a>    
                                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Настройки Аккаунта</a>

                                    <form action="" method="get">    

                                    <button class="btn btn-danger" name="logout" type="submit" value="close">Выйти</button>
                                    </form>

                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->    
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Доска</h3>    
                                            <div class="welcome">
                                                <p>Привет, <strong><?php echo $_SESSION['name']; ?></strong></p>
                                            </div>
    
                                            <p class="mb-0">С панели вашего аккаунта. Вы можете легко проверять и просматривать свои последние заказы, управлять адресами доставки и выставления счетов, а также редактировать свой данные учетной записи.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Orders</h3>    
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>    
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Pending</td>
                                                            <td>$3000</td>
                                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>July 22, 2018</td>
                                                            <td>Approved</td>
                                                            <td>$200</td>
                                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>June 12, 2017</td>
                                                            <td>On Hold</td>
                                                            <td>$990</td>
                                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Downloads</h3>    
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Date</th>
                                                        <th>Expire</th>
                                                        <th>Download</th>
                                                    </tr>
                                                    </thead>    
                                                    <tbody>
                                                        <tr>
                                                            <td>Haven - Free Real Estate PSD Template</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Yes</td>
                                                            <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>HasTech - Profolio Business Template</td>
                                                            <td>Sep 12, 2018</td>
                                                            <td>Never</td>
                                                            <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Payment Method</h3>
                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Billing Address</h3>    
                                            <address>
                                                <p><strong>Alex Tuntuni</strong></p>
                                                <p>1355 Market St, Suite 900 <br>
                                                    San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                            </address>    
                                            <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit Address</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Account Details</h3>    
                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="first-name" class="required">First Name</label>
                                                                <input type="text" id="first-name" />
                                                            </div>
                                                        </div>   
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="last-name" class="required">Last Name</label>
                                                                <input type="text" id="last-name"  />
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="single-input-item">
                                                        <label for="display-name" class="required">Display Name</label>
                                                        <input type="text" id="display-name" />
                                                    </div>    
                                                    <div class="single-input-item">
                                                        <label for="email" class="required">Email Addres</label>
                                                        <input type="email" id="email" />
                                                    </div>    
                                                    <fieldset>
                                                        <legend>Password change</legend>
                                                        <div class="single-input-item">
                                                            <label for="current-pwd" class="required">Current Password</label>
                                                            <input type="password" id="current-pwd" />
                                                        </div>   
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="new-pwd" class="required">New Password</label>
                                                                    <input type="password" id="new-pwd" />
                                                                </div>
                                                            </div>    
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="confirm-pwd" class="required">Confirm Password</label>
                                                                    <input type="password" id="confirm-pwd" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item">
                                                        <button class="check-btn sqr-btn ">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper end -->
    <footer class="footer-area bg-paleturquoise">
        <div class="container">
            <div class="footer-top text-center pt-45 pb-45">
                <nav>
                    <ul>
                        <li><a href="#">Home </a></li>
                        <li><a href="#">Shop </a></li>
                        <li><a href="#">Accessories  </a></li>
                        <li><a href="#">Contact </a></li>
                        <li><a href="#">About </a></li>
                        <li><a href="#">Blog </a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="footer-bottom border-top-1 pt-20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="footer-social pb-20">
                            <a href="#">Facebok</a>
                            <a href="#">Twitter</a>
                            <a href="#">Linkedin</a>
                            <a href="#">Instagram</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="copyright text-center pb-20">
                            <p>Copyright © All Right Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-12">
                        <div class="payment-mathod pb-20">
                            <a href="#"><img src="assets/img/icon-img/payment.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>










<!-- All JS is here
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>