<!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom toggle-item-active col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <form action="index.dphp" method="post" name="myform">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.php?productId=<?php echo $product['id']; ?>" class="ht-product-image"> 
                                    <img src="assets/img/products/<?php echo $product['img']; ?>" alt="Universal Product Style"> </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="product-details.php?productId=<?php echo $product['id']; ?>"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">View</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#"><?php echo $product['category']; ?></a></div>
                                    <h4 class="ht-product-title"><a href="product-details.php?productId=<?php echo $product['id']; ?>"><?php echo $product['title']; ?></a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">
                                            <?php echo number_format($product['price'],0,".",",");?>₸
                                        </span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="product_id" value="<?php echo $product['id'];?>">
                    </form>
                    </div>
                    <!--Product End-->