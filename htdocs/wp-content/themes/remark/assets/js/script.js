(function ($) {
  /*======================
  Category toggle
  ======================*/

  jQuery(document).ready(function() {
    toggleIcon = $('.site-header .toggle-icon-mobile');
    toggleIcon.on('click', function() {
      $(this).next().slideToggle();
      
    })

    categoryToggle = $('.widget .children');
    categoryToggle.hide();
    categoryToggle.before('<span class="cat-toggle-icon"><i class="fa-solid fa-angle-down"></i></span>');
    hangleIcon = $('.cat-toggle-icon');
    hangleIcon.on('click', function() {
      $(this).toggleClass('active');
      $(this).next().slideToggle();
    })

    // -------------------------------------------------------------
    // handle social share button wrap
    // -------------------------------------------------------------
    function popWindow(url, name, w, h) {
      var w = w || 600,
        h = h || 400,
        name = name || "_blank",
        dualScreenLeft =
          window.screenLeft != undefined ? window.screenLeft : screen.left,
        dualScreenTop =
          window.screenTop != undefined ? window.screenTop : screen.top,
        width = window.innerWidth
          ? window.innerWidth
          : document.documentElement.clientWidth
            ? document.documentElement.clientWidth
            : screen.width,
        height = window.innerHeight
          ? window.innerHeight
          : document.documentElement.clientHeight
            ? document.documentElement.clientHeight
            : screen.height,
        left = width / 2 - w / 2 + dualScreenLeft,
        top = height / 2 - h / 2 + dualScreenTop;

      return window.open(
        url,
        name,
        "toolbar=0,status=0, resizable=yes, width=" +
        w +
        ", height=" +
        h +
        ", top=" +
        top +
        ", left=" +
        left
      );
    }
    
    // PopUp Window Opener
    $.fn.popUp = function () {
      var href = $(this).attr("href")
        ? $(this).attr("href")
        : $(this).data("href")
          ? $(this).data("href")
          : false,
        name = $(this).attr("target")
          ? $(this).attr("target")
          : $(this).data("target")
            ? $(this).data("target")
            : false,
        width = $(this).data("width") ? $(this).data("width") : false,
        height = $(this).data("height") ? $(this).data("height") : false;
      if (!href) return false;
      return popWindow(href, name, width, height);
    };

    // popup for share icons
    $(".social-share .share-link").on("click", function (event) {
      event.preventDefault();
      var popup = $(this).popUp();
      if (popup != false) popup.focus();
    });

  })

})(jQuery);