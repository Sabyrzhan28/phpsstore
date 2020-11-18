    <?php
     $pageTitle = 'Корзина'; 
     require_once('./apps/config.php');
     include('./templates/_head.php');

    ?>
<div class="wrapper">
    
    <?php 

    if (isset($_GET['action'])) {
    if($_GET['action']=='remove'){
        foreach($_SESSION['cart'] as $key=>$value){
            if($value['productId']==$_GET['id']){
                unset($_SESSION['cart'][$key]);
            }
        }
    }
}


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
                    <li class="active">Корзина</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <h3 class="cart-page-title">Корзина | Список товаров</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Until Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                        <?php 
                            $product_id=array_column($_SESSION['cart'], 'productId');
                            $total = 0;

                            foreach ($product_id as $product_i) {
                                echo "<br>";
                                $sql = "SELECT * FROM products WHERE id = '$product_i'";
                                $result = $db->query($sql);
                                $product = $result->fetch(PDO::FETCH_ASSOC);
                                include ('./templates/cart-item.php');    
                                $total = $total + (int)$product['price'];             
                            }
                        ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="#">Продолжить Покупку</a>
                                    </div>
                                    <div class="cart-clear">
                                        <button>Обновить Корзину</button>
                                        <a href="#">Очистить Корзину </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="cart-tax">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Расчет Доставки</h4>
                                </div>
                                <div class="tax-wrapper">
                                    <p>Введите пункт назначения, чтобы получить оценку доставки.</p>
                                    <div class="tax-select-wrapper">
                                        <div class="tax-select">
                                            <label>
                                                * Страна
                                            </label>
                                            <select class="email s-email s-wid">
                                                <option>Казахстан</option>
                                            </select>
                                        </div>
                                        <div class="tax-select">
                                            <label>
                                                * Город
                                            </label>
                                            <select class="email s-email s-wid">
                                                <option>Алматы</option>
                                                <option>Aстана</option>
                                                <option>Актау</option>
                                                <option>Актобе</option>
                                                <option>Павлодар</option>
                                                <option>Семей</option>
                                                <option>Орал</option>
                                            </select>
                                        </div>
                                        <div class="tax-select">
                                            <label>
                                                * Почтовый индекс
                                            </label>
                                            <input type="text">
                                        </div>
                                        <button class="cart-btn-2" type="submit">Доставить по этому адресу</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="discount-code-wrapper">
                                <div class="title-wrap">
                                   <h4 class="cart-bottom-title section-bg-gray">Добавить промокод</h4> 
                                </div>
                                <div class="discount-code">
                                    <p>Промокод: </p>
                                    <form>
                                        <input type="text" required="" name="name">
                                        <button class="cart-btn-2" type="submit">Применить код</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="grand-totall">
                            
                                <form action="mail-order.php" method="POST">
                            
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Количесто товаров</h4>
                                </div>
                                <h5>Итого<span>
                                    <?php echo number_format($total,0,".",","); ?>₸
                                </span></h5>
                                <div class="total-shipping">
                                    <h5>Total shipping</h5>
                                    <ul>
                                        <li><input type="checkbox"> Стандарт <span>3000₸</span></li>
                                        <li><input type="checkbox"> Экспресс <span>9000₸</span></li>
                                    </ul>
                                </div>
                                <h4 class="grand-totall-title">Всего к оплате<span>
                                    <?php echo number_format($total,0,".",","); ?>₸
                                </span></h4>
                                <button type="submit" class="button-cart-s">Заказать</button>
                            
                            <input type="hidden" name="person-id" value="<?php echo $_SESSION['id']; ?>">
                            <input type="hidden" name="person-name" value="<?php echo $_SESSION['name']; ?>">
                            <input type="hidden" name="items" value="<?php print_r($_SESSION['cart']); ?>">
                            <input type="hidden" name="total-price" value="<?php echo $total; ?>₸">
                            



                            </form>
                            
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