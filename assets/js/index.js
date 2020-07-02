// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import slick from "slick-carousel";
import "./jquery.bgswitcher";

const img_url =
  window.location.protocol + "//" + window.location.hostname + "/wp-content/themes/sanwa-denshi/dist/images/";

$(function () {
  $('a[href^="#"]').on("click", function () {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - 90;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

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

  // slick
  $(".interview__list").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: ".interview__nav",
    adaptiveHeight: true,
  });
  $(".interview__nav").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: ".interview__list",
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    arrows: false,
  });

  $(".requirements__navs>div").on("click", function () {
    let id = $(this).attr("data-id");
    $(".requirements__navs>div").removeClass("active");
    $(".requirements__content>div").removeClass("active");
    $(this).addClass("active");
    $('.requirements__content>div[data-id="' + id + '"]').addClass("active");
  });
});
