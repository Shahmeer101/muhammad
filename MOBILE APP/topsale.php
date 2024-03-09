<?php
$product_shuffle= $product->getData();
?>
<main id="main-site">
    <section id="top-sale">
        <div class="container py-5">
            <div class="bbb_viewed">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="bbb_main_container">
                                <div class="bbb_viewed_title_container">
                                    <h3 class="bbb_viewed_title">Best selling products</h3>
                                    <hr />
                                    <div class="bbb_viewed_nav_container">
                                        <div class="bbb_viewed_nav bbb_viewed_prev">
                                            <i class="fas fa-chevron-left"></i>
                                        </div>
                                        <div class="bbb_viewed_nav bbb_viewed_next">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="bbb_viewed_slider_container">
                                    <?php
                                $product_shuffle = $product->getData();
                                ?>
                                    <div class="owl-carousel owl-theme bbb_viewed_slider">
                                        <?php foreach ($product_shuffle as $item) { ?>
                                        <div class="owl-item">
                                            <div
                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img src="<?php echo $item['item_image'] ?? "default_image.png"; ?>"
                                                        alt="" />
                                                </div>
                                                <div class="text-star">
                                                    <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                                                    <!-- Add other product information as needed -->
                                                </div>
                                                <div class="price py-2">
                                                    <span>$<?php echo $item['item_price'] ?? '0.00'; ?></span>
                                                </div>
                                                <button type="submit" class="btn btn-warning font-size-12">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>


                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-5%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
</main>