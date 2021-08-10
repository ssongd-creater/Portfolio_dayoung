$(document).ready(function () {
  $('#fullpage').fullpage({
    // licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    autoScrolling: true,
    scrollHorizontally: false,
    lockAnchors:false,
    anchors: ['1st', '2nd', '3rd', '4rd'],
    //sectionColor:['#333333','#666666','#cccccc','#efefef'],
    navigation: true,
    navigationPosition: 'right',
    sectionSelector: '.section',
    css3:true,
    scrollingSpeed: 700,
    fitToSection: true
  });
  $.fn.fullpage.setAllowScrolling(false);
});