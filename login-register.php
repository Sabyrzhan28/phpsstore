    <?php
     $pageTitle = 'Логин'; 
     require_once('./apps/config.php');
     include('./templates/_head.php');

    ?>

<?php 
    if(isset($_SESSION['login']) && $_SESSION['login'] == 'on' ){
        header('Location: my-account.php');
    }else{
        
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
                    <li class="active">Логин</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-register-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-toggle="tab" href="#lg1">
                                <h4> Логин </h4>
                            </a>
                            <a data-toggle="tab" href="#lg2">
                                <h4> Регистрация </h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">

                                        <form action="check-login.php" method="post">
                                            <input type="text" name="user-name" placeholder="Username">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <div class="button-box">
                                                <button type="submit">Логин</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">

                                        <form action="add.php" method="POST">
                                            <input type="text" name="user-name" placeholder="Username">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <input name="user-email" placeholder="Email" type="email">
                                            <div class="button-box">
                                                <button type="submit">Регистрация</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-area bg-paleturquoise">
        <div class="container">
            <div class="footer-top text-center pt-45 pb-45">
                <nav>
                    <ul>
                        <li><a href="#">Главная </a></li>
                        <li><a href="#">Магазин </a></li>
                        <li><a href="#">Контакты </a></li>
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