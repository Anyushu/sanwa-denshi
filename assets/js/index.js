// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import "./jquery.bgswitcher";

const img_url =
  window.location.protocol + "//" + window.location.hostname + "/wp-content/themes/sanwa-denshi/dist/images/";

$(function () {
  // Herofadein
  $(".Hero__image-left").bgswitcher({
    images: [img_url + "bg-left_01.png", img_url + "bg-left_02.png", img_url + "bg-left_03.png"],
    effect: "clip",
  });
  $(".Hero__image-right").bgswitcher({
    images: [img_url + "bg-right_01.png", img_url + "bg-right_02.png", img_url + "bg-right_03.png"],
    effect: "clip",
  });

  // home service
  $(".home__service__inner").on("click", function () {
    $(".home__service__inner.show").removeClass("show");
    $(this).addClass("show");
  });

  // scroll
  $(window).on("scroll", function () {
    let scroll = $(this).scrollTop();
    let ch = 600;
    if (scroll > ch) {
      $(".header").addClass("onscroll");
      $(".header-logo").attr("src", img_url + "logo_color.png");
    } else {
      $(".header").removeClass("onscroll");
      $(".header-logo").attr("src", img_url + "logo.png");
    }
  });

  // spmenu
  $("#nav-open").on("click", function () {
    $(this).toggleClass("active");
    $("#spnav").toggleClass("active");
  });
});
