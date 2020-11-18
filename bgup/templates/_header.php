<header class="header-area sticky-bar">
        <div class="main-header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo pt-40">
                            <a href="index.php">
                                <img src="assets/img/logo/logos.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 ">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="angle-shape"><a href="index.php">Главная </a>
                                    </li>
                                    <li class="angle-shape"><a href="shop.php"> Магазин<span>Новинка</span> </a>
                                    </li>
                                    <li><a href="contact-us.php"> Контакты </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3">
                        <div class="header-right-wrap pt-40">
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
                                            <h4>Итого : <span class="shop-total"><?php echo number_format($total,0,".",","); ?>₸</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn btn-hover text-center">
                                            <a class="default-btn" href="cart-page.php">Посмотреть Корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>