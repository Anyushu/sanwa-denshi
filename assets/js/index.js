// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import "./jquery.bgswitcher";

const img_url =
  window.location.protocol + "//" + window.location.hostname + "/wp-content/themes/sanwa-denshi/dist/images/";

departmentFunc();

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
  images: [img_url + "bg-left_01.png", img_url + "bg-left_02.png", img_url + "bg-left_03.png"],
  effect: "clip",
});

$(".Hero__image-right").bgswitcher({
  images: [img_url + "bg-right_01.png", img_url + "bg-right_02.png", img_url + "bg-right_03.png"],
  effect: "clip",
});

function departmentFunc() {
  var t = 1,
    i = $(".department-list li"),
    n = $(".department-list .department-bg-area .department-bg");
  $(".department-list ul .department-list-nav").on("click", function () {
    var e = $(this).attr("name").charAt(4);
    t =
      0 == t
        ? (i.removeClass("show"),
          i.eq(e - 1).addClass("show"),
          n.eq(t).removeClass("show"),
          n.eq(e - 1).addClass("show"),
          winW < spW &&
            i.eq(e - 1).css({
              height:
                i
                  .eq(e - 1)
                  .find(".department-list-item")
                  .innerHeight() +
                i
                  .eq(e - 1)
                  .find(".department-list-item h4")
                  .innerHeight() +
                i
                  .eq(e - 1)
                  .find(".department-list-item p")
                  .outerHeight(!0),
            }),
          e)
        : e == t
        ? (i.removeClass(),
          i.eq(e - 1).css({
            height: i
              .eq(e - 1)
              .find("button")
              .innerHeight(),
          }),
          n.eq(t - 1).removeClass("show"),
          n.eq(0).addClass("show"),
          0)
        : (i.eq(t - 1).removeClass("show"),
          i.eq(e - 1).addClass("show"),
          n.eq(t - 1).removeClass("show"),
          n.eq(e - 1).addClass("show"),
          winW < spW &&
            (i.eq(t - 1).css({
              height: i
                .eq(t - 1)
                .find("button")
                .innerHeight(),
            }),
            i.eq(e - 1).css({
              height:
                i
                  .eq(e - 1)
                  .find(".department-list-item")
                  .innerHeight() +
                i
                  .eq(e - 1)
                  .find(".department-list-item h4")
                  .innerHeight() +
                i
                  .eq(e - 1)
                  .find(".department-list-item p")
                  .outerHeight(!0),
            })),
          e);
  });
}
function departmentFunc_sp() {
  $(".department-list li").each(function () {
    $(this).hasClass("show")
      ? $(this).css({
          height:
            $(this).find(".department-list-item").innerHeight() +
            $(this).find(".department-list-item h4").innerHeight() +
            $(this).find(".department-list-item p").outerHeight(!0),
        })
      : $(this).css({ height: $(this).find("button").innerHeight() });
  });
}