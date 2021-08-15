$(document).ready(function () {
  $('#fullpage').fullpage({
    // licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    autoScrolling: true,
    scrollHorizontally: true,
    lockAnchors:false,
    anchors: ['home','1st', '2nd', '3rd', '4rd'],
    //sectionColor:['#333333','#666666','#cccccc','#efefef'],
    navigation: true,
    navigationPosition: 'right',
    sectionSelector: '.section',
    css3:true,
    scrollingSpeed: 700,
    fitToSection: true
  });
  //$.fn.fullpage.setAllowScrolling(false);

  //background Image effect
  if ($("body").hasClass = "fp-viewing-home") {
    $("header").css({ 'background': 'transparent' })
    $(".header_wrap.center").css({
      'background': 'transparent',
      'box-shadow': 'none'
    });
  };

  //pgnum2 card spin effect
  $(".skill_btn").click(function () {
    $(".card_wrap").toggleClass('flipped');
    // $(".skill_btn button").text('View Intro');
    if ($(".card_wrap").hasClass('flipped')) {
       $(".skill_btn button").text('View Intro');
    } else{
      $(".skill_btn button").text('View My Skill');
    }
  });

});

//typing Effect js

var typingBool = false;
var typingIdx = 0;
var liIndex = 0;
var liLength = $(".typing-txt>ul>li").length;

// 타이핑될 텍스트를 가져온다 
var typingTxt = $(".typing-txt>ul>li").eq(liIndex).text();
typingTxt = typingTxt.split(""); // 한글자씩 자른다. 
if (typingBool == false) { // 타이핑이 진행되지 않았다면 
  typingBool = true;
  var tyInt = setInterval(typing, 100); // 반복동작 
}

function typing() {
  $(".typing ul li").removeClass("on");
  $(".typing ul li").eq(liIndex).addClass("on");
  if (typingIdx < typingTxt.length) { // 타이핑될 텍스트 길이만큼 반복 
    $(".typing ul li").eq(liIndex).append(typingTxt[typingIdx]); // 한글자씩 이어준다. 
    typingIdx++;
  } else {
    if (liIndex < liLength - 1) {
      //다음문장으로  가기위해 인덱스를 1증가
      liIndex++;
      //다음문장을 타이핑하기위한 셋팅
      typingIdx = 0;
      typingBool = false;
      typingTxt = $(".typing-txt>ul>li").eq(liIndex).text();

      //다음문장 타이핑전 1초 쉰다
      clearInterval(tyInt);
      //타이핑종료

      setTimeout(function () {
        //1초후에 다시 타이핑 반복 시작
        tyInt = setInterval(typing, 100);
      }, 1000);
    } else if (liIndex == liLength - 1) {

      //마지막 문장까지 써지면 반복종료
      clearInterval(tyInt);
    }
  }
}
