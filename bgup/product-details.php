    <?php
     $pageTitle = 'Товары'; 
     require_once('./apps/config.php');
     include('./templates/_head.php');

    ?>
    
<div class="wrapper">
    
    <?php 

if(isset($_GET['add'])){
    // print_r($_GET['productId']);
        if(isset($_SESSION['cart'])){

            $item_array_id=array_column($_SESSION['cart'],"productId");
/*            print_r($item_array_id);*/

           if(in_array($_GET['productId'],$item_array_id)){
            echo "<script>alert('Продукт есть в корзине')</script>";
            echo "<script>windown.location='index.php'</script>";
           }else{

            $count = count($_SESSION['cart']);
            $item_array=array(
                'productId'=> $_GET['productId']
            );

            $_SESSION['cart'][$count] = $item_array;
/*            print_r($_SESSION['cart']);*/
           }


        }else{
            $item_array=array(
                'productId'=> $_GET['productId']
            );

            //Create new session variable
            $_SESSION['cart'][0]=$item_array;
/*            print_r($_SESSION['cart']);*/
        }
    }

    include('./templates/_header.php');
    include('./templates/_header_mob.php');


    ?>

    <?php 
                            $currentProductID = intval($_GET['productId']);
                            $sql = "SELECT * FROM products WHERE id = '$currentProductID'";
                            $result = $db->query($sql);
                            $product = $result->fetch(PDO::FETCH_ASSOC);

                         ?>


    <div class="breadcrumb-area pt-35 pb-35 bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">Product Details </li>
                </ul>
            </div>
        </div>
    </div>

<form action="product-details.php" method="GET">
    <div class="product-details-area pt-100 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-img">
                        <div class="zoompro-border zoompro-span">
                            <img class="zoompro" src="assets/img/product-details/id3/product-detalis-l1.jpg" data-zoom-image="assets/img/product-details/id3/product-detalis-bl1.jpg" alt=""/>           <span>-29%</span>
                            <div class="product-video">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=tce_Ap96b0c">
                                    <i class="sli sli-control-play"></i>
                                    View Video
                                </a>
                            </div>
                        </div>
                        <div id="gallery" class="mt-20 product-dec-slider">
                            <a data-image="assets/img/product-details/id3/product-detalis-l1.jpg" data-zoom-image="assets/img/product-details/id3/product-detalis-bl1.jpg">
                                <img src="assets/img/product-details/id3/product-detalis-s1.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/id3/product-detalis-l2.jpg" data-zoom-image="assets/img/product-details/id3/product-detalis-bl2.jpg">
                                <img src="assets/img/product-details/id3/product-detalis-s2.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/id3/product-detalis-l3.jpg" data-zoom-image="assets/img/product-details/id3/product-detalis-bl3.jpg">
                                <img src="assets/img/product-details/id3/product-detalis-s3.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/id3/product-detalis-l4.jpg" data-zoom-image="assets/img/product-details/id3/product-detalis-bl4.jpg">
                                <img src="assets/img/product-details/id3/product-detalis-s4.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/id3/product-detalis-l5.jpg" data-zoom-image="assets/img/product-details/id3/product-detalis-bl5.jpg">
                                <img src="assets/img/product-details/id3/product-detalis-s5.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content ml-30">
                        <h2>
                            <?php echo $product['title']; ?>
                        </h2>
                        <div class="product-details-price">
                            <span><?php echo number_format($product['price'],0,".",",");?>₸</span>
                            <span class="old"><?php echo number_format($product['price'],0,".",",");?>₸</span>
                        </div>
                        <div class="pro-details-rating-wrap">
                            <div class="pro-details-rating">
                                <i class="sli sli-star yellow"></i>
                                <i class="sli sli-star yellow"></i>
                                <i class="sli sli-star yellow"></i>
                                <i class="sli sli-star yellow"></i>
                                <i class="sli sli-star yellow"></i>
                            </div>
                        </div>
                        <p>
                        <?php echo $product['mini-desc']; ?>
                        </p>
                        <div class="pro-details-list">
                            <ul>
                                <li>- Premium Reseller</li>
                                <li>- Возврат в течении 30 дней</li>
                                <li>- Бонусные программы</li>
                            </ul>
                        </div>
                        <div class="pro-details-size-color">
                            <div class="pro-details-color-wrap">
                                <span>Цвет</span>
                                <div class="pro-details-color-content">
                                    <ul>
                                        <li class="silver"></li>
                                        <li class="gold active"></li>
                                        <li class="spacegray"></li>
                                        <li class="mi-green"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-details-size">
                                <span>Память</span>
                                <div class="pro-details-size-content">
                                    <ul>
                                        <li><a href="#">128</a></li>
                                        <li><a href="#">256</a></li>
                                        <li><a href="#">512</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                            </div>
                            <div class="pro-details-cart btn-hover">
                                <button type="submit" class="btn" name="add">Добавить в Корзину</button>
                                <input type="hidden" name="productId" value="<?php echo $product['id'];?>">
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
                                <li><a href="#">
                                    <?php echo $product['category']; ?>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="description-review-area pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                            <a data-toggle="tab" href="#des-details3">Additional information</a>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <p>
                                        <?php echo $product['description']; ?>
                                    </p>
                                    
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="product-anotherinfo-wrapper">
                                    <ul>
                                        <li><span>Weight</span> 400 g</li>
                                        <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                        <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                        <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="pro-dec-banner">
                        <a href="#"><img src="assets/img/banner/banner-15.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <div class="product-area pb-70">
        <div class="container">
            <div class="section-title text-center pb-60">
                <h2>Related products</h2>
                <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
            </div>
            <div class="arrivals-wrap scroll-zoom">
                <div class="ht-products product-slider-active owl-carousel">
                    
                    
                        <?php  

                        $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 10";
                        $result = $db->query($sql);
                        $products = $result->fetchAll(PDO::FETCH_ASSOC);

                            foreach( $products as $product ){
                                include('./templates/_product_rsliser.php');                       
                            }

                    ?>
                    
                    
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
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
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
                                    <span>Categories :</span>
                                    <ul>
                                        <li><a href="#">Minimal,</a></li>
                                        <li><a href="#">Furniture,</a></li>
                                        <li><a href="#">Fashion</a></li>
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

</body>

</html>