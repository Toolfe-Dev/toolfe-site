(function ($) {
  "use strict";
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".biz-page-headerz").fadeOut();
      $(".biz-biz-page-bodyz-wrapperz").addClass("scorlled");
    } else {
      $(".biz-page-headerz").fadeIn();
      $(".biz-biz-page-bodyz-wrapperz").removeClass("scorlled");
    }
  });
})(jQuery);
