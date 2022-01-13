(function($) {

  $('.slider-content').slick({
    autoplay: true,
    autoplaySpeed: 4500,
    speed: 1500,
    // adaptiveHeight: true, // スライドの高さの自動調整の有効化[default:false]
    dots: false,
    arrows: false,
    fade: true,
    cssEase: 'linear',
    pauseOnFocus: false,
    pauseOnHover: false
  });

})(jQuery);