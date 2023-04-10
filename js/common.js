$(function(){
  var pos = 0;
  var header = $('header');
  
  $(window).on('scroll', function(){
    if($(this).scrollTop() < pos || $(this).scrollTop() < 500){
      //上スクロール時の処理
      header.removeClass('hide');
    }else{
      //下スクロール時の処理
      header.addClass('hide');
    }
    pos = $(this).scrollTop();
  });
});

$(function(){
  var pos = 0;
  var header = $('.ancwrap');
  
  $(window).on('scroll', function(){
    if($(this).scrollTop() < pos || $(this).scrollTop() < 500){
      header.removeClass('fixed');
    }else{
      header.addClass('fixed');
    }
    pos = $(this).scrollTop();
  });
});

$(window).on("scroll", function() {
  if (500 < jQuery(this).scrollTop()) {
    $('.roundbtn').addClass('show');
  } else {
    $('.roundbtn').removeClass('show');
  }
});

$(function(){
  var scrollStart = $('.pos').offset().top;
  var scrollEnd = $('.end').offset().top;
  var distance = 0;

  $(document).scroll(function(){
    distance = $(this).scrollTop();

    if (scrollStart <= distance) {
      $('.roundbtn').addClass('fixed');
    } else if (scrollStart >= distance) {
      $('.roundbtn').removeClass('fixed');
    }

    if (scrollEnd <= distance) {
      $('.roundbtn.show').fadeOut();
    } else{
      $('.roundbtn.show').fadeIn();
    }
  });
});
