// $(document).ready(function () {
//   $("#top-sale.owl-carousel").owlcarousel({
//     loop: true,
//     nav: true,
//     dots: false,
//     responsive: {
//       0: {
//         items: 1,
//       },
//       600: {
//         items: 3,
//       },
//       1000: {
//         items: 5,
//       },
//     },
//   });
// });

// var swiper = new Swiper(".mySwiper", {
//   effect: "coverflow",
//   grabCursor: true,
//   centeredSlides: true,
//   slidesPerView: "auto",
//   coverflowEffect: {
//     rotate: 50,
//     stretch: 0,
//     depth: 100,
//     modifier: 1,
//     slideShadows: true,
//   },
//   pagination: {
//     el: ".swiper-pagination",
//   },
// });

$(document).ready(function () {
  if ($(".bbb_viewed_slider").length) {
    var viewedSlider = $(".bbb_viewed_slider");

    viewedSlider.owlCarousel({
      loop: true,
      margin: 30,
      autoplay: true,
      autoplayTimeout: 6000,
      nav: false,
      dots: false,
      responsive: {
        0: { items: 1 },
        575: { items: 2 },
        768: { items: 3 },
        991: { items: 4 },
        1199: { items: 6 },
      },
    });

    if ($(".bbb_viewed_prev").length) {
      var prev = $(".bbb_viewed_prev");
      prev.on("click", function () {
        viewedSlider.trigger("prev.owl.carousel");
      });
    }

    if ($(".bbb_viewed_next").length) {
      var next = $(".bbb_viewed_next");
      next.on("click", function () {
        viewedSlider.trigger("next.owl.carousel");
      });
    }
  }

  // isotope folter
  var $grid = $(".grid").isotope({
    itemselector: ".grid-item",
    layoutMode: "fitRows",
  });

  //  filter items on button click
  $(".button-group").on("click", "button", function () {
    var filtervalue = $(this).attr("data-filter");
    $grid.isotope({ filter: filtervalue });
  });

  // product qty
  // let $qty_up = $(".qty.qty-up");
  // let $qty_down = $(".qty.qty-down");
  // let $input = $(".qty.qty_input");

  // $qty_up.click(function (e) {
  //   if ($input.val() >= 1 && $input.val() <= 9) {
  //     $input.val(function (i, oldval) {
  //       return ++oldval;
  //     });
  //     alert(qty);
  //   }
  // });
  // $qty_down.click(function (e) {
  //   if ($input.val() > 1 && $input.val() <= 10) {
  //     $input.val(function (i, oldval) {
  //       return --oldval;
  //     });
  //   }
  // });
});
