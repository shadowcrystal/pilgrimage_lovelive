$(function(){

  $('#nav_toggle').click(function(){
          $("header").toggleClass('open');
          if($("header").hasClass('open')){
            $('.headerToggleNavigation').fadeIn(500);
          }else{
            $('.headerToggleNavigation').fadeOut(500);
          }
        });

        $('.headerNavigation li a').each(function(){
          var $href = $(this).attr('href');
          if(location.href.match($href)){
            $(this).find('.fontEn').addClass('active');
          }else{
            $(this).find('.fontEn').removeClass('active');
          }
        });
});
