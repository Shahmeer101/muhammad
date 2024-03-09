<?php
    include 'header.php';
?>


<!-- ====== End header ============= -->

<!-- ======= header sloder======= -->
<section class="bg-secondary">
    <div class="maines">
        <div class="plain">
            <img class="slider-image" src="assets/logo_1-removebg-preview.png" alt="">
            <img class="slider-image" src="assets/logo_6-removebg-preview.png" alt="">
            <img class="slider-image" src="assets/samsung-galaxy-s21.png__re-removebg-preview.png" alt="">
            <img class="slider-image" src="assets/vovo_logo-removebg-preview.png" alt="">
            <img class="slider-image" src="assets/oppo_logo-removebg-preview.png" alt="">
            <img class="slider-image" src="assets/TECNO-.png" alt="">
            <img class="slider-image" src="assets/logo_1-removebg-preview.png" alt="">
            <img class="slider-image" src="assets/logo_6-removebg-preview.png" alt="">
        </div>
        <div class="plain">
            <img class="slider-image" src="assets/logo_2-removebg-preview.png" alt="">
            <img class="slider-image" src="assets/samsung-galaxy-s21.png__re-removebg-preview.png" alt="">
            <img class="slider-image" src="assets/vovo_logo-removebg-preview.png" alt="">
            <img class="slider-image" src="assets/oppo_logo-removebg-preview.png" alt="">
            <img class="slider-image" src="assets/TECNO-.png" alt="">
            <img class="slider-image" src="assets/logo_1-removebg-preview.png" alt="">
            <img class="slider-image" src="assets/logo_2-removebg-preview.png" alt="">
        </div>
    </div>
</section>
<!-- ======= end header sloder======= -->
<!-- ====== start  slider ============= -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="assets/banner 4.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="assets/c55573c672f48c66b50ec46ca0eee25f.png" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
            <img src="assets/Redmi-13C-renders.webp" class="d-block w-100" alt="..." />
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- ====== End slider ============= -->

<!-- ====== top sale============= -->


<?Php

include 'topsale.php';

?>
<!-- <main id="main-site">
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
</main> -->
<!-- ======== end top sale ========== -->

<!-- =============== Special price ======= -->

<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-10">secial price</h4>
        <div id="filers" class="button-group">
            <button class="btn is-checked" data-filter="*">All Brands</button>
            <button class="btn" data-filter=".Apple">Apple</button>
            <button class="btn" data-filter=".Samsung">Samsung</button>
            <button class="btn" data-filter=".Readmi">Readmi</button>

        </div>

        <div class="grid">
            <div class="grid-item Apple border" style="width: 180px; height: 386px;padding-left: 12px;padding-top: 1%;">
                <!-- <div class="item py-2" style="width: 200px"> -->
                <div class="bbb_viewed_image">
                    <img src="assets/i phon 10.png" alt="" />
                </div>
                <div class="text-ster">
                    <h6>Apple iphon 10</h6>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                    <span>$211</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12 " style="margin-left:8%; margin-bottom:4% ;">
                    Add to card </button>
            </div>


            <div class="grid-item Samsung border" style="width: 210px;padding-left: 30px;padding-top: 3%;">
                <!-- <div class="item py-2" style="width: 200px"> -->
                <div class="bbb_viewed_image">
                    <img src="assets/samsung-galaxy-s10-plus-new.jpg" alt="" />
                </div>
                <div class="text-ster">
                    <h6>Samsung Galaxy 10</h6>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                    <span>$211</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12 " style="margin-left:8%; margin-bottom:4% ;">
                    Add to card </button>
            </div>

            <div class="grid-item Readmi border" style="width: 210px;padding-left: 30px; padding-top: 3%;">
                <!-- <div class="item py-2" style="width: 200px"> -->
                <div class="bbb_viewed_image">
                    <img src="assets/xiaomi-redmi-note-7-pro.png" alt="" />
                </div>
                <div class="text-ster">
                    <h6> Readmi note7 pro</h6>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                    <span>$211</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12 " style="margin-left:8%; margin-bottom:4% ;">
                    Add to card </button>
            </div>
            <div class="grid-item Apple border" style="width: 180px;height: 386px; padding-left: 12px;padding-top: 3%">
                <!-- <div class="item py-2" style="width: 200px"> -->
                <div class="bbb_viewed_image">
                    <img src="assets/apple-iphone-11.png" alt="" style="height: 130%;padding-left: 14%;" />
                </div>
                <div class="text-ster">
                    <h6>Apple iphon 11</h6>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                    <span>$211</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12 " style="margin-left:8%; margin-bottom:4% ;">
                    Add to card </button>
            </div>
            <div class="grid-item Samsung border" style="width: 210px;padding-left: 30px;padding-top: 3%;">
                <!-- <div class="item py-2" style="width: 200px"> -->
                <div class="bbb_viewed_image">
                    <img src="assets/samsung-galaxy-a15.png" alt="" />
                </div>
                <div class="text-ster">
                    <h6 class="hcl">Samsung Galaxy A15</h6>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                    <span>$211</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12 " style="margin-left:8%; margin-bottom:4% ;">
                    Add to card </button>
            </div>
            <div class="grid-item Samsung border" style="width: 210px;padding-left: 30px;padding-top: 3%;">
                <!-- <div class="item py-2" style="width: 200px"> -->
                <div class="bbb_viewed_image">
                    <img src="assets/samsung-galaxy-s21.png" alt="" />
                </div>
                <div class="text-ster">
                    <h6 class="hcl">Samsung Galaxy s21</h6>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                    <span>$211</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12 " style="margin-left:8%; margin-bottom:4% ;">
                    Add to card </button>
            </div>
            <div class="grid-item Apple border" style="width: 180px;height: 386px; padding-left: 12px;padding-top: 3%;">
                <!-- <div class="item py-2" style="width: 200px"> -->
                <div class="bbb_viewed_image">
                    <img src="assets/ip_hon_11pro.png" alt="" />
                </div>
                <div class="text-ster">
                    <h6>Apple iphon 11 pro</h6>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                    <span>$211</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12 " style="margin-left:8%; margin-bottom:4% ;">
                    Add to card </button>
            </div>
            <div class="grid-item Readmi border" style="width: 210px;padding-left: 30px; padding-top: 3%;">
                <!-- <div class="item py-2" style="width: 200px"> -->
                <div class="bbb_viewed_image">
                    <img src="assets/xiaomi-redmi-7.jpg" alt="" />
                </div>
                <div class="text-ster">
                    <h6> Readmi note 7</h6>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                    <span>$211</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12 " style="margin-left:8%; margin-bottom:4% ;">
                    Add to card </button>
            </div>
            <div class="grid-item Apple border" style="width: 180px;height: 386px; padding-left: 12px;padding-top: 3%;">
                <!-- <div class="item py-2" style="width: 200px"> -->
                <div class="bbb_viewed_image">
                    <img src="assets/apple-iphone-13-pro.png" alt="" style="height: 130%;" />
                </div>
                <div class="text-ster">
                    <h6>Apple iphon 13pro</h6>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                    <span>$211</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12 " style="margin-left:8%; margin-bottom:4% ;">
                    Add to card </button>
            </div>
            <div class="grid-item Readmi border" style="width: 210px;padding-left: 30px; padding-top: 3%;">
                <!-- <div class="item py-2" style="width: 200px"> -->
                <div class="bbb_viewed_image">
                    <img src="assets/xiaomi-redmi-note-8-1.jpg" alt="" />
                </div>
                <div class="text-ster">
                    <h6> Readmi note 8</h6>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                    <span>$211</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12 " style="margin-left:8%; margin-bottom:4% ;">
                    Add to card </button>
            </div>


        </div>
        <!-- again -->


</section>
<!-- =============== start Banner ======= -->

<div class="banner_adds">
    <div class="container py-5 text-center" style="display: flex">
        <img src="assets/discount banner 2.jpg" alt="">
        <img src="assets/new banner.avif" alt="">


    </div>
</div>
<!-- ======== End banner ========== -->
<!-- ======== New phones ========== -->
<section id="new-phones">
    <div class="container py-0">
        <div class="bbb_viewed">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="bbb_main_container ">
                            <div class="bbb_viewed_title_container">
                                <h3 class="bbb_viewed_title">New phones</h3>
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
                            <div class="bbb_viewed_slider_container bg-light m-5">
                                <div class="owl-carousel owl-theme bbb_viewed_slider">
                                    <div class="owl-item">
                                        <div
                                            class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="bbb_viewed_image">
                                                <img src="assets/product 1.png" alt="" />
                                            </div>
                                            <div class="text-star">
                                                <h6>samsang glaxy</h6>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                            <!-- <div class="price py-2">
                              <span>$152</span>
                            </div> -->
                                            <div class="bbb_viewed_content text-center">
                                                <div class="bbb_viewed_price">
                                                    $145<span>$152</span>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-warning font-size-12">
                                                Add to card
                                            </button>
                                            <!-- <div class="bbb_viewed_content text-center">
                              <div class="bbb_viewed_price">
                                $12225<span>$13300</span>
                              </div>
                              <div class="bbb_viewed_name">
                                <a href="#">Alkatel Phone</a>
                              </div>
                            </div> -->
                                            <ul class="item_marks">
                                                <li class="item_mark item_discount">-5%</li>
                                                <li class="item_mark item_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div
                                            class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="bbb_viewed_image">
                                                <img src="assets/note 7.png" alt="" />
                                            </div>
                                            <div class="text-star">
                                                <h6>Lenovo k6 Power</h6>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                            <div class="price py-2">
                                                <span>$211</span>
                                            </div>
                                            <button type="submit" class="btn btn-warning font-size-12">
                                                Add to card
                                            </button>
                                            <!-- <div class="bbb_viewed_content text-center">
                              <div class="bbb_viewed_price">₹30079</div>
                              <div class="bbb_viewed_name">
                                <a href="#">Samsung LED</a>
                              </div>
                            </div> -->
                                            <ul class="item_marks">
                                                <li class="item_mark item_discount">-10%</li>
                                                <li class="item_mark item_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div
                                            class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="bbb_viewed_image">
                                                <img src="assets/note 1.png" alt="" />
                                            </div>
                                            <div class="text-star">
                                                <h6>Xiaomi Readmi Note 13 pro+</h6>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                            <div class="price py-2">
                                                <span>$486.11.</span>
                                            </div>
                                            <button type="submit" class="btn btn-warning font-size-12">
                                                Add to card
                                            </button>
                                            <!-- <div class="bbb_viewed_content text-center">
                              <div class="bbb_viewed_price">₹22250</div>
                              <div class="bbb_viewed_name">
                                <a href="#">Samsung Mobile</a>
                              </div>
                            </div> -->
                                            <!-- <ul class="item_marks">
                              <li class="item_mark item_discount">-8%</li>
                              <li class="item_mark item_new">new</li>
                            </ul> -->

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div
                                            class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="bbb_viewed_image">
                                                <img src="assets/note 2.png" alt="" />
                                            </div>
                                            <div class="text-star">
                                                <h6>Xiaomi Readmi Note 13</h6>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                            <div class="price py-2">
                                                <span>$190.97.</span>
                                            </div>
                                            <button type="submit" class="btn btn-warning font-size-12">
                                                Add to card
                                            </button>
                                            <!-- <div class="bbb_viewed_content text-center">
                              <div class="bbb_viewed_price">₹1379</div>
                              <div class="bbb_viewed_name">
                                <a href="#">Huawei Power</a>
                              </div>
                            </div> -->
                                            <ul class="item_marks">
                                                <li class="item_mark item_discount">-10%</li>
                                                <li class="item_mark item_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div
                                            class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="bbb_viewed_image">
                                                <img src="assets/note 3.png" alt="" />
                                            </div>
                                            <div class="text-star">
                                                <h6>Xiaomi Readmi Note 4x</h6>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                            <!-- <div class="price py-2">
                              <span>19,800 PKR</span>
                            </div> -->
                                            <div class="bbb_viewed_content text-center">
                                                <div class="bbb_viewed_price">
                                                    17,400 PKR<span>19,800</span>
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-warning font-size-12">
                                                Add to card
                                            </button>
                                            <!-- <div class="bbb_viewed_content text-center">
                              <div class="bbb_viewed_price">
                                ₹225<span>₹300</span>
                              </div>
                              <div class="bbb_viewed_name">
                                <a href="#">Sony Power</a>
                              </div>
                            </div> -->
                                            <ul class="item_marks">
                                                <li class="item_mark item_discount">-15%</li>
                                                <li class="item_mark item_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div
                                            class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="bbb_viewed_image">
                                                <img src="assets/note 4.png" alt="" />
                                            </div>
                                            <div class="text-star">
                                                <h6>Xiaomi Readmi 4 (4x)</h6>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                            <div class="price py-2">
                                                <span>18,899 PKR</span>
                                            </div>
                                            <button type="submit" class="btn btn-warning font-size-12">
                                                Add to card
                                            </button>
                                            <ul class="item_marks">
                                                <li class="item_mark item_discount">-25%</li>
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
<!-- ======== End phones ========== -->

<!-- ======== Latest Blog ========== -->
<div class="container py-4">
    <h4 class="font-size-20">Latest Blogs</h4>
    <hr>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="cardts">
                <h5 class="card-title font-size-16"> upcoming Mobiles</h5>
                <img src="assets/blogs 1.1.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit ratione sit consectetur eius
                    dignissimos pariatur omnis maxime nesciunt facere aliquid.</p>
                <a href="" class="">Go somewhere</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="cardts">
                <h5 class="card-title font-size-16"> upcoming Mobiles</h5>
                <img src="assets/blogs 2.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit ratione sit consectetur eius
                    dignissimos pariatur omnis maxime nesciunt facere aliquid.</p>
                <a href="" class="">Go somewhere</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="cardts">
                <h5 class="card-title font-size-16"> upcoming Mobiles</h5>
                <img src="assets/blogs 3.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit ratione sit consectetur eius
                    dignissimos pariatur omnis maxime nesciunt facere aliquid.</p>
                <a href="" class="">Go somewhere</a>
            </div>
        </div>
    </div>
</div>



<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});
</script>

<?php
include 'footer.php';
?>