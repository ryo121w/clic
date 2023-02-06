$(function () {
  var $header = $("#header");
  var scrollSize = 800; //超えると表示
  $(window).on("load scroll", function () {
    var value = $(this).scrollTop();
    if (value > scrollSize) {
      $header.addClass("scroll");
    } else {
      $header.removeClass("scroll");
    }
  });
});

$(function () {
  var $header = $("#store");
  var scrollSize = 800; //超えると表示
  $(window).on("load scroll", function () {
    var value = $(this).scrollTop();
    if (value > scrollSize) {
      $header.addClass("scroll");
    } else {
      $header.removeClass("scroll");
    }
  });
});

$(window).scroll(function () {
  var scrollAnimationElm = document.querySelectorAll('.scroll_up');
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 100;
      if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
        scrollAnimationElm[i].classList.add('on');
      }
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);
});