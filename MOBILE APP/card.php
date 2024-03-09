<link rel="stylesheet" href="style.css" />
<!-- <link rel="stylesheet" href="product.css" /> -->
<link rel="stylesheet" href="card.css" />

<?php
    include 'header.php';
    ?>

<main id="main-site">
    <section id="card" class="py-4">
        <div class="container-fluid w-75">
            <h6 class="font-baloo font-size-20">shopping card</h6>

            <div class="row">
                <div class="col-sm-9">
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="assets/product 1.png" alt="" style="width: 100%; height: 100%" />
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-15">samsang Galaxy 10</h5>
                            <small>by Samsung</small>
                            <div class="dad d-flex">
                                <div class="text-star d-flex">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <a href="" class="px-2 font-rale font-size-14">20,534 ratings
                                    </a>
                                </div>
                            </div>
                            <div class="qty d-flex pt-2">
                                <div class="wrapper d-flex w-35">
                                    <button class="plas px-1 border bg-light h-100">+</button>
                                    <span class="num px-4 font-rale b-light bg-light w-100 h-70">01</span>
                                    <button class="minus px-2 border bg-light">-</button>
                                </div>

                                <button class="btn font-baloo text-danger">Delete</button>
                                <button class="btn font-baloo text-danger border-right">
                                    Safe for latter
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-2 text-right">
                            <div class="price text-danger">
                                $<span class="product_price">152</span>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="assets/note 7.png" alt="" style="width: 100%; height: 100%" />
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-15">Lenovo k6 Power</h5>
                            <small>by Lenovo </small>
                            <div class="dad d-flex">
                                <div class="text-star d-flex">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <a href="" class="px-2 font-rale font-size-14">20,534 ratings
                                    </a>
                                </div>
                            </div>
                            <div class="qty d-flex pt-2">
                                <div class="wrapper d-flex w-35">
                                    <!-- <h6 class="font-baloo">Qty:</h6> -->
                                    <button class="plas px-1 border bg-light h-100" data-id="prol">+</button>
                                    <span class="num px-4 font-rale b-light bg-light w-100 h-70"
                                        data-id="prol">01</span>
                                    <button class="minus px-2 border bg-light" data-id="prol">-</button>
                                </div>
                                <button class="btn font-baloo text-danger">Delete</button>
                                <button class="btn font-baloo text-danger border-right">
                                    Safe for latter
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-2 text-right">
                            <div class="price text-danger">
                                $<span class="product_price">152</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="sub-total border text-center mt-2">
                        <h6 class="font-size-10 font-real text-success py-1"><i class="fas fa-check"></i>your order is
                            eligible for free Delivery</h6>
                        <div class="border-top py-4">
                            <h5 class="font-baloo font-size-20">Subtotal(2 item)&nbsp;<span class="text-danger">$<span
                                        class="text-danger" id="deal-price">152.00</span></span></h5>
                            <button type="submit" class="btn btn-warning mt-3">proceed to By</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <section id="top-sale">
        <div class="container py-5">
            <div class="bbb_viewed">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="bbb_main_container">
                                <div class="bbb_viewed_title_container">
                                    <h3 class="bbb_viewed_title">New Phones</h3>
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
                                <div class="bbb_viewed_slider_container bg-light">
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
                                                <div class="price py-2">
                                                    <span>$152</span>
                                                </div>
                                                <button type="submit" class="btn btn-warning font-size-12">
                                                    Add to card
                                                </button>
                                                <!-- <div class="bbb_viewed_content text-center">
                              <div class="bbb_viewed_price">
                                ₹12225<span>₹13300</span>
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
                                                <ul class="item_marks">
                                                    <li class="item_mark item_discount">-8%</li>
                                                    <li class="item_mark item_new">new</li>
                                                </ul>
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
                                                <div class="price py-2">
                                                    <span>19,800 PKR</span>
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
</main>
<!-- ======== end top sale ========== -->


<script>
const plas = document.querySelector(".plas");
minus = document.querySelector(".minus");
num = document.querySelector(".num");

let b = 1;

plas.addEventListener("click", () => {
    b++;
    b = b < 10 ? "0" + b : b;
    num.innerText = b;
    console.log(b);
});

minus.addEventListener("click", () => {
    if (b > 1) {
        b--;
        b = b < 10 ? "0" + b : b;
        num.innerText = b;
    }
});
</script>


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