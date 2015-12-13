//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

//scroll toTop
$(function() {
    $(window).scroll(function() { 
        if($(this).scrollTop() != 0) 
        {
            $('#toTop').fadeIn(); 
        } else {
            $('#toTop').fadeOut();
        }
    });
        $('#toTop').click(function() 
        {
            $('body,html').animate({scrollTop:0},800);
    }); 
}); 

//scroll toNext
/*var zTop = 1;
$('a').on('click',function(e){
  e.preventDefault();
  // Animate up or down based on DOM index
  var index = $($(this).attr('href')).index();
  var wh = $(window).height();
  $('section').each(function(){
    var $tgt = $(this);
    var idx = $tgt.index();
    $tgt.removeClass();
    if(index == idx){ $tgt.stop(true,true).animate({top:0},'linear').addClass('active').css({'z-index':zTop});  }
    if(index < idx) { $tgt.stop(true,true).animate({top:wh},'linear').addClass('below');  }
    if(index > idx ){ $tgt.stop(true,true).animate({top:-wh},'linear').addClass('above'); }
  });
  zTop++;
})

// Trigger first section animation
$('a[href="#main-slider"]').trigger('click');

// Set height 
$(window).on('resize',function(){
  var wh = $(window).height();
  $('article, section').height(wh);
  $('.active').css({top:0});
  $('.above').css({top:-wh});
  $('.below').css({top:wh});
}).trigger('resize');*/