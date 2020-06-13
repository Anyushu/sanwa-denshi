// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import "./jquery.bgswitcher";

const img_url = window.location.protocol + window.location.hostname + "/wp-content/themes/sanwa-denshi/dist/images/";

// loading anim
$(window).on("load", function () {
  $(".loading__line-inner").on("webkitAnimationEnd", function () {
    $(".loading__line-inner").hide();
    setTimeout(function () {
      $("body").addClass("loaded");
      setTimeout(function () {
        $(".Hero__catch").addClass("visible");
      }, 300);
    }, 700);
  });
  $(".loading").on("transitionend", function () {
    $(this).remove();
  });
});

// fadein
$(function () {
  $(window).on("scroll", function () {
    $(".fadein").each(function () {
      let elemPos = $(this).offset().top;
      //fadeinが配置されている座標を取得する
      let scroll = $(window).scrollTop();
      //画面がどれくらいスクロールされたかの値を取得する
      let windowHeight = $(window).height();
      //画面の高さを取得する
      if (scroll > elemPos - windowHeight + 100) {
        //スクロール量の方が大きかったらクラスを追加する
        $(this).addClass("scrollin");
      }
    });
  });
});

// Herofadein
$(".Hero__image-left").bgswitcher({
  images: ["dist/images/hero_02.jpg", "dist/images/hero_04.jpg", "dist/images/hero_06.jpg"],
  effect: "clip",
});

$(".Hero__image-right").bgswitcher({
  images: ["dist/images/hero_01.jpg", "dist/images/hero_03.jpg", "dist/images/hero_05.jpg"],
  effect: "clip",
});
