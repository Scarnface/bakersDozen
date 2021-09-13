$(document).ready(function () {
  //Load the slick carousel and apply the required options.
  $(".productsCarousel").slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".testimonialsCarousel").slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    dots: true,
  });

  // Switch between the grab and default styling on mouse down/up.
  $(".carousel").mousedown(function () {
    $(".carousel").css("cursor", "grab");
  });

  $(".carousel").mouseup(function () {
    $(".carousel").css("cursor", "default");
  });
});
