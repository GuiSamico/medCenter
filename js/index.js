$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {

    var target = $(this.hash);

    if (target.length) {
      $('html, body').animate({ scrollTop: target.offset().top }, 1000);
      return false;
    }

  });
});

jQuery(document).ready(function(){

    jQuery("#subirTopo").hide();

    jQuery('a#subirTopo').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 400) {
            jQuery('#subirTopo').fadeIn();
        } else {
            jQuery('#subirTopo').fadeOut();
        }
    });


    // $('.nav a[href^="#"]').on('click', function(e) {
    // 	e.preventDefault();
    // 	var id = $(this).attr('href'),
    // 			targetOffset = $(id).offset().top;
    //
    // 	$('html, body').animate({
    // 		scrollTop: targetOffset - 100
    // 	}, 500);
    // });
});
