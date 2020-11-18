<div class="header-small-mobile">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="mobile-logo">
                            <a href="index.php">
                                <img alt="" src="assets/img/logo/logos.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-right-wrap">
                            <div class="cart-wrap">
                                <button class="icon-cart-active">
                                    <span class="icon-cart">
                                        <i class="sli sli-bag"></i>
                                        <span class="count-style">
                                                
                            <?php 
                                        if(isset($_SESSION['cart'])){
                                            $count = count($_SESSION['cart']);
                                            echo $count;
                                        }else{
                                            echo "0";
                                        }
                             ?>


                                        </span>
                                    </span>
                                    <span class="cart-price">
                                    </span>
                                </button>
                                <div class="shopping-cart-content">
                                    <div class="shopping-cart-top">
                                        <h4>Корзина</h4>
                                        <a class="cart-close" href="#"><i class="sli sli-close"></i></a>
                                    </div>
                                    <ul>
                                        
                                        <?php 
                                            $product_id=array_column($_SESSION['cart'], 'productId');
                                            $total = 0;

                                            foreach ($product_id as $product_i) {
                                                echo "<br>";
                                                $sql = "SELECT * FROM products WHERE id = '$product_i'";
                                                $result = $db->query($sql);
                                                $product = $result->fetch(PDO::FETCH_ASSOC);
                                                include ('./templates/single-shcart.php');    
                                                $total = $total + (int)$product['price'];             
                                            }
                                        ?>

                                    </ul>
                                    <div class="shopping-cart-bottom">
                                        <div class="shopping-cart-total">
                                            <h4>Итого : <span class="shop-total">
                                            <?php echo number_format($total,0,".",","); ?>₸
                                            </span></h4>
                                        </div>
                                        <div class="shopping-cart-btn btn-hover text-center">
                                            <a class="default-btn" href="cart-page.php">Посмотреть Корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-off-canvas">
                                <a class="mobile-aside-button" href="#"><i class="sli sli-menu"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

<div class="mobile-off-canvas-active">
        <a class="mobile-aside-close"><i class="sli sli-close"></i></a>
        <div class="header-mobile-aside-wrap">
            <div class="mobile-search">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search entire store…">
                    <button class="button-search"><i class="sli sli-magnifier"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap">
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="index.php">Главная</a>
                            </li>
                            <li class="menu-item-has-children "><a href="shop.php">Магазин</a>
                            </li>
                            <li><a href="contact-us.html">Контакты</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-social-wrap">
                <a class="facebook" href="#"><i class="sli sli-social-facebook"></i></a>
                <a class="twitter" href="#"><i class="sli sli-social-twitter"></i></a>
                <a class="pinterest" href="#"><i class="sli sli-social-pinterest"></i></a>
                <a class="instagram" href="#"><i class="sli sli-social-instagram"></i></a>
                <a class="google" href="#"><i class="sli sli-social-google"></i></a>
            </div>
        </div>
    </div>