   <?php
     $pageTitle = 'Товары'; 
     require_once('./apps/config.php');
     include('./templates/_head.php');

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
                        <a href="index.php">Главная</a>
                    </li>
                    <li class="active">Контакты</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="contact-info-area">
                        <h2>Контакты</h2>
                        <p>Связаться с нами</p>
                        <div class="contact-info-wrap">
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="sli sli-location-pin"></i>
                                </div>
                                <div class="contact-info-content">
                                    <p>Город Актау , 28 Микрорайон , БЦ <РАУАН></p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="sli sli-envelope"></i>
                                </div>
                                <div class="contact-info-content">
                                    <p><a href="#">info@sstore.kz</a> / <a href="#">info@sstore.kz</a></p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="sli sli-screen-smartphone"></i>
                                </div>
                                <div class="contact-info-content">
                                    <p>+7 700 570 7728  /  +7 729 240 0000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="contact-from contact-shadow">

                        <form id="contact-form" action="mail.php" method="POST">
                            <input name="name" type="text" placeholder="Имя">
                            <input name="email" type="email" placeholder="Почта">
                            <input name="subject" type="text" placeholder="Тема">
                            <textarea name="message" placeholder="Ваша сообщение"></textarea>
                            <button class="submit" type="submit">Отправить</button>
                        </form>

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