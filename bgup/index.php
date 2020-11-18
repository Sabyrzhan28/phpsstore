    <?php
     $pageTitle = 'Главная страница'; 
     require_once('./apps/config.php');
     include('./templates/_head.php');

    ?>

<div class="wrapper">
    <?php 

    include('./templates/_header.php');
    include('./templates/_header_mob.php');
    ?>

    <div class="slider-area">
        <div class="slider-active-3 owl-carousel nav-style-3">
            <div class="single-slider slider-height-3 bg-gray">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-content-2 slider-animated-1">
                                <h1 class="animated">Это прорыв.<br>iPhone 11 Pro</h1>
                                <p class="animated">Революционная система трёх камер — гораздо больше возможностей и неизменная простота в использовании. Беспрецедентное увеличение ресурса аккумулятора. И потряса­ющий процессор с расши­ренной поддержкой технологий машинного обучения, который открывает для iPhone большие новые перспек­тивы.</p>
                                <div class="slider-btn">
                                    <a class="animated" href="shop.php">Купить <i class="sli sli-basket-loaded"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-single-img-3 slider-animated-1">
                                <img class="animated" src="assets/img/slider/slider-hm3-1NEW.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height-3 bg-gray">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-content-2 slider-animated-1">
                                <h1 class="animated">Таких часов вы ещё не видели<br>iWatch Series 5</h1>
                                <p class="animated">Их дисплей никогда не спит. На новом, всегда включённом дисплее Retina циферблат отображается постоянно — и время видно всё время.</p>
                                <div class="slider-btn">
                                    <a class="animated" href="shop.php">Купить<i class="sli sli-basket-loaded"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-single-img-3 slider-animated-1">
                                <img class="animated" src="assets/img/slider/slider-hm3-2NEW.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-area pt-100 fipb-150">
        <div class="container">
            <div class="section-title text-center pb-60">
                <h2>Новое поступление</h2>
                <p> -10% ВСЕМ СТУДЕНТАМ УНИВЕРСИТЕТА SULEYMAN DEMIREL UNIVERSITY </p>
            </div>
            <div class="arrivals-wrap item-wrapper">
                <div class="ht-products row">
                    
                    
                   <?php  

                        $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 8";
                        $result = $db->query($sql);
                        $products = $result->fetchAll(PDO::FETCH_ASSOC);

                            foreach( $products as $product ){
                                include('./templates/_product_item.php');                       
                            }

                    ?>
                    
                    
                    
                    
                    
                </div>
                <div class="show-more-btn text-center mt-10 toggle-btn">
                    <a class="loadMore" href="#">Далее</a>
                </div>
            </div>
        </div>
    </div>

    <div class="feature-area pb-70 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-feature mb-40">
                        <div class="feature-icon">
                            <img src="assets/img/icon-img/free-shipping.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Бесплатная доставка</h4>
                            <p>Most product are free <br>shipping.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-4">
                    <div class="single-feature mb-40 pl-50">
                        <div class="feature-icon">
                            <img src="assets/img/icon-img/support.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Служба поддержки</h4>
                            <p>24x7 Customer Support</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="single-feature mb-40">
                        <div class="feature-icon">
                            <img src="assets/img/icon-img/security.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Безопасный способ оплаты</h4>
                            <p>Most Secure Payment <br>for customer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="instagram-area section-padding-2">
        <div class="container">
            <div class="section-title text-center pb-45">
                <h2>Инста посты</h2>
                <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
            </div>
        </div>
        <div class="instagram-feed-thumb">
            <div id="instafeed" class="instagram-carousel owl-carousel" data-userid="22834696327" data-accesstoken="22834696327.1677ed0.aedaaf2d119e45e1a4135eb3c5e27342">
            </div>
        </div>
    </div>

    <footer class="footer-area pt-100">
        <div class="container">
            <div class="footer-top-2 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="footer-widget mb-40">
                            <a href="#"><img alt="" src="assets/img/logo/logo.png"></a>
                            <div class="subscribe-style mt-45">
                                <p>Подпишитесь на нашу рассылку, введите адрес электронной почты</p>
                                <div id="mc_embed_signup" class="subscribe-form mt-20">
                                    <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input class="email" type="email" required="" placeholder="Вводите почту..." name="EMAIL" value="">
                                            <div class="mc-news" aria-hidden="true">
                                                <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                            </div>
                                            <div class="clear">
                                                <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="footer-widget mb-40 pl-100">
                            <div class="footer-title">
                                <h3>Шоппинг</h3>
                            </div>
                            <div class="footer-list">
                                <ul>
                                    <li><a href="shop.php">Магазин</a></li>
                                    <li><a href="cart-page.html">Корзина</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="footer-widget mb-40 pl-50">
                            <div class="footer-title">
                                <h3>Аккаунт</h3>
                            </div>
                            <div class="footer-list">
                                <ul>
                                    <li><a href="login-register.html">Логин</a></li>
                                    <li><a href="login-register.html">Регистрация</a></li>
                                    <li><a href="contact-us.php">Помощь</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-12">
                        <div class="footer-widget mb-40">
                            <div class="footer-title">
                                <h3>Категории</h3>
                            </div>
                            <div class="footer-list">
                                <ul>
                                    <li><a href="shop.php">Телефоны</a></li>
                                    <li><a href="shop.php">Компьютеры</a></li>
                                    <li><a href="shop.php">Наушники</a></li>
                                    <li><a href="shop.php">Планшеты</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom border-top-2 pt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="copyright-2 pb-30">
                            <p>Copyright ©  All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="payment-mathod-2 pb-30">
                            <a href="#"><img src="assets/img/icon-img/payment-2.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="tab-content quickview-big-img">
                                <div id="pro-1" class="tab-pane fade show active">
                                    <img src="assets/img/product/quickview-l1.svg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/img/product/quickview-l2.svg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/img/product/quickview-l3.svg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/img/product/quickview-l2.svg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                            <div class="quickview-wrap mt-15">
                                <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                    <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/img/product/quickview-s1.svg" alt=""></a>
                                    <a data-toggle="tab" href="#pro-2"><img src="assets/img/product/quickview-s2.svg" alt=""></a>
                                    <a data-toggle="tab" href="#pro-3"><img src="assets/img/product/quickview-s3.svg" alt=""></a>
                                    <a data-toggle="tab" href="#pro-4"><img src="assets/img/product/quickview-s2.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-phpent quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-phpe">
                                    <span>$18.00 </span>
                                    <span class="old">$20.00 </span>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="pro-details-rating">
                                        <i class="sli sli-star yellow"></i>
                                        <i class="sli sli-star yellow"></i>
                                        <i class="sli sli-star yellow"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                    </div>
                                    <span>3 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                                <li class="gray"></li>
                                                <li class="green"></li>
                                                <li class="yellow"></li>
                                                <li class="white"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">s</a></li>
                                                <li><a href="#">m</a></li>
                                                <li><a href="#">l</a></li>
                                                <li><a href="#">xl</a></li>
                                                <li><a href="#">xxl</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                    <div class="pro-details-wishlist">
                                        <a title="Add To Wishlist" href="#"><i class="sli sli-heart"></i></a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a title="Add To Compare" href="#"><i class="sli sli-refresh"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details-meta">
                                    <span>Категории:</span>
                                    <ul>
                                        <li><a href="#">Телефоны,</a></li>
                                        <li><a href="#">Компьютеры,</a></li>
                                        <li><a href="#">Наушники</a></li>
                                    </ul>
                                </div>
                                <div class="pro-details-meta">
                                    <span>Tag :</span>
                                    <ul>
                                        <li><a href="#">Fashion, </a></li>
                                        <li><a href="#">Furniture,</a></li>
                                        <li><a href="#">Electronic</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
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

<script type="text/javascript"> 
        function submitform() {   document.myform.submit(); } 
   </script> 

</body>

</html>