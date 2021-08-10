$(document).ready(function () {
  $('#wrap').fullpage({
    autoScrolling: true,
    scrollHorizontally: true,
    anchors: ['1st', '2nd', '3rd', '4rd'],
    sectionColor:['#333','#666','#ccc','#efefef'],
    navigation: true,
    navigationPosition: 'right',
    sectionSelector: '.section',
    scrollingSpeed:700,
  });
  $.fn.fullpage.setAllowScrolling(false);
});