"use strict";

$(document).ready(function () {
  //Load the slick carousel and apply the required options.
  $(".productsCarousel").slick({
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    prevArrow: "<i class=\"slick-prev-arrow fa-solid fa-circle-chevron-left\"></i>",
    nextArrow: "<i class=\"slick-prev-arrow fa-solid fa-circle-chevron-right\"></i>",
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }, {
      breakpoint: 576,
      settings: {
        slidesToShow: 1
      }
    }]
  });
  $(".testimonialsCarousel").slick({
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    dots: true
  }); // Switch between the grab and default styling on mouse down/up.

  $(".carousel").mousedown(function () {
    $(".carousel").css("cursor", "grab");
  });
  $(".carousel").mouseup(function () {
    $(".carousel").css("cursor", "default");
  });
});