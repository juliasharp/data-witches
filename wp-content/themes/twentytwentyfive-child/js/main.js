document.addEventListener("DOMContentLoaded", () => {
  const aboutH2 = document.querySelector(".page-id-168 .parent-page-header h2");
  const servicesH2 = document.querySelector(".page-id-161 .parent-page-header h2");

  if (aboutH2) {
    aboutH2.innerHTML = aboutH2.innerHTML.replace(/(About)/, "<span>$1</span>");
  }

  if (servicesH2) {
    servicesH2.innerHTML = servicesH2.innerHTML.replace(/(Services)/, "<span>$1</span>");
  }
});

/* Slick Slider */

jQuery(document).ready(function($) {
  $('.accolades-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1320,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 760,
        settings: {
          slidesToShow: 1,
        }
    }]
  });
});

