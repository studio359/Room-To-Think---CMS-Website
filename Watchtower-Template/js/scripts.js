$(document).ready(function(){
  'use strict';
  if('#homepage'){
    var a = $('#main-nav').outerHeight();
    $('#homepage').css({'margin-top':a*-1, 'padding-top':a, 'padding-bottom':a});
    $('#homepage').fadeIn(700);
  }
});