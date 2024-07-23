(function ($) {
  "use strict";
  // localstorage all setting

  $(".biz-page-wrapperz").attr("class", localStorage.getItem("biz-page-wrapperz"));

  // dubai layout
  $(".default-view").click(function () {
    localStorage.setItem("biz-page-wrapperz", "compact-wrapper");
  });

  $(".los-view").click(function () {
    localStorage.setItem("biz-page-wrapperz", "horizontal-wrapper material-type");
  });

  $(".paris-view").click(function () {
    localStorage.setItem("biz-page-wrapperz", "compact-wrapper dark-sidebar");
  });

  $(".tokyo-view").click(function () {
    localStorage.setItem("biz-page-wrapperz", "compact-sidebar");
  });

  $(".moscow-view").click(function () {
    localStorage.setItem("biz-page-wrapperz", "compact-sidebar compact-small");
  });

  $(".singapore-view").click(function () {
    localStorage.setItem("biz-page-wrapperz", "horizontal-wrapper enterprice-type");
  });

  $(".newyork-view").click(function () {
    localStorage.setItem("biz-page-wrapperz", "compact-wrapper box-layout");
  });

  $(".barcelona-view").click(function () {
    localStorage.setItem(
      "biz-page-wrapperz",
      "horizontal-wrapper enterprice-type advance-layout"
    );
  });

  $(".madrid-view").click(function () {
    localStorage.setItem("biz-page-wrapperz", "compact-wrapper color-sidebar");
  });

  $(".rome-view").click(function () {
    localStorage.setItem(
      "biz-page-wrapperz",
      "compact-sidebar compact-small material-icon"
    );
  });

  $(".seoul-view").click(function () {
    localStorage.setItem("compact-wrapper modern-type");
  });

  $(".landon-view").click(function () {
    localStorage.setItem("biz-page-wrapperz", " only-body");
  });

  $(".prooduct-details-box .close").on("click", function (e) {
    var tets = $(this).parent().parent().parent().parent().addClass("d-none");
    console.log(tets);
  });
})(jQuery);
