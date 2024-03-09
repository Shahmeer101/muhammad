<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="product.css" />
<?php
 include 'header.php';
?>



<!-- ====== End header ============= -->

<!-- ====== top sale============= -->
<main id="main-site">
    <section id="product" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="addto">
                        <img src="assets/product 1.png" alt="" class="img-fluid" />
                    </div>
                    <div class="from-row pt-0 font-size-16 font-baloo d-flex">
                        <div class="col">
                            <button type="submit" class="btb btn-danger form-control">
                                procesed to Buy
                            </button>
                        </div>
                        <div class="col" style="margin-left:1% ;">
                            <button type="submit" class="btb btn-warning form-control">
                                Add to card
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 py-5">
                    <h5 class="font-baloo font-size-20">Samsang Galaxy 10</h5>
                    <small>by sumsang</small>
                    <div class="text-star d-flex">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <a href="" class="px-2 font-rale font-size-14">20,534 ratings | 1000+answered question</a>
                    </div>
                    <hr class="m-0" />
                    <table class="my-3">
                        <tr class="font-rale font-size-14 p-3">
                            <td>M.R.P</td>
                            <td><strike> $162.00</strike></td>
                        </tr>
                        <tr class="font-rale font-size-14">
                            <td>Deal price</td>
                            <td>
                                &nbsp;
                                <span class="font-size-20 text-danger"> $ 152.00</span><small>&nbsp;&nbsp;inclusive
                                    of all taxes</small>
                            </td>
                        </tr>
                        <tr class="font-rale font-size-14">
                            <td>You save</td>
                            <td>
                                &nbsp;
                                <span class="font-size-20 text-danger"> $ 152.00</span>
                            </td>
                        </tr>
                    </table>

                    <div id="policy">
                        <div class="fale d-flex">
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-retweet border p-3 rounded-pill color-second"></span>
                                </div>
                                <a href="" class="font-real font-size-12">10 Days<br />Replacement</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-truck border p-3 rounded-pill color-second"></span>
                                </div>
                                <a href="" class="font-real font-size-12">Dealy<br />Deliverd</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-check-double border p-3 rounded-pill color-second"></span>
                                </div>
                                <a href="" class="font-real font-size-12">1 year<br />Warrenty</a>
                            </div>
                        </div>
                        <hr />
                    </div>
                    <!-- order deatils -->
                    <div id="order-details" class="font-rale d-flex flex-column text-dark">
                        <small>Delivery by:Mar 29 -Apr 1</small>
                        <small>Sold by <a href="#" class="tate"> Daily Electronics </a> (4.5
                            out of 5| 18,198 ratings)</small>
                        <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliverd to
                            customer-424201</small>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="color my-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-ballo">color:</h6>
                                    <div class="colo rounded-circle">
                                        <button class="btn font-size-14"></button>
                                    </div>
                                    <div class="cole rounded-circle">
                                        <button class="btn font-size-14"></button>
                                    </div>
                                    <div class="cola rounded-circle">
                                        <button class="btn font-size-14"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <!-- <div class="input-group mb-3">
                    <button class="input-group-text decrement-btn">
                      <i class="fas fa-angle-up"></i>
                    </button>
                    <input
                      type="text"
                      class="form-control text-center input-qty bg-light"
                      value="1"
                      disabled
                    />
                    <button class="input-group-text increment-btn">
                      <i class="fas fa-angle-down"></i>
                    </button>
                  </div> -->
                            <!-- <!DOCTYPE html>
                  <html lang="en">
                    <head>
                      <meta charset="UTF-8" />
                      <meta
                        name="viewport"
                        content="width=device-width, initial-scale=1.0"
                      />
                      <title>Document</title>
                    </head> -->
                            <!-- <style>
                      .wrapper {
                        background-color: blue;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border-radius: 5%;
                      }
                      .wrapper span {
                        text-align: center;
                        font-size: 55px;
                        font-weight: 600;
                        width: 100%;
                        cursor: pointer;
                      }
                      .wrapper span.num {
                        font-size: 50px;
                        border-right: 2px solid rgba(0, 0, 0, 0.2);
                        border-left: 2px solid rgba(0, 0, 0, 0.2);
                        pointer-events: none;
                      }
                    </style> -->

                            <div class="wrapper d-flex">
                                <h6 class="font-baloo">Qty:</h6>
                                <button class="plas px-1 border bg-light">+</button>
                                <span class="num px-4 font-rale b-light bg-light">01</span>
                                <button class="minus px-2 border bg-light">-</button>
                            </div>

                            <!-- <script>
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
                      </script> -->


                            <!-- <div class="qty d-flex">
                    <h6 class="font-baloo">Qty</h6>
                    <div class="px-4 d-flex font-rale">
                      <button class="minus border bg-light">
                        <i class="fas fa-angle-up"></i>
                      </button>
                      <input
                        type="text"
                        class="num border px-2 w-50 bg-light"
                        disabled
                        value="1"
                        placeholder="1"
                      />
                      <button class="plus border bg-light">
                        <i class="fas fa-angle-down"></i>
                      </button>
                    </div>
                  </div> -->
                        </div>
                    </div>
                    <!-- end start color -->

                    <!-- size -->
                    <div class="size my-1">
                        <h6 class="font-baloo">size:</h6>
                        <div class="d-flex justify-content-between w-75">
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">4GB RAM</button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">6GB RAM</button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">8GB RAM</button>
                            </div>
                        </div>
                    </div>
                    <!-- size -->
                </div>
            </div>
            <div class="col-12">
                <h6 class="font-rubik">Product Desicription</h6>
                <hr />
                <p class="font-real font-size-14">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    rerum et quidem accusamus, distinctio consectetur perspiciatis ea
                    sint qui illum tempora praesentium eveniet modi exercitationem
                    quasi perferendis veritatis. Debitis, cum beatae reprehenderit
                    quidem atque fuga at inventore recusandae repellat aliquid eius
                    incidunt illum nihil voluptates nesciunt quo, aliquam tempora
                    vero?
                </p>
                <p class="font-real font-size-14">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    rerum et quidem accusamus, distinctio consectetur perspiciatis ea
                    sint qui illum tempora praesentium eveniet modi exercitationem
                    quasi perferendis veritatis. Debitis, cum beatae reprehenderit
                    quidem atque fuga at inventore recusandae repellat aliquid eius
                    incidunt illum nihil voluptates nesciunt quo, aliquam tempora
                    vero?
                </p>
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

<!-- ======== Start footer ========== -->
<!-- <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="fit">
                        <h4 class="font-rubik font-size-20">Mobile Shopee</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro,
                            sequi.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fit">
                        <h4 class="font-rubik font-size-20">Newslatter</h4>
                        <from class="form-row" style="display: flex">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email*" />
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">
                                    Subscribe
                                </button>
                            </div>
                        </from>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fit">
                        <h4 class="font-rubik font-size-20">information</h4>
                        <a href="" class="">About as</a><br />
                        <a href="" class="">Delivery information</a><br />
                        <a href="" class="">privacypolicy</a><br />
                        <a href="" class="">Terms & conditions</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fit">
                        <h4 class="font-rubik font-size-20">Account</h4>
                        <a href="" class="">My Account</a><br />
                        <a href="" class="">order History</a><br />
                        <a href="" class="">wish list</a><br />
                        <a href="" class="">News latters</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copy-right">
        <p>&copyright Mobile shoppe 2024 desing <a href="#">Syed Shahmeer.</a></p>
    </div> -->


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
<!-- <script src="index.js"></script>
</body>

</html> -->