$(document).ready(function () {
  $("#fullpage").fullpage({
    // licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    autoScrolling: true,
    scrollHorizontally: true,
    lockAnchors: false,
    anchors: ["home", "1st", "2nd", "3rd", "4rd"],
    //sectionColor:['#333333','#666666','#cccccc','#efefef'],
    navigation: true,
    navigationPosition: "right",
    sectionSelector: ".section",
    css3: true,
    scrollingSpeed: 700,
    fitToSection: true,
    normalScrollElements: ".ps_aiwrap, .board_con, .modal_imgbox",
  });
  //$.fn.fullpage.setAllowScrolling(false);

  //background Image effect
  if (($("body").hasClass = "fp-viewing-home")) {
    $("header").css({ background: "transparent" });
    $(".header_wrap.center").css({
      background: "transparent",
      "box-shadow": "none",
    });
  }

  //pgnum2 card spin effect
  $(".skill_btn").click(function () {
    $(".card_wrap").toggleClass("flipped");
    // $(".skill_btn button").text('View Intro');
    if ($(".card_wrap").hasClass("flipped")) {
      $(".skill_btn button").text("View Intro");
    } else {
      $(".skill_btn button").text("View My Skill");
    }
  });

  //mouse wheel scroll event
  // jQuery Next or First / Prev or Last plugin
  $.fn.nextOrFirst = function (selector) {
    var next = this.next(selector);
    return next.length ? next : this.prevAll(selector).last();
  };
  $.fn.prevOrLast = function (selector) {
    var prev = this.prev(selector);
    return prev.length ? prev : this.nextAll(selector).last();
  };
  // Scroll Functions

  function scrollSection(parent, dir) {
    var active = "active",
      section = parent.find("." + active);
    if (dir == "prev") {
      section.removeClass(active).prevOrLast().addClass(active);
    } else {
      section.removeClass(active).nextOrFirst().addClass(active);
    }
  }
  // Bind Scroll function to mouse wheel event
  $(".ps_aiwrap").on("mousewheel wheel", function (e) {
    if (e.originalEvent.wheelDelta / 120 > 0) {
      // scroll up event
      scrollSection($(this), "prev");
    } else {
      // scroll down event
      scrollSection($(this));
    }
  });
  $(".ps_aiwrap").on("croll touchmove mousewheel", function (event) {
    event.preventDefault();
    event.stopPropagation();
    return false;
  });

  //Sub Navi Style Code
  $(".sub_navi").click(function () {
    $(this).toggleClass("on");
    $(this).toggleClass("off");

    if ($(this).hasClass("on")) {
      $(".sub_navibox").slideDown(200);
    } else {
      $(".sub_navibox").slideUp(200);
    }
  });
});

//vanilla Js Code

//typing Effect js
var typingBool = false;
var typingIdx = 0;
var liIndex = 0;
var liLength = $(".typing-txt>ul>li").length;

// ???????????? ???????????? ????????????
var typingTxt = $(".typing-txt>ul>li").eq(liIndex).text();
typingTxt = typingTxt.split(""); // ???????????? ?????????.
if (typingBool == false) {
  // ???????????? ???????????? ????????????
  typingBool = true;
  var tyInt = setInterval(typing, 100); // ????????????
}

function typing() {
  $(".typing ul li").removeClass("on");
  $(".typing ul li").eq(liIndex).addClass("on");
  if (typingIdx < typingTxt.length) {
    // ???????????? ????????? ???????????? ??????
    $(".typing ul li").eq(liIndex).append(typingTxt[typingIdx]); // ???????????? ????????????.
    typingIdx++;
  } else {
    if (liIndex < liLength - 1) {
      //??????????????????  ???????????? ???????????? 1??????
      liIndex++;
      //??????????????? ????????????????????? ??????
      typingIdx = 0;
      typingBool = false;
      typingTxt = $(".typing-txt>ul>li").eq(liIndex).text();

      //???????????? ???????????? 1??? ??????
      clearInterval(tyInt);
      //???????????????

      setTimeout(function () {
        //1????????? ?????? ????????? ?????? ??????
        tyInt = setInterval(typing, 100);
      }, 1000);
    } else if (liIndex == liLength - 1) {
      //????????? ???????????? ????????? ????????????
      clearInterval(tyInt);
    }
  }
}

//4rd page Button Click Event (Modal)
const btn_click = document.querySelector(".psai_txt button");
//console.log(btn_click);
const pngimg = document.querySelector(".imgbox.active");
const pngimgs = document.querySelectorAll(".imgbox");
//console.log(pngimgs);

const modal = document.querySelector(".modal_box");
const modalClose = document.querySelector(".modal_close");
const modalImgBox = document.querySelector(".modal_imgbox");

//let pngbackground = getComputedStyle(pngimg, 'active');
//console.log(pngbackground.backgroundImage);
function imageNameChange() {
  for (let i = 0; i < pngimgs.length; i++) {
    btn_click.addEventListener("click", function () {
      if (pngimgs[i].classList.contains("active")) {
        const pngbackground = getComputedStyle(pngimgs[i], "active");
        let pngback = pngbackground.backgroundImage;
        const backFirstUrl = pngback.substr(0, 35); //url("http://localhost/dy_pofol/
        const backSplitName = pngback.split("/");
        const backFileName = backSplitName[5];
        const backSliceName = backSplitName[5].split(".");
        const imageName = backSliceName[0].replace("_web", ""); //app_design
        const backSubUrl = pngback.substr(-6); //.png")
        const modalStyle = window.getComputedStyle(modalImgBox);
        const modalBackImage = modalStyle.backgroundImage;

        const totalImage = backFirstUrl + imageName + backSubUrl;
        pngback = totalImage; //url("http://localhost/dy_pofol/app_design.png")

        modalImgBox.style.backgroundImage = pngback;

        //modalBackImage.replace('url("http://localhost/dy_pofol/css/style.css")', pngback);
        //modalBackImage.replace('url()', backFirstUrl + imageName + backSubUrl);

        console.log(modalImgBox);
      }
    });
  }
  btn_click.onclick = function () {
    modal.style.display = "block";
  };
  modalClose.onclick = function () {
    modal.style.display = "none";
  };

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };

  document.onkeydown = function (e) {
    e = e || window.event;
    if ("key" in e ? e.key === "Escape" || e.key === "Esc" : e.keyCode === 27) modal.style.display = "none";
  };
}
imageNameChange();
