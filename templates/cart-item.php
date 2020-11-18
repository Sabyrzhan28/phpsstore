                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="assets/img/products/<?php echo $product['img']; ?>" alt="" style="width: 139.200px;height: 139.200px;"></a>
                                        </td>
                                        <td class="product-name"><a href="#"><?php echo $product['title']; ?></a></td>
                                        <td class="product-price-cart">
                                            <span class="amount">
                                        <?php echo number_format($product['price'],0,".",","); ?>₸
                                        </span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <?php echo number_format($product['price'],0,".",","); ?>₸
                                        </td>
                                        <td class="product-remove">
                                            <a href="cart-page.php?action=remove&id=<?php echo $product['id']; ?>"><i class="sli sli-close"></i></a>
                                       </td>
                                    </tr>