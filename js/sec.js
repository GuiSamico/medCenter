$(document).click(function(e) {
    var target = e.target;
    $('.dropdown-menu').each(function() {
        var $this = $(this);
        var dropdown = $this.prev('.dropdown');
        if (dropdown[0] == target) $(this).toggle();
        else $(this).hide();
    });
});

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {

    var target = $(this.hash);

    if (target.length) {
      $('html, body').animate({ scrollTop: target.offset().top }, 1000);
      return false;
    }

  });
});
